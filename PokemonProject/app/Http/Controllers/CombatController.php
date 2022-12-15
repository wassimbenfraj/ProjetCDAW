<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombatController extends Controller
{
    //


    public function index(Request $request)
    {


        return view('combat', [
            'users' => \App\Models\User::with('combats')
                ->with('combatsWon')
                ->get(),
            'pokemons' => \App\Models\Pokemon::inRandomOrder()
                ->with('energy')
                ->get()
        ]);
    }
}
