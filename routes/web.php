<?php

use App\Http\Controllers\TipoSangreController;
use App\Models\TipoSangre;
use App\Http\Controllers\TipoPatologiaController;
use App\Models\TipoPatologia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatologiaController;
use App\Http\Controllers\PersonaController;

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

Route::get('home', function () {
    return view('home');
});

Route::get('test', function (){
    return view('test');
});
Route::get('alpine-test',function (){
   return view('alpine-test');
});
Route::get('vanilla-dt',function (){
    return view('vanilla-datatables-test');
});

//Rutas de controladores
Route::resource('sedes', App\Http\Controllers\SedeController::class);
Route::resource('TipoSangre', TipoSangreController::class);
Route::resource('TipoPatologia', TipoPatologiaController::class);
Route::resource('Patologia', PatologiaController::class);
Route::resource('personas', PersonaController::class);
