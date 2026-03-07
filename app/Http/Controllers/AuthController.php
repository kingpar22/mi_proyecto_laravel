<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(Request $request)
    {

        $usuario = Usuario::where('email', $request->email)->first();

        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response()->json([
                "error" => true,
                "message" => "Credenciales incorrectas"
            ], 401);
        }

        $token = $usuario->createToken("token_login")->plainTextToken;

        return response()->json([
            "success" => true,
            "token" => $token,
            "usuario" => $usuario->name
        ]);
    }


    public function perfil(Request $request)
    {
        return response()->json([
            "usuario" => $request->user()
        ]);
    }

}