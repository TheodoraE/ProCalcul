<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AlimentController extends Controller
{
    public function getResources(){

        $resource = [];

        $resource['aliments'] = Aliment::getActives();

        return response()->json(['resource' => $resource], JsonResponse::HTTP_OK);
    }

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
        //
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
        //
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

    
    public function getAliment($type = "all"){

        $resource = [];

        if($type == "all"){
            $resource['aliments'] = Aliment::getActives();
        } else {
            $resource['aliments'] = Aliment::getByType($type);
        }

        return response()->json(['resource' => $resource], JsonResponse::HTTP_OK);
    }
}
