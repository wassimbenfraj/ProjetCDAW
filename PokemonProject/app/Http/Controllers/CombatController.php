<?php

namespace App\Http\Controllers;

use App\Models\Combat;
use App\Models\CombatPokemon;
use App\Models\CombatUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CombatController extends Controller
{
    //


    public function index(Request $request)
    {


        return view('combat', [
            'users' => \App\Models\User::with('combats')
                ->with('combatsWon')
                ->where('id','!=', Auth::id())
                ->get(),
            'pokemons' => \App\Models\Pokemon::inRandomOrder()
                ->with('energy')
                ->get()
        ]);
    }

    public function save(Request $request)
    {
       $combat = Combat::create([
            'mode' => $request->mode,
            'user_id' => $request->winner,
            'date' => date("Y-m-d H:i:s"),
            'status' => "finished",
        ]);

        foreach ($request->pokemons1 as $pokemon)
            CombatPokemon::create([
                'combat_id' => $combat->id,
                'pokemon_id' => $pokemon->id,
                'user_id' => $request->user1,
            ]);
        foreach ($request->pokemons2 as $pokemon)
            CombatPokemon::create([
                'combat_id' => $combat->id,
                'pokemon_id' => $pokemon->id,
                'user_id' => $request->user2,
            ]);

        CombatUser::create([
            'combat_id' => $combat->id,
            'user_id' => $request->user1,
        ]);
        CombatUser::create([
            'combat_id' => $combat->id,
            'user_id' => $request->user2,
        ]);

        return "success";
    }

}
