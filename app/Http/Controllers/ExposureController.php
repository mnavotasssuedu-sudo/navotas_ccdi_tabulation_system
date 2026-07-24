<?php

namespace App\Http\Controllers;

use App\Models\Exposure;
use Illuminate\Http\Request;


class ExposureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $exposures = Exposure::all();

    return view('exposures.index', compact('exposures'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exposures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    Exposure::create([
        'exposure_name' => $request->exposure_name,
        'order' => $request->order,
        'is_final' => $request->is_final,
    ]);

    return redirect()
            ->route('exposures.index')
            ->with('success', 'Exposure added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(Exposure $exposure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Exposure $exposure)
{
    return view('exposures.edit', compact('exposure'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Exposure $exposure)
{
    $exposure->update([
        'exposure_name' => $request->exposure_name,
        'order' => $request->display_order,
        'is_final' => $request->is_final,
    ]);

    return redirect()
            ->route('exposures.index')
            ->with('success', 'Exposure updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Exposure $exposure)
{
    $exposure->delete();

    return redirect()
            ->route('exposures.index')
            ->with('success', 'Exposure deleted successfully!');
}
}
