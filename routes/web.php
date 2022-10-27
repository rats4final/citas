<?php

use App\Http\Controllers\TipoSangreController;
use App\Models\TipoSangre;
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
