<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Attempt;
use App\Models\Question;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
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
        
        $success = ($answer->solution_name == $request['guess']);
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
        $attempt->save();

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
