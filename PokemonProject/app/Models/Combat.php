<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Combat extends Model
{
    use HasFactory;

    protected $fillable = [
        'mode',
        'user_id',
        'date',
        'status',
    ];

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class, 'combat_pokemons');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'combat_users');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
