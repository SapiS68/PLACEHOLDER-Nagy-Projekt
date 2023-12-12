<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Attempt;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class StatsController extends Controller
{
    public function getGameStatistics(Carbon $date = null) {
        if($date == null) {
            $date = Carbon::today();
        }

        $stats = [];

        $question = Question::find($date);
        
        $stats['game_name'] = DB::table('solutions')
            ->select('solution_name')
            ->where('solution_id', $question['solution_id'])
            ->first()->solution_name;
        $filename = md5($question['solution_id']);
        $stats['game_cover'] = "/images/solutions/$filename.webp";

        $stats['attempts_1'] = (int)$question['first_attempt'];
        $stats['attempts_2'] = (int)$question['second_attempt'];
        $stats['attempts_3'] = (int)$question['third_attempt'];
        $stats['attempts_4'] = (int)$question['fourth_attempt'];
        $stats['attempts_5'] = (int)$question['fifth_attempt'];
        $stats['attempts_failed'] = (int)$question['missed'];
        $stats['attempts_total'] = $this->sum(
            $question,
            'first_attempt',
            'second_attempt',
            'third_attempt',
            'fourth_attempt',
            'fifth_attempt',
            'missed');
        $stats['attempts_total'] = max($stats['attempts_total'], 1);
        
        $clue_images = "";
        for ($i=0; $i < 5; $i++) { 
            $filename = md5($date->toDateString() . '-' . ($i+1));
            $clue_images .= "/images/questions/$filename.webp" . ($i<4 ? ";" : "");
        }
        $stats['clue_images'] = $clue_images;

        $stats['average_time'] = $this->to_readable_time( (int)$question['total_time_in_secs'] / $stats['attempts_total'] );
        $stats['user_time'] = "N/A";
        $stats['user_attempts'] = 0;

        $attempt = 
            Attempt::where('date','=',$date)
            ->where('username','=', auth()->user()['username'])
            ->first();
        if($attempt) {
            $stats['user_time'] = $this->to_readable_time($attempt['attempt_time']->secondsSinceMidnight());
            $stats['user_attempts'] = $attempt['attempt_number'];
        }



        return View::make('game_results')->with('stats', $stats);
    }
    public function viewStatsForDate($rawdate) {
        //return $rawdate;
        $date = Carbon::createFromFormat("Y-m-d", $rawdate)->startOfDay();
        
        if(!Question::find($date) || $date >= Carbon::today()) {
            return view('no_game');
        }

        return $this->getGameStatistics($date);
    }

    public function getUserStatistics()
    {

        $attempt_count = [];
        $attempt_total = 0;
        $attempt_sum = 0;
        $i = 0;
        $groups = [-1,1,2,3,4,5];
        foreach ($groups as $group) {
            $value = DB::table('attempts')
                -> select(DB::raw('COUNT(1) AS count'))
                -> where("username", "=", auth()->user()->username)
                -> where("attempt_number", "=", $group)
                -> where("finished", "=", 1)
                -> value('count');

            array_push($attempt_count, (int)$value);
            $attempt_total += (int)$value;
            $attempt_sum += $i * (int)$value;
            $i++;
        }

        $attempt_won = $attempt_total - $attempt_count[0];
        $attempt_avg = round($attempt_sum / max(1, $attempt_won), 2);

        $time_secs_total = DB::table('attempts')
            -> select(DB::raw('SUM(time_to_sec(attempt_time)) AS total_time'))
            -> where('username', '=', auth() -> user() -> username)
            -> where("finished", "=", 1)
            -> value('total_time');
        
        $stats = [
            'attempts' => $attempt_count,
            'attempts_total' => $attempt_total,
            'attempts_won' => $attempt_won,
            'attempts_avg' => $attempt_avg,
            'time_avg' => $this -> to_readable_time($time_secs_total / max(1,$attempt_total))
        ];

        return View::make('user_stat')->with('stats', $stats);
    }

    private function sum($data, ...$keys) {
        $sum = 0;
        foreach ($keys as $key) {
            $sum += (int)$data[$key];
        }
        return $sum;
    }
    private function to_readable_time($seconds) {
        $seconds = floor($seconds);

        $reverse_time = [0, 0, 0];
        for ($i=0; $i < 2; $i++) { 
            $reverse_time[$i] = $seconds % 60;
            $seconds = floor($seconds / 60);
        }
        $reverse_time[2] = $seconds;

        $secs = str_pad($reverse_time[0], 2, "0", STR_PAD_LEFT);  
        $mins = str_pad($reverse_time[1], 2, "0", STR_PAD_LEFT);  
        $hrs = str_pad($reverse_time[2], 2, "0", STR_PAD_LEFT);  

        return "$hrs:$mins:$secs";
    }
}
