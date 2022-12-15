<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombatController extends Controller
{
    //


    public function index(Request $request)
    {
        return view('combat');
//        return view('combat', [
//            'pokemons' => \App\Models\Pokemon::with('energy')->paginate(10)
//        ]);
    }
}
