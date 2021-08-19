<?php

namespace App\Http\Controllers;

use App\Models\Dailyuser;
use Illuminate\Http\JsonResponse;
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
    public function store(Request $request)
    {
        $validation = $request->validate([
            "aliment_id" => 'required|integer',
            "quantity" => 'required|integer',
            "proteins" => 'required|integer',
        ]);

        $newEntry = new Dailyuser;
        $newEntry->aliment_id = $request->id;
        $newEntry->quantity = $request->quantity;
        $newEntry->proteins = $request->proteins;
        // $newEntry->aliment_id = 1;
        // $newEntry->quantity = 1;
        // $newEntry->proteins = 1;

        $newEntry->save();

        return response()->json(['message' => "Form processed"], JsonResponse::HTTP_OK);
    }

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
