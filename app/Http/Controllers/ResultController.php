<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('results.index',['results'=>$results]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('results.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        request()->validate([
            'runName' => 'required',
            'runDesc' => 'required',
            'id'=> 'required',
            'runDate'=> 'required',
            'runTime'=> 'required',
            'startLatitude' => 'required',
            'startLongitude' => 'required',
            'endLatitude' => 'required',
            'endLongitude' => 'required',
        ]);

        $run = new run();
        $run->runName = request('runName');
        $run->runDesc = request('runDesc');
        $run->save();

        $result = new result();
        $result->id = request('id');
        $result->runDate = request('runDate');
        $result->runTime = request('runTime');
        $result->startLatitude = request('startLatitude');
        $result->startLongitude = request('startLatitude');
        $result->endLatitude = request('endLatitude');
        $result->endLongitude = request('endLongitude');
        $result->save();

        return redirect('results');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        return view('results.show',['result'=>$result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        return view('results.edit',['result'=>$result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        request()->validate([
            'runDate'=> 'required',
            'runTime'=> 'required',
            'startLatitude' => 'required',
            'startLongitude' => 'required',
            'endLatitude' => 'required',
            'endLongitude' => 'required',
            ]);

        $result->update($request->all());

        return redirect('results');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
            $result->delete();
            return redirect('results');
    }

}
