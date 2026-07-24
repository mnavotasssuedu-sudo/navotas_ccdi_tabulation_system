<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;

class ContestController extends Controller
{
   public function index()
{
    $contests = Contest::latest()->get();

    return view('contests.index', compact('contests'));
}

    public function create()
    {
        return view('contests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'contest_name' => 'required',
            'contest_type' => 'required',
            'number_of_judges' => 'required|integer',
            'number_of_contestants' => 'required|integer',
            'tabulator_name' => 'required',
        ]);

        Contest::create($request->all());

        return redirect()->route('contests.index')
            ->with('success', 'Contest created successfully.');
    }

    public function show(Contest $contest)
    {
        return view('contests.show', compact('contest'));
    }

    public function edit(Contest $contest)
    {
        return view('contests.edit', compact('contest'));
    }

    public function update(Request $request, Contest $contest)
    {
        $request->validate([
            'contest_name' => 'required',
            'contest_type' => 'required',
            'number_of_judges' => 'required|integer',
            'number_of_contestants' => 'required|integer',
            'tabulator_name' => 'required',
        ]);

        $contest->update($request->all());

        return redirect()->route('contests.index')
            ->with('success', 'Contest updated successfully.');
    }

    public function destroy(Contest $contest)
    {
        $contest->delete();

        return redirect()->route('contests.index')
            ->with('success', 'Contest deleted successfully.');
    }
}