<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function (Request $request) {
    return view('index', [
        'pokemons' => \App\Models\Pokemon::all()
    ]);
});

Route::get('/pokemons', function (Request $request) {
    return view('pokemons', [
        'pokemons' => \App\Models\Pokemon::all()
    ]);
});

Route::get('/login', function (Request $request) {
    return view('login');
});

Route::get('/signup', function (Request $request) {
    return view('signup');
});



Route::post('/pokemons/sort','App\Http\Controllers\PokemonController@sortPokemons');


