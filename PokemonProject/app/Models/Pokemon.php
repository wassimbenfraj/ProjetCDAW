<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    private static  $base_url = "https://pokeapi.co/api/v2/pokemon/";


    public static function fetchPokemons()
    {
        $pokemons = [];
        for ($i = 1 ; $i < 50; $i++){
            $id = $i;
            $data = file_get_contents(self::$base_url. $id . '/');
            $pokemonData = json_decode($data);
            Pokemon::create([
                'name' => $pokemonData->name,
                'energy' => $pokemonData->types[0]->type->name,
                'level' => rand(1,10),
                'hp' => $pokemonData->stats[0]->base_stat,
                'attack' =>  $pokemonData->stats[1]->base_stat,
                'special_defense' => $pokemonData->stats[4]->base_stat,
                'special_attack' => $pokemonData->stats[3]->base_stat,
                'image' => $pokemonData->sprites->other->dream_world->front_default,
            ]);
        };

    }
}
