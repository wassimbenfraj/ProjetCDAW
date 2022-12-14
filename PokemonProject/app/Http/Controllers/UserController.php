<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login(Request $request){

        return view('login');
    }

    public function signup(Request $request){
        return view('signup');

    }
}
