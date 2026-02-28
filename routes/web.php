<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});
 

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/usuario/{nombre}', [UsuarioController::class, 'mostrar']);