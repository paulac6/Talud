<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\EntradController;
use App\Http\Controllers\EntradaMController;
use App\Http\Controllers\SalidController;
use App\Http\Controllers\SalidaMController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('material', MaterialController::class);
Route::resource('marca', MarcaController::class);
Route::resource('usuario', UsuarioController::class);
Route::resource('obra', ObraController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('proveedore', ProveedoreController::class);
Route::resource('role', RoleController::class);
Route::resource('tipo', TipoController::class);
Route::resource('entrad', EntradController::class);
Route::resource('entrada', EntradaMController::class);
Route::resource('salid', SalidController::class);
Route::resource('salida', SalidaMController::class);