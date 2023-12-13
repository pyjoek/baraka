<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\History;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Track::all();
        return view('history', ['datas' => $datas]);
        // return response()->json($datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Track();
        $data->car_number = $request->carN;
        $data->driver_name = $request->driverN;
        $data->phone_number = $request->phoneN;
        $data->reason = $request->reason;
        $data->time_in = $request->time_in;
        $data->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        date_default_timezone_set('Africa/Dar_es_salaam');
        $hour = intval(date('H'));
        $min = intval(date('i'));
        $time_out = $hour.":".$min;

        $data = Track::find($id);
        $datas = new History();
        $datas->car_number = $data->car_number;
        $datas->driver_name = $data->driver_name;
        $datas->phone_number = $data->phone_number;
        $datas->reason = $data->reason;
        $datas->time_in = $data->time_in;
        $datas->time_out = $time_out;
        $datas->save();
        
        $data = Track::find($id);
        $data->delete();
        return redirect('/show')->with('success', 'Item deleted successfully');
    }

    public function backups()
    {
        $history = History::all();
        return view('backup',['history' => $history]);
    }
}
