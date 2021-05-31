<?php

namespace App\Http\Controllers;

use App\Models\Run;
use Illuminate\Http\Request;

class RunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runs = Run::all();
        return view('runs.index', ['runs' => $runs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('runs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'runName' => 'required',
            'runDesc' => 'required',
//            'startLatitude' => 'required',
//            'startLongitude' => 'required',
//            'endLatitude' => 'required',
//            'endLongitude' => 'required',
        ]);

        $run = new run();
        $run->runName = request('runName');
        $run->runDesc = request('runDesc');
//        $run->startLatitude = request('startLatitude');
//        $run->startLongitude = request('startLatitude');
//        $run->endLatitude = request('endLatitude');
//        $run->endLongitude = request('endLongitude');
//        $run->user_id = Auth::user()->id;
        $run->save();

        return redirect('runs');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Run $run
     * @return \Illuminate\Http\Response
     */
    public function show(Run $run)
    {
        return view('runs.show', ['run' => $run]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Run $run
     * @return \Illuminate\Http\Response
     */
    public function edit(Run $run)
    {
        return view('runs.edit', ['run' => $run]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Run $run
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Run $run)
    {
        request()->validate([
            'runName' => 'required',
            'runDesc' => 'required',


//            'startLongitude' => 'required',
//            'endLatitude' => 'required',
//            'longitude' => 'required',
        ]);
        $run->update($request->all());
        return redirect('runs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Run $run
     * @return \Illuminate\Http\Response
     */
    public function destroy(Run $run)
    {
        $run->delete();
        return redirect('runs');
    }

}
