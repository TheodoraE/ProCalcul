<?php

namespace App\Http\Controllers;

use App\Models\CalculUser;
use App\Models\User;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    public function index(){
        $calculUser = CalculUser::all();
        $users = User::all();
        return view('pages/daily', compact('calculUser', "users"));
    }


}
