<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
 

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/usuario/{nombre}', [UsuarioController::class, 'mostrar']);


Route::get('/verificar-servicio', [ServicioController::class, 'verificarPago']);

