<?php

namespace App\Http\Controllers;

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
}
