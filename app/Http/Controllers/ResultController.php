<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function index()
    {
        $results = DB::table('scores')
            ->join('contestants', 'scores.contestant_id', '=', 'contestants.id')
            ->select(
                'contestants.id',
                'contestants.first_name',
                'contestants.last_name',
                DB::raw('SUM(scores.score) as total_score')
            )
            ->groupBy(
                'contestants.id',
                'contestants.first_name',
                'contestants.last_name'
            )
            ->orderByDesc('total_score')
            ->get();

        return view('results.index', compact('results'));
    }
}