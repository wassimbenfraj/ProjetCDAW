<?php
use PokePHP\PokeApi;

require 'Pokemon.php' ;
$base = "https://pokeapi.co/api/v2/pokemon/";

if(isset($_POST['name']))
{
    $data = file_get_contents($base. $id . '/');
    $pokemonData = json_decode($data);
    $pokemon = new Pokemon($pokemonData->id,$pokemonData->name, $pokemonData->sprites->other->dream_world->front_default) ;
    header('Location: ../../../backend/menus.php');
}
else{
    for ($i = 1 ; $i < 20; $i++){
        $id = $i;
        $data = file_get_contents($base. $id . '/');
        $pokemonData = json_decode($data);
        $pokemon = new Pokemon($pokemonData->id,$pokemonData->name, $pokemonData->sprites->other->dream_world->front_default) ;
        $pokemons[] = $pokemon;
    };
}
//$api = new PokeApi;
//$pokemon = $api->pokemon(12);






