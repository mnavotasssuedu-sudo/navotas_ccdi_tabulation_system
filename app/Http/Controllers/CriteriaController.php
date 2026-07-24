<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $criteria = \App\Models\Criteria::all();

    return view('criteria.index', compact('criteria'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('criteria.create');
}

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'percentage' => 'required|integer',
    ]);

    $total = \App\Models\Criteria::sum('percentage');

    if (($total + $request->percentage) > 100) {
        return back()->with('error', 'Total percentage cannot exceed 100%.');
    }

    \App\Models\Criteria::create([
        'name' => $request->name,
        'percentage' => $request->percentage,
    ]);

    return redirect()
        ->route('criteria.index')
        ->with('success', 'Criteria added successfully!');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $criteria = \App\Models\Criteria::findOrFail($id);

    return view('criteria.edit', compact('criteria'));
}

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'percentage' => 'required|integer',
    ]);

    $criteria = \App\Models\Criteria::findOrFail($id);

    $total = \App\Models\Criteria::where('id', '!=', $id)
        ->sum('percentage');


    if (($total + $request->percentage) > 100) {

        return back()
            ->with('error', 'Total percentage cannot exceed 100%.');

    }


    $criteria->update([
        'name' => $request->name,
        'percentage' => $request->percentage,
    ]);


    return redirect()
        ->route('criteria.index')
        ->with('success', 'Criteria updated!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $criteria = \App\Models\Criteria::findOrFail($id);

    $criteria->delete();

    return redirect()->route('criteria.index');
}
}
