<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});
 

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/usuario/{nombre}', [UsuarioController::class, 'mostrar']);


Route::get('/verificar-servicio', [ServicioController::class, 'verificarPago']);




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard protegido por login
Route::get('/dashboard', function () {
    return view('dashboard'); // tu vista dashboard.blade.php
})->middleware('auth');

Route::get('/clientes', function () {
    return view('Lista_cliente'); 
})->middleware('auth');

Route::get('/clientes/registro', [ClienteController::class, 'create'])->name('clientes.create');