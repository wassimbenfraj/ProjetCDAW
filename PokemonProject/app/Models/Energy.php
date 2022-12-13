<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Energy extends Model
{
    use HasFactory;

    private static $base_url = "https://pokeapi.co/api/v2/pokemon/";


    public static function fetchEnergies()
    {
        $energies = [];
        for ($i = 1; $i < 50; $i++) {
            $id = $i;
            $data = file_get_contents(self::$base_url . $id . '/');
            $pokemonData = json_decode($data);
            $energies[] = $pokemonData->types[0]->type->name;
        };
        $energies = array_unique($energies);
        foreach ($energies as $energy)
            Energy::create([
                'name' => $energy,
            ]);
    }
}
