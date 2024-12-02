<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\MienbroController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Ruta principal - Página de bienvenida
Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('welcome');
});

// Rutas de autenticación
Auth::routes(['register' => false]);

// Rutas protegidas que requieren autenticación
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas de administración
    Route::resource('grados', GradoController::class);
    Route::resource('mienbros', MienbroController::class);
    Route::resource('asistencias', AsistenciaController::class);
    Route::resource('users', UserController::class);
});
