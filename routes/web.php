<?php

use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\VisualizadorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/encuesta',[EncuestaController::class, 'home'])->name('encuesta.home');

Route::get('/encuesta/seccion1_2', [EncuestaController::class, 'seccion1_2'])->name('encuesta.seccion1_2');

// No pueden existir ambiguedad de rutas es decir lo que tenia antes: /encuesta/seccion1_2/ tenia dos metodos post que accedian al metodo del controlador cantones y parroquias
// agregar un slash y un nombre no significa que se va a mostrar en la url

Route::post('/encuesta/seccion1_2/cantones', [EncuestaController::class, 'cantones']);

Route::post('/encuesta/seccion1_2/parroquias', [EncuestaController::class, 'parroquias']);

Route::get('/encuesta/seccion3', [EncuestaController::class, 'seccion3'])->name('encuesta.seccion3');
// Características 

Route::get('/visualizador', [VisualizadorController::class, 'index'])->name('visualizador');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// composer require laravel/ui --dev
// php artisan ui:auth 
// https://www.youtube.com/watch?v=b9PNmtB5Cf0&ab_channel=Codea