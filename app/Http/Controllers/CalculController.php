<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use App\Models\Dailyuser;
use App\Models\User;
use Illuminate\Http\Request;

class CalculController extends Controller
{
    public function index()
    {
        $repertories = Aliment::getActives();
        $maxProtein = User::first();

        // Total Protéines
        $dailyUser = Dailyuser::all();

        if ($dailyUser == null){
            $dailyUser = 0;
        }

        return view('welcome', compact('repertories', 'maxProtein', 'dailyUser'));
    }

    // public function create()
    // {
    //     return view('welcome');
    // }

    

}
