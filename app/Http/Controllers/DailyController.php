<?php

namespace App\Http\Controllers;

use App\Models\CalculUser;
use App\Models\MaxProtein;
use App\Models\User;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    public function index(){
        // daily + proteins left
        $calculUser = CalculUser::all();
        // consommation: name, quantity, proteins
        $users = User::all();

        $maxProteins = MaxProtein::all();
        return view('pages/daily', compact('calculUser', 'users', 'maxProteins'));
    }

    public function edit($id)
    {
        $edit = MaxProtein::find($id);
        return view('pages/edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $maxProteins = MaxProtein::all();
        $users = User::all();


        $update = MaxProtein::find($id);
        $update->max_proteins = $request->max_proteins;
        $update->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $destroy = User::find($id);
        $destroy->delete();
        return redirect('/');
    }

    public function destroyALL()
    {
        $destroyALL = User::all();

        foreach ($destroyALL as $item) {
            $item->delete();
        }
        return redirect('/');
    }
}
