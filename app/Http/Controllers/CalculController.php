<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use App\Models\User;
use Illuminate\Http\Request;

class CalculController extends Controller
{
    public function index()
    {
        $repertories = Aliment::getActives();
        $maxProtein = User::first();

        return view('welcome', compact('repertories', 'maxProtein'));
    }

    // public function create()
    // {
    //     return view('welcome');
    // }

    public function store(Request $request)
    {
        $store = new User();

        $store->name = $request->name;
        $store->quantity = $request->quantity;
        $store->proteins = $request->proteins;

        $store->save();
        return redirect()->back();
    }

}
