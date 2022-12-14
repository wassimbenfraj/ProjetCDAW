<?php

namespace App\Http\Controllers;

use App\Models\EnergyUser;
use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //

    public function login(Request $request){
        return view('login');
    }

    public function signup(Request $request){
        return view('signup');
    }

    public function store(Request $request){
        $formfields = $request->validate([
           'name' => ['required','min:3'],
           'email' => ['required','email', Rule::unique('users','email')],
           'password' => 'required|confirmed|min:6'
        ]);

        $formfields['password'] = bcrypt($formfields['password']);
        $formfields['level'] = 1 ;
        $energy = DB::table('energies')
            ->inRandomOrder()
            ->first();
        $user = User::create($formfields);
        EnergyUser::create([
            'user_id' => $user->id,
            'energy_id' => $energy->id,
        ]);

    }

}
