<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

protected $fillable = [
    'nombre',
    'apellido',
    'telefono',
    'direccion',
    'codigo_postal',
    'referencia',
    'email',
    'plan_id',
    'usuario_pppoe',
    'password_pppoe',
    'fecha_corte',
    'estado',
    'fecha_instalacion',
    'ultimo_pago',
    'observaciones'
];
}
