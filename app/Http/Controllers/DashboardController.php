<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Este método es obligatorio para la ruta /dashboard
    public function index()
    {
       return redirect('/dashboard.html');// apunta a resources/views/dashboard.blade.php
    }
}