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
        $dailyusers = Dailyuser::all();
        return response(compact('dailyusers'), JsonResponse::HTTP_OK);
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
            "aliment_id" => 'required|integer|exists:aliments,id',
            "quantity" => 'required|numeric',
            "proteins" => 'required|numeric',
        ]);

        $newEntry = new Dailyuser;
        // aliment_id is a primitive value from the request, not an object
        $newEntry->aliment_id = $request->aliment_id;
        $newEntry->quantity   = $request->quantity;
        $newEntry->proteins   = $request->proteins;

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
