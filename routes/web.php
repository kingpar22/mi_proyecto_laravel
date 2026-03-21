<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard protegido
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Clientes
    Route::get('/clientes/registro', [ClienteController::class, 'create'])->name('clientes.create');
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

    // Recurso completo de clientes (opcional si quieres todas las acciones REST)
    Route::resource('clientes', ClienteController::class)->except(['create', 'index']); 

    // Otros servicios
    Route::get('/verificar-servicio', [ServicioController::class, 'verificarPago']);
    Route::get('/usuario/{nombre}', [UsuarioController::class, 'mostrar']);
});