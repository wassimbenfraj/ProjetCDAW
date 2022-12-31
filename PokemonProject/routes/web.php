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


//             Pokemon Controller

Route::get('/', [\App\Http\Controllers\PokemonController::class, 'index']);
Route::get('/pokemons', [\App\Http\Controllers\PokemonController::class, 'show']);
Route::post('/pokemons/sort', [\App\Http\Controllers\PokemonController::class, 'sortPokemons']);


//              User Controller

//login form
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');
//signup form
Route::get('/signup', [\App\Http\Controllers\UserController::class, 'signup'])->middleware('guest');
//register user
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);
//user authentication
Route::post('/users/authenticate', [\App\Http\Controllers\UserController::class, 'authenticate']);
//user logout
Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
// user profile
Route::get('/profile', [\App\Http\Controllers\UserController::class, 'show'])->middleware('auth');




//              Combat Controller

Route::get('/combat', [\App\Http\Controllers\CombatController::class, 'index'])->middleware('auth');
Route::post('/combat', [\App\Http\Controllers\CombatController::class, 'save'])->middleware('auth');
Route::get('/combat/{combat}', [\App\Http\Controllers\CombatController::class, 'replay'])->middleware('auth');

