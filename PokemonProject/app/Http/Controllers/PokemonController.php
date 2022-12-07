<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PokemonController extends Controller
{
    public function sortPokemons(Request $request){
        $postData = $request->post();
        $list = Pokemon::all()->sortByDesc($request->type) ;

        return view('pokemon/listPokemon', [
            'pokemons' => $list
        ]);
    }
}
