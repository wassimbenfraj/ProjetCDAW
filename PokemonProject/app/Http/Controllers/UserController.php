<?php

namespace App\Http\Controllers;

use App\Models\EnergyUser;
use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function show(Request $request){
        return view('profile');
    }

    public function showEdit(){
        return view('editProfile');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }
    public function authenticate(Request $request){

        $formfields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formfields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials',
        ])->onlyInput('email');
    }

    public function update(Request $request){
        $formfields = $request->validate([
            'email' => ['required','email'],
            'oldPass' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        $checkFields = [
          'email' => $formfields['email'] ,
          'password' => $formfields['oldPass']
        ];
        if (auth()->attempt($checkFields)) {
            $user = \App\Models\User::with('combatsWon')
                ->where('id', '=', Auth::id())
                ->first();
            $user->update([
                'password' => bcrypt($formfields['password'])
            ]);
            return redirect('/profile/edit')->with('message', 'success');
        }
    }

    public function stats(Request $request){
        $users = \App\Models\User::with('combats')
            ->with('combatsWon')
            ->get();
        $users = $users->toArray();
        usort($users, function($a, $b) {return count($a['combats_won']) < count($b['combats_won']);});
        return view('stats', [
            'users' => $users
        ]);

    }


    public function store(Request $request){
        $formfields = $request->validate([
           'name' => ['required','min:3'],
           'image' => 'required|mimes:jpg,jpeg,png',
           'email' => ['required','email', Rule::unique('users','email')],
           'password' => 'required|confirmed|min:6'
        ]);

        if ($request->hasFile('image')) {
            $formfields['image'] = $request->file('image')->store('avatar', 'public');
        }

        $formfields['password'] = bcrypt($formfields['password']);
        $formfields['level'] = 1 ;
        $pokemons = [];
        while (count($pokemons) < 3) {
            $energy = DB::table('energies')
                ->inRandomOrder()
                ->first();

            $pokemons = DB::table('pokemons')
                ->where('level', '=', 1)
                ->where('energy_id', '=', $energy->id)
                ->get();
        }
        $user = User::create($formfields);
        EnergyUser::create([
            'user_id' => $user->id,
            'energy_id' => $energy->id,
        ]);

        auth()->login($user);

        return redirect('/')->with('message', 'User Created and logged In');
    }

}
