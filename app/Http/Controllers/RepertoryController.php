<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\Request;

class RepertoryController extends Controller
{
    public function index(){
        $repertories = Aliment::all();
        $vegetables = Aliment::where('type', "Légume")->get();
        $fruits = Aliment::where('type', "Fruits")->get();
        $juiceVegetables = Aliment::where('type', "Jus de légumes")->get();
        $juiceFruits = Aliment::where('type', "Jus de fruits")->get();
        $divers = Aliment::where('type', "Divers")->get();
        $specialProducts = Aliment::where('type', "Produits spéciaux")->get();
        $homeFoods = Aliment::where('type', "Plats maison")->get();
        // dd($vegetables);
        return view('pages/repertory', compact('repertories', 'vegetables', 'fruits', 'juiceVegetables', 'juiceFruits', 'divers', 'specialProducts', 'homeFoods'));
    }


}
