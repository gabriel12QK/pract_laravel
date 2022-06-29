<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaControler;
use App\Http\Controllers\equipoP;
use App\Http\Controllers\equipoBD;
use App\Http\Controllers\ventasP;

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
Route:: get('persona',[PersonaControler:: class, 'index']);
Route:: get('equipo',[equipoP:: class, 'index']);
Route:: post('equipo/post',[equipoP:: class, 'guardarEquipo']);
Route:: get('equipoedit{id}',[equipoBD:: class, 'index']);
Route:: post('equipo-update{id}',[equipoBD:: class, 'update']);
Route:: get('ventas',[ventasP:: class, 'principal']);
Route:: post('ventas/post',[ventasP:: class, 'guardarVentas']);
Route:: get('ventas-edit{id}',[ventasP:: class, 'editPage']);
Route:: post('ventas-update{id}',[ventasP:: class, 'update']);
Route:: delete('ventas-delete{id}',[ventasP:: class, 'delete']);
