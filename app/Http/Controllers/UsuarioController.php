<?php

namespace App\Http\Controllers;


class UsuarioController extends Controller
{
     public function mostrar($nombre)
    {
        $nombreMayus = strtoupper($nombre);
        return view('usuario', ['nombre' => $nombreMayus]);
    }
}
