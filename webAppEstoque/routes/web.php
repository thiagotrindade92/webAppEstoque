<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/produtos', [ProdutoController::class, 'lista'])->name('lista');
Route::get('/produtos/json', [ProdutoController::class, 'listaJson'])->name('listaJson');
Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra'])->name('mostra');
Route::get('/produtos/novo', [ProdutoController::class, 'novo'])->name('novo');
Route::any('/produtos/adiciona', [ProdutoController::class, 'adiciona']) ->name('adiciona');
Route::any('/produtos/remove/{id}', [ProdutoController::class, 'remove'])->name('remove');


