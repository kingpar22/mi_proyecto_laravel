<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens;

    protected $table = 'usuarios';

    protected $fillable = [
        'name',
        'email',
        'telefono',
        'password',
        'role_id',
        'estado'
    ];

    protected $hidden = [
        'password'
    ];
}