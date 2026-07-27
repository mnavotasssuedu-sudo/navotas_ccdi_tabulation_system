<?php

namespace App\Http\Controllers;

use App\Models\Judge;
use Illuminate\Http\Request;

class JudgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $judges = Judge::all();

    return view('judges.index', compact('judges'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    if(auth()->user()->role != 'tabulator'){
    abort(403, 'Access Denied');
}
    return view('judges.create');
}

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    if(auth()->user()->role != 'tabulator'){
    abort(403, 'Access Denied');
}
    Judge::create([
        'contest_id' => 1,
        'judge_name' => $request->judge_name,
        'position' => $request->position,
        
    ]);

    return redirect()->route('judges.index');
}
    /**
     * Display the specified resource.
     */
    public function show(Judge $judge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Judge $judge)
{
    if(auth()->user()->role != 'tabulator'){
    abort(403, 'Access Denied');
}
    return view('judges.edit', compact('judge'));
}
    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, Judge $judge)
{
    if(auth()->user()->role != 'tabulator'){
    abort(403, 'Access Denied');
}
    $judge->update([
        'judge_name' => $request->judge_name,
        'position' => $request->position,
    ]);

    return redirect()->route('judges.index');
}

    /**
     * Remove the specified resource from storage.
     */
  public function destroy(Judge $judge)
{
    if(auth()->user()->role != 'tabulator'){
    abort(403, 'Access Denied');
}
    $judge->delete();

    return redirect()
            ->route('judges.index')
            ->with('success', 'Judge deleted successfully!');
}
}
