<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\GadController;
use App\Http\Controllers\VisualizadorController;
use App\Models\Encuesta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[InicioController::class, 'index'])->name('inicio');

Route::get('/visualizador', [VisualizadorController::class, 'index'])->name('visualizador');



Route::get('/encuesta/configUser', [EncuestaController::class, 'perfil'])->name('encuesta.configUser')->middleware('auth');
Route::get('/gad/configUser', [GadController::class, 'perfil'])->name('gad.configUser')->middleware(['auth','gad']);
Route::get('/admin/configUser', [AdminController::class, 'perfil'])->name('admin.configUser')->middleware(['auth','admin']);



Route::get('/visualizador/coordenadas', [VisualizadorController::class, 'coordenadas']);

Auth::routes();

Route::get('/encuesta',[EncuestaController::class, 'home'])->name('encuesta.home')->middleware('auth');


Route::get('/encuesta/accesibilidad',[EncuestaController::class, 'accesibilidad'])->name('encuesta.accesibilidad')->middleware('auth');


Route::get('/encuesta/seccion1_2', [EncuestaController::class, 'seccion1_2'])->name('encuesta.seccion1_2')->middleware('auth');


Route::post('/encuesta/seccion1_2/cantones', [EncuestaController::class, 'cantones']);

Route::post('/encuesta/seccion1_2/parroquias', [EncuestaController::class, 'parroquias']);



// No pueden existir ambiguedad de rutas es decir lo que tenia antes: /encuesta/seccion1_2/ tenia dos metodos post que accedian al metodo del controlador cantones y parroquias
// agregar un slash y un nombre no significa que se va a mostrar en la url

Route::get('/encuesta/seccion3', [EncuestaController::class, 'seccion3'])->name('encuesta.seccion3')->middleware('auth');
Route::get('/encuesta/seccion4', [EncuestaController::class, 'seccion4'])->name('encuesta.seccion4')->middleware('auth');
Route::get('/encuesta/seccion5', [EncuestaController::class, 'seccion5'])->name('encuesta.seccion5')->middleware('auth');
Route::get('/encuesta/seccion6', [EncuestaController::class, 'seccion6'])->name('encuesta.seccion6')->middleware('auth');
Route::get('/encuesta/seccion7', [EncuestaController::class, 'seccion7'])->name('encuesta.seccion7')->middleware('auth');

Route::post('/encuesta/retrieve_1_2', [EncuestaController::class, 'retrieve_1_2'])->name('encuesta.retrieve_1_2')->middleware('auth');

Route::post('/encuesta/retrieve_3', [EncuestaController::class, 'retrieve_3'])->name('encuesta.retrieve_3')->middleware('auth');
Route::post('/encuesta/retrieve_4', [EncuestaController::class, 'retrieve_4'])->name('encuesta.retrieve_4')->middleware('auth');
Route::post('/encuesta/retrieve_5', [EncuestaController::class, 'retrieve_5'])->name('encuesta.retrieve_5')->middleware('auth');
Route::post('/encuesta/retrieve_6', [EncuestaController::class, 'retrieve_6'])->name('encuesta.retrieve_6')->middleware('auth');
Route::post('/encuesta/retrieve_7', [EncuestaController::class, 'retrieve_7'])->name('encuesta.retrieve_7')->middleware('auth');

Route::get('encuesta/guardar',[EncuestaController::class, 'guardar'])->name('encuesta.guardar')->middleware('auth');

Route::post('/encuesta/store', [EncuestaController::class, 'store'])->name('encuesta.store');

Route::get('/gad/home',[GadController::class, 'index'])->name('gad.home');

Route::get('/gad/validacion_gad',[GadController::class, 'validacion'])->name('gad.validacion')->middleware('auth');
Route::get('/gad/ponderacion',[GadController::class, 'ponderacion'])->name('gad.ponderacion')->middleware('auth');

Route::get('/admin/home',[AdminController::class, 'index'])->name('admin.home')->middleware(['auth','admin']);



// composer require laravel/ui --dev
// php artisan ui:auth 
// https://www.youtube.com/watch?v=b9PNmtB5Cf0&ab_channel=Codea


// Session storage
// https://www.javascripttutorial.net/web-apis/javascript-sessionstorage/