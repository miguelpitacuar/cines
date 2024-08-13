<?php
use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActoresController;
use App\Http\Controllers\ClacificacionesController;
use App\Http\Controllers\DirectoresController;
use App\Http\Controllers\FuncionesController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\SalasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Categorias', CategoriasController::class);

Route::resource('Actores', ActoresController::class);
Route::resource('Clacificaciones', clacificacionesController::class);
Route::resource('Directores', DirectoresController::class);
Route::resource('Funciones ', FuncionesController::class);
Route::resource('Generos', GenerosController::class);
Route::resource('Peliculas', PeliculasController::class);
Route::resource('Reservas', ReservasController::class);
Route::resource('Salas', SalasController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
