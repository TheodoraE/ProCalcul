<?php

namespace App\Http\Controllers;

use App\Models\CalculUser;
use App\Models\Dailyuser;
use App\Models\MaxProtein;
use App\Models\User;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    public function index(){
        // daily + proteins left
        // $calculUser = CalculUser::all();
        // consommation: name, quantity, proteins
        $users = User::all();
        $dailyUsers = Dailyuser::all();

        // $maxProteins = MaxProtein::all();
        return view('pages/daily', compact('users', 'dailyUsers'));
    }

    public function edit($id)
    {
        // $edit = MaxProtein::find($id);
        // return view('pages/edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        // $maxProteins = MaxProtein::all();
        // $users = User::all();


        // $update = MaxProtein::find($id);
        // $update->max_proteins = $request->max_proteins;
        // $update->save();

        // return redirect('/', compact('maxProteins', 'users'));
    }

    public function destroy($id)
    {
        $destroy = Dailyuser::find($id);
        $destroy->delete();
        return view('pages/daily');
    }

    public function destroyALL()
    {
        $destroyALL = Dailyuser::all();

        foreach ($destroyALL as $item) {
            $item->delete();
        }
        return redirect('/');
    }
}
