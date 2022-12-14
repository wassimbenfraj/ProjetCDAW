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



Route::get('/',[\App\Http\Controllers\PokemonController::class, 'index']);
Route::get('/pokemons',[\App\Http\Controllers\PokemonController::class, 'show']);


Route::get('/login',[\App\Http\Controllers\UserController::class, 'login']);
Route::get('/signup',[\App\Http\Controllers\UserController::class, 'signup']);




Route::post('/pokemons/sort',[\App\Http\Controllers\PokemonController::class, 'sortPokemons']);

