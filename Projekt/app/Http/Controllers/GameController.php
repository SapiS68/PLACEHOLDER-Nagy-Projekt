<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Attempt;
use App\Models\Question;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    public function add_or_modify_question(Request $request) {
        $rules = [
            'name' => ['required'],
            'date' => ['required', 'date']
        ];
        $rules_when_creating = [];
        for ($i=0; $i < 5; $i++) { 
            //$rules['clue'.($i+1)] = ['file', 'image'];
            $rules_when_creating['clue'.($i+1)] = ['required', 'file', 'image'];
        }
        $messages = [
            'required' => "A(z) ':attribute' mező kötelezően kitöltendő",
            'date' => "A(z) ':attribute' mezőnek dátumnak kell lennie",
        ];
        $messages_when_creating = [
            'required' => "A(z) ':attribute' mező kötelezően kitöltendő új kérdőív feltöltésénél",
            'file' => "A(z) ':attribute' mezőnek fájlnak kell lennie",
            'image' => "A(z) ':attribute' mezőnek képnek kell lennie",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors());
        }

        $date = Carbon::createFromFormat('Y-m-d', $request['date'])->startOfDay();
        if($date <= Carbon::today()) {
            return Redirect::back()->withErrors(['Csak a mai dátum után lehet kérdőívet hozzáadni az adatbázishoz']);
        }

        $question = Question::find($date);
        if($question == null) {
            $validator = Validator::make($request->all(), $rules_when_creating, $messages_when_creating);
            if($validator->fails()) {
                return Redirect::back()->withErrors(['Új kérdőív létrehozásánál kötelező minden képhez fájlt feltölteni.']);
            }
        }

        $solution = DB::table('solutions')
            ->select('solution_id')
            ->whereRaw("LOWER(solution_name) = ?", [strtolower($request['name'])])
            ->first();
        if($solution == null) {
            return Redirect::back()->withErrors(['A megadott játéknév nem létezik']);
        }
        
        for ($i=0; $i < 5; $i++) { 
            $file = $request->file('clue'.($i+1));
            if($file == null) {
                continue;
            }

            $filename = md5($date->toDateString() . '-' . ($i+1));
            $file->move(public_path("images/questions"), "$filename.webp");
        }
        Question::updateOrCreate([
            'date' => $date,
            'solution_id' => $solution->solution_id
        ]);

        return Redirect::back()->withErrors(["Sikeres " . ($question == null ? "hozzáadás" : "módosítás") . "!"]);
    }

    public function autocomplete(string $substr = '') {
        if(strlen($substr) < 3) {
            return response()->json([], 200);
        }

        $games = DB::table('solutions')
            ->select('solution_id as id', 'solution_name as name')
            ->where('solution_name', 'like', "%$substr%")
            ->get();
        return response()->json($games, 200);
    }

    public function guess(Request $request) {
        $user = auth('api')->user();

        if(!isset($request['guess']) || empty($request['guess'])) {
            return response()->json(['error' => 'Guessed game name (\'guess\') is not given'], 400);
        }

        $id = Carbon::today();
        $question = Question::find($id);
        if(!$question) {
            return response()->json(['nogame' => true], 200);
        }
        
        $attempt = $this->__get_or_create_attempt($id, $user);
        if($attempt->finished) {
            return response()->json(['error' => 'User already finished the game.'], 200);
        }

        $answer = DB::table('solutions')
            ->select('solutions.*')
            ->join('questions', 'questions.solution_id', '=', 'solutions.solution_id')
            ->where('questions.date', $id)
            ->first();
        
        $success = (strtolower($answer->solution_name) == strtolower($request['guess']));
        $finished = ($success || $attempt->attempt_number+1 >= 5);
        
        if($finished && !$success) {
            $attempt->attempt_number = -1; // Ha nem találta el a felhasználó a játéknevet és túllépett a limiten, állítsa be -1-re
        }
        else {
            $attempt->attempt_number += 1;
        }
        $attempt->finished = $finished;
        //return Carbon::createFromTimestamp($attempt->created_at)->diff(Carbon::now())->toDateTimeString();
        
        $start = Carbon::createFromTimestamp($attempt->created_at);
        $stop = Carbon::now();
        $attempt->attempt_time = Carbon::parse(gmdate('H:i:s', $stop->diffInSeconds($start)));

        if($finished) {
            $question->total_time_in_secs += $attempt->attempt_time->diffInSeconds(Carbon::today());
            switch ($attempt->attempt_number) {
                case 1:
                    $question->first_attempt += 1; break;
                case 2:
                    $question->second_attempt += 1; break;
                case 3:
                    $question->third_attempt += 1; break;
                case 4:
                    $question->fourth_attempt += 1; break;
                case 5:
                    $question->fifth_attempt += 1; break;
                default:
                    $question->missed += 1; break;
            }
            $question->save();
        }
        //$attempt->save();
        $attempt_time = $attempt['attempt_time']->toTimeString();

        $attempt = $attempt->toArray();
        unset($attempt['date']);
        unset($attempt['username']);
        $attempt['attempt_time'] = $attempt_time;
        unset($attempt['created_at']);
        $attempt['updated_at'] = Carbon::now()->toDateTimeString();

        DB::table('attempts')
            ->where('date','=',$id)
            ->where('username','=',$user['username'])
            ->update($attempt);

        return response()->json(['message' => 'Success!'], 200);
    }

    public function get_attempt_info(Request $request) {
        $user = auth('api')->user();
        $id = Carbon::today();

        $question = Question::find($id);
        if(!$question) {
            return response()->json(['nogame' => true], 200);
        }
        
        $attempt = $this->__get_or_create_attempt($id, $user);

        $image_urls = [];
        for ($i=0; $i < $attempt['attempt_number']+1; $i++) { 
            $filename = md5($id->toDateString() . '-' . ($i+1));
            array_push($image_urls, "/images/questions/$filename.webp");
        }

        $start = Carbon::createFromTimestamp($attempt->created_at);
        $stop = Carbon::now();

        $response = [
            'finished' => $attempt['finished'],
            'attempts_made' => $attempt['attempt_number'],
            'time_in_secs' => Carbon::parse(gmdate('H:i:s', $stop->diffInSeconds($start)))->diffInSeconds(Carbon::today()),
            'images' => $image_urls
        ];
        return response()->json($response, 200);
    }

    public function get_game_name(Request $request) {
        $user = auth('api')->user();
        if($user['role_id'] == 0) {
            return response()->json(["error" => "Access denied"], 401);
        }

        if(!isset($request["date"])) {
            return response()->json(["error" => "'date' is not given"], 400);
        }

        $date = null;
        try {
            $date = Carbon::createFromFormat("Y-m-d", $request['date'])->startOfDay();
        } catch (\Throwable $th) {
            return response()->json(["error" => "Date is in invalid format"]);
        }

        $question = Question::find($date);

        if(!$question) {
            return response()->json(["nogame" => true]);
        }

        $json = ["nogame" => false];
        $json["game_name"] = DB::table('solutions')
            ->select("solution_name")
            ->where('solution_id', $question['solution_id'])
            ->first()->solution_name;
        
        return response()->json($json, 200);
    }
    
    private function __get_or_create_attempt($id, $user) {
        $attempt =
            Attempt::where('date','=',$id)
            ->where('username','=',$user['username'])
            ->first();
        if(!$attempt) {
            /*$attempt = */Attempt::create(
                array(
                    'date' => $id,
                    'username' => $user['username'],
                    'attempt_number' => 0,
                    'finished' => false
                )
            );
            $attempt = 
                Attempt::where('date','=',$id)
                ->where('username','=',$user['username'])
                ->first();
        }

        return $attempt;
    }
}
