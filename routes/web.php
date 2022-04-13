<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\loginController;
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

Route::get('/', [HomeController::class, 'index'])->name('inicio');

Route::get('/login',function()
{
    return view('auth.login');
})->name('showLogin')->middleware('guest');

Route::post('/login',[loginController::class, 'login'])->name('login');


Route::post('/teste',[HomeController::class, 'teste'])->name('teste');

Route::get('/sobre', function(){
    return view('portal.sobre');
})->name('sobre');

Route::get('/produtos', function(){
    return view('portal.produtos');
})->name('produtos');

Route::get('/produtos/show', function(){
    return view('portal.produtos');
})->name('produtos.show');