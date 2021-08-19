<?php

namespace App\Http\Controllers;

use App\Models\Dailyuser;
use Illuminate\Http\Request;

class DailyuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    // public function storeDaily(Request $request)
    // {
    //     $store = new Dailyuser();

    //     // $store->aliment_id = $request->id;
    //     // $store->quantity = $request->quantity;
    //     // $store->proteins = $request->proteins;

    //     $store->aliment_id = 1;
    //     $store->quantity = 1;
    //     $store->proteins = 1;
    //     $store->save();
    //     return redirect('/');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dailyuser  $dailyuser
     * @return \Illuminate\Http\Response
     */
    public function show(Dailyuser $dailyuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dailyuser  $dailyuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Dailyuser $dailyuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dailyuser  $dailyuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dailyuser $dailyuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dailyuser  $dailyuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dailyuser $dailyuser)
    {
        //
    }
}
