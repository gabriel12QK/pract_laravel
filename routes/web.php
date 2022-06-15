<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaControler;
use App\Http\Controllers\equipoP;
use App\Http\Controllers\equipoBD;
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
Route:: post('equipo/post',[equipoBD:: class, 'guardarEquipo']);
