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

}
