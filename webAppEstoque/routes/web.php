<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos', [ProdutoController::class, 'lista'])->name('lista');
Route::get('/produtos/mostra', [ProdutoController::class, 'mostra'])->name('mostra');

