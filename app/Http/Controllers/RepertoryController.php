<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepertoryController extends Controller
{
    public function index(){
        
        return view('pages/repertory');
    }


}
