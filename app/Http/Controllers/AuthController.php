<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {

        $usuario = $request->usuario;
        $password = $request->password;

        if ($usuario === "admin" && $password === "1234") {

            $token = "token_prueba_123";

            return response()->json([
                "success" => true,
                "token" => $token,
                "message" => "Login correcto"
            ]);

        }

        return response()->json([
            "error" => true,
            "message" => "Credenciales incorrectas"
        ], 401);
    }


    public function perfil()
    {

        return response()->json([
            "usuario" => "admin",
            "perfil" => "usuario autenticado"
        ]);

    }

}
