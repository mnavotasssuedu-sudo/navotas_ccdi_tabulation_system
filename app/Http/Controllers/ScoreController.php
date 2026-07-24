<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Judge;
use App\Models\Contestant;
use App\Models\Criteria;
use Illuminate\Http\Request;


class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $scores = \App\Models\Score::with([
        'judge',
        'contestant',
        'criteria'
    ])->get();

    return view('scores.index', compact('scores'));
}

    /**
     * Show the form for creating a new resource.
     */
 public function create()
{
    $judges = Judge::all();
    $contestants = Contestant::all();
    $criteria = Criteria::all();

    return view('scores.create', compact(
        'judges',
        'contestants',
        'criteria'
    ));
}
    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'contestant_id' => 'required',
        'scores' => 'required',
    ]);


    foreach($request->scores as $criteria_id => $score)
    {

        Score::create([
           'judge_id' => $request->judge_id,

            'contestant_id' => $request->contestant_id,

            'criteria_id' => $criteria_id,

            'score' => $score,
        ]);

    }


    return redirect()
        ->route('scores.create')
        ->with('success','Scores submitted successfully!');
}
    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
}
