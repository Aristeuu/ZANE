<?php

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
    return view('portal.welcome');
})->name('inicio');

Route::get('/sobre', function(){
    return view('portal.sobre');
})->name('sobre');

Route::get('/produtos', function(){
    return view('portal.produtos');
})->name('produtos');
