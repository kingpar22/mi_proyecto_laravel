<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';

    protected $fillable = [
        'nombre',
        'velocidad_subida',
        'velocidad_bajada',
        'precio',
        'perfil_mikrotik',
        'estado'
    ];
}