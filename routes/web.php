<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

//Route::get('/', '\App\Http\Controllers\InicioController');

// Rutas de pruebas

/*Route::get('vista', function () {
   return view('vista1', ['nombre'=>'Manuel']);
});*/

// Fachadas de vistas

/*if (View::exists('vista2')) {
    Route::get('/', function () {
        return view('vista2');
    });
} else {
    Route::get('/', function () {
        return 'La vista no existe';
    });
}*/


Route::resource('/', '\App\Http\Controllers\PersonaController');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
