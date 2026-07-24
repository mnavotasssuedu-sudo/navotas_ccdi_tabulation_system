<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Contestant;
use Illuminate\Http\Request;


class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $contestants = Contestant::latest()->paginate(10);

    return view('contestants.index', compact('contestants'));
}

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $contests = Contest::all();

    return view('contestants.create', compact('contests'));
}
    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    Contestant::create([
        'contestant_no' => $request->contestant_no,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'course'  => $request->course,
        'gender' => $request->gender,
    ]);

    return redirect()->route('contestants.index')
        ->with('success', 'Contestant added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(Contestant $contestant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Contestant $contestant)
{
    return view('contestants.edit', compact('contestant'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Contestant $contestant)
{
    $contestant->update([
        'contestant_no' => $request->contestant_no,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
       'course' => $request->course,
        'gender' => $request->gender,
    ]);

    return redirect()
        ->route('contestants.index')
        ->with('success', 'Contestant updated successfully!');
}
    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Contestant $contestant)
{
    $contestant->delete();

    return redirect()
        ->route('contestants.index')
        ->with('success', 'Contestant deleted successfully!');
}
}
