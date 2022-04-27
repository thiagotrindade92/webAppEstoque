<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

//Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos', [ProdutoController::class, 'lista'])->name('lista');
Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra'])->name('mostra');
Route::get('produtos/novo', [ProdutoController::class, 'novo'])->name('novo');
Route::get('/produtos/adiciona', [ProdutoController::class, 'adiciona']) ->name('adiciona');

