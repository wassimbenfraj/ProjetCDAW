<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combat extends Model
{
    use HasFactory;


    public function pokemons()
    {
        return $this->belongsToMany(User::class,'combat_pokemons');
    }
    public function users()
    {
        return $this->belongsToMany(Energy::class, 'combat_users');
    }
}
