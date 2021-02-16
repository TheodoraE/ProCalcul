<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\Request;

class CalculController extends Controller
{
    public function index(){
        $repertories = Aliment::all();
        return view('welcome', compact('repertories'));
    }


}
