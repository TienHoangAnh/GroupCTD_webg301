<?php

namespace App\Http\Controllers;

use App\Models\healthcheck;
use Illuminate\Http\Request;

class healthcheckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $healthchecks = healthcheck::all();

        return view('healthcheck.index', [
            'healthchecks' => $healthchecks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('healthcheck.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $healthcheck = new healthcheck();

        $healthcheck->name = $request->name;
        $healthcheck->birth = $request->birth;
        $healthcheck->gender = $request->gender;
        $healthcheck->id = $request->id;
        $healthcheck->address = $request->address;
        $healthcheck->height = $request->height;
        $healthcheck->weight = $request->weight;
        $healthcheck->medicialHistory = $request->medicialHistory;
        $healthcheck->medicialSchedule = $request->medicialSchedule;
        $healthcheck->save();
        return redirect('/healthchecks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $healthcheck = healthcheck::find($id);

        return view('healthcheck.show', [
            'healthcheck' => $healthcheck,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $healthcheck = healthcheck::find($id);

        return view('healthcheck.edit', [
            'healthcheck' => $healthcheck,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $healthcheck = healthcheck::find($id);

        $healthcheck->name = $request->name;
        $healthcheck->birth = $request->birth;
        $healthcheck->gender = $request->gender;
        $healthcheck->id = $request->id;
        $healthcheck->address = $request->address;
        $healthcheck->height = $request->height;
        $healthcheck->weight = $request->weight;
        $healthcheck->medicialHistory = $request->medicialHistory;
        $healthcheck->medicialSchedule = $request->medicialSchedule;
        $healthcheck->save();

        return redirect('/healthchecks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $healthcheck = healthcheck::find($id);

        $healthcheck->delete();

        return redirect('/healthchecks');
    }
}
