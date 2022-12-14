<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnergyUser extends Model
{
    use HasFactory;

    protected $table = 'energy_users';


    protected $fillable = [
        'user_id',
        'energy_id',
    ];
}
