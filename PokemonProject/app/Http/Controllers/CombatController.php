<?php

namespace App\Http\Controllers;

use App\Models\Combat;
use App\Models\CombatPokemon;
use App\Models\CombatUser;
use App\Models\EnergyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CombatController extends Controller
{
    //


    public function index(Request $request)
    {

        return view('combat', [
            'users' => \App\Models\User::with('combats')
                ->with('combatsWon')
                ->where('id', '!=', Auth::id())
                ->get(),
            'pokemons' => \App\Models\Pokemon::inRandomOrder()
                ->with('energy')
                ->get()
        ]);
    }

    public function replay(Combat $combat)
    {

        $pokemons1 = [];
        $pokemons2 = [];

        if ($combat->users[0]->id == Auth::id()) {
            $user2 = $combat->users[1];
        } else {
            $user2 = $combat->users[0];
        }

        foreach ($combat->pokemons as $pokemon) {
            if ($pokemon->pivot->user_id == Auth::id()) {
                $pokemons1[] = $pokemon;
            } else {
                $pokemons2[] = $pokemon;
            }
        }
        return view('replayCombat', [
            'user1' => Auth::user(),
            'user2' => $user2,
            'mode' => $combat->mode,
            'pokemons1' => $pokemons1,
            'pokemons2' => $pokemons2
        ]);

    }

    public function save(Request $request)
    {
        // creating combat  row
        $combat = Combat::create([
            'mode' => $request->mode,
            'user_id' => $request->winner,
//            'date' => date("Y-m-d H:i:s"),
            'status' => "finished",
        ]);

        // checking if winner should upgrade level
        $user = \App\Models\User::with('combatsWon')
            ->where('id', '=', $request->winner)
            ->first();

        if (count($user->combatsWon) % 10 == 0) {
            $user->update([
                'level' => $user->level++
            ]);
        }

        // adding new energy skill to winner
        do {
            $energy = DB::table('energies')
                ->inRandomOrder()
                ->first();
            $exist = DB::table('energy_users')
                ->where('energy_id', '=', $energy->id)
                ->first();
        } while ($exist != null);


        EnergyUser::create([
            'user_id' => $request->winner,
            'energy_id' => $energy->id,
        ]);

        //adding first user's pokemons played in combat to database
        foreach ($request->pokemons1 as $pokemon)
            CombatPokemon::create([
                'combat_id' => $combat->id,
                'pokemon_id' => $pokemon['id'],
                'user_id' => $request->user1,
            ]);
        //adding second user's pokemons played in combat to database
        foreach ($request->pokemons2 as $pokemon)
            CombatPokemon::create([
                'combat_id' => $combat->id,
                'pokemon_id' => $pokemon['id'],
                'user_id' => $request->user2,
            ]);

        // adding userCombat relationShip
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
