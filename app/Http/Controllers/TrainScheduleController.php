<?php

namespace App\Http\Controllers;

use app\Train_schedule;
use Illuminate\Http\Request;

class TrainScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = train_schedule::all();
        return view('train_schedule.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('train_schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $train_schedule = new train_schedule;
        $train_schedule->Nama_kereta = $request->input('Nama_Kereta');
        $train_schedule->Stasiun_Keberangkatan = $request->input('Stasiun_Keberangkatan');
        $train_schedule->Waktu_Keberangkatan = $Request->input('Waktu_keberangkatan');
        $train_schedule->Stasiun_Kedatangan = $request->input('Stasiun_kedatangan');
        $train_schedule->Waktu_Kedatangan = $requst->input('Waktu_Kedatangan');
        $train_schedule->Waktu_Yang_Ditempuh = $requst->input('Waktu_Yang_Ditempuh');
        $train_schedule->save();

        return redirect('train_schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = train_schedule::findOrFail($id);
        return view('train_schedule.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
