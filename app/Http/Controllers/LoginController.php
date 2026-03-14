<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if ($usuario && Hash::check($request->password, $usuario->password)) {

            Auth::login($usuario);
            $request->session()->regenerate();

            // redirigir según rol
            if ($usuario->role_id == 1) {
                return redirect('/dashboard'); // administrador
            }

            if ($usuario->role_id == 2) {
                return redirect('/dashboard'); // caja
            }

            return redirect('/dashboard'); // usuario normal
        }

        return back()->withErrors([
            'email' => 'Credenciales incorrectas'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}