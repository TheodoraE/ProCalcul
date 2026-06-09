<?php

namespace App\Http\Controllers;

use App\Models\CalculUser;
use App\Models\Dailyuser;
use App\Models\User;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    public function index(){
        // daily + proteins left
        // $calculUser = CalculUser::all();
        // consommation: name, quantity, proteins

        // $user = User::find(auth()->id());
        $user = User::first(); // A changer pour récupérer l'utilisateur connecté
        $dailyUsers = Dailyuser::all();

        if ($dailyUsers == null){
            $dailyUsers = 0;
        }

        return view('pages/daily', compact('user', 'dailyUsers'));
    }

    public function edit($id)
    {
        $edit = User::find($id);
        return view('pages/edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->maxProtein = $request->input('max_proteins');
        $user->save();

        return redirect('/daily')->with('success', 'Max protein updated.');
    }

    public function destroy($id)
    {
        $destroy = Dailyuser::find($id);
        $destroy->delete();
        return redirect('/daily');
    }

    public function destroyALL()
    {
        $destroyALL = Dailyuser::all();

        foreach ($destroyALL as $item) {
            $item->delete();
        }
        return redirect('/daily');
    }
}
