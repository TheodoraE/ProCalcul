<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\Request;

class RepertoryController extends Controller
{
    public function index(){
        $repertories = Aliment::all();
        return view('pages/repertory', compact('repertories'));
    }


}
