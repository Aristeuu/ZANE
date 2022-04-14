<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DepoimentosController;
use App\Http\Controllers\LocaisController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\BannerController;

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

Route::post('/login',[LoginController::class, 'login'])->name('login');


Route::post('/teste',[HomeController::class, 'teste'])->name('teste');

Route::get('/sobre', function(){
    return view('portal.sobre');
})->name('sobre');

Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('produtos');
Route::post('/produtos/show',[ProdutosController::class,'produtoShow'])->name('produtosShow');
Route::get('/produtos/show', function(){
    return view('portal.produtos');
})->name('produtosPortal'); 

Route::middleware(['auth'])->group(function(){

    Route::get('/home',[HomeController::class, 'home' ])->name('home');

    Route::get('admin/banners',[BannerController::class, 'index'])->name('banners.show');
    Route::post('admin/banners',[BannerController::class, 'store'])->name('banners.store');
    Route::put('admin/banners/update/{id}',[BannerController::class, 'update'])->name('banners.update');
    Route::delete('admin/banners/delete/{id}',[BannerController::class, 'destroy'])->name('banners.delete');
    
    /////////////////////////////////////////////////////////////
    
    Route::get('admin/produtos',[ProdutosController::class, 'index'])->name('produtos.show');
    Route::post('admin/produtos',[ProdutosController::class, 'store'])->name('produtos.store');
    Route::put('admin/produtos/update/{id}',[ProdutosController::class, 'update'])->name('produtos.update');
    Route::delete('admin/produtos/delete/{id}',[ProdutosController::class, 'destroy'])->name('produtos.delete');
    

    /////////////////////////////////////////////////////////////
    Route::get('admin/locais',[LocaisController::class, 'index'])->name('locais.show');
    Route::post('admin/locais',[LocaisController::class, 'store'])->name('locais.store');
    Route::put('admin/locais/update/{id}',[LocaisController::class, 'update'])->name('locais.update');
    Route::delete('admin/locais/delete/{id}',[LocaisController::class, 'destroy'])->name('locais.delete');


    ////////////////////////////////////////////////////////////
    Route::get('admin/depoimentos',[DepoimentosController::class,'index'])->name('depoimentos.show');
    Route::post('admin/depoimentos',[DepoimentosController::class,'store'])->name('depoimentos.store');
    Route::put('admin/depoimentos/update/{id}',[DepoimentosController::class,'update'])->name('depoimentos.update');
    Route::delete('admin/depoimentos/delete/{id}',[DepoimentosController::class,'destroy'])->name('depoimentos.delete');

    Route::get('admin/usuarios',[UsuariosController::class,'index'])->name('usuarios.show');

    /////////////////////////////////////////////////////////////////////
    Route::get('logout',[HomeController::class, 'logout'])->name('logout');
    
    Route::get('/registar', function(){
        
        return view('cms.register');
    })->name('showRegister');

});
