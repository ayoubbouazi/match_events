<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\RouteControllers;
use App\http\Controllers\PartidoControllers;
use App\http\Controllers\TemporadaControllers;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Auth
// ! Rutas para usuarios no autenticados
Route::middleware(['guest'])->group(function () {
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
});




//  temporadas
// Route::get('/', [TemporadaControllers::class, 'temporadas']);
// ! Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
Route::get('/', [TemporadaControllers::class, 'index'])->name('temporadas.index');
Route::get('/temporadas/create', [TemporadaControllers::class, 'create'])->name('temporadas.create');
Route::post('/', [TemporadaControllers::class, 'store'])->name('temporadas.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// partidos
Route::get('/{id}/partidos', [PartidoControllers::class, 'index'])->name('partidos');

Route::get('/{id}/partidos/create', [PartidoControllers::class,'create'])->name('partidos.create');
Route::post('/{id}/partidos', [PartidoControllers::class, 'store'])->name('partidos.store');

Route::get('/partidos/{id}/edit', [PartidoControllers::class,'edit'])->name('partidos.edit');
Route::put('/{id}/partidos',[PartidoControllers::class, 'update'])->name('partidos.update');

Route::delete('/{id}/partidos', [PartidoControllers::class,'destroy'])->name('partidos.destroy');
});


