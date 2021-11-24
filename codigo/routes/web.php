<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

Route::prefix('clientes')->group(function () {
    Route::get('/show', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('clientes.delete');
    Route::get('/showendereco', [ClienteController::class, 'showendereco']);
});

Route::prefix('fornecedor')->group(function () {
    Route::get('/show', [FornecedorController::class, 'show'])->name('fornecedorshow');
    Route::get('/', [FornecedorController::class, 'index'])->name('fornecedor.index');
    Route::get('/create', [FornecedorController::class, 'create']);
    Route::post('/store', [FornecedorController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [FornecedorController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
    Route::delete('/{id}', [FornecedorController::class, 'destroy'])->name('delete');
});

Route::prefix('produtos')->group(function () {
    Route::get('/show', [ProdutoController::class, 'show'])->name('produtoshow');
    Route::get('/index', [ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/create', [ProdutoController::class, 'create']);
    Route::post('/store', [ProdutoController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProdutoController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProdutoController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProdutoController::class, 'destroy'])->name('delete');
});

Route::prefix('entrada')->group(function () {
    Route::get('/show', [EntradaController::class, 'show'])->name('entradashow');
    Route::get('/index', [EntradaController::class, 'index'])->name('entrada.index');
    Route::get('/create', [EntradaController::class, 'create']);
    Route::post('/store', [EntradaController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [EntradaController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [EntradaController::class, 'update'])->name('update');
    Route::delete('/{id}', [EntradaController::class, 'destroy'])->name('delete');
});

Route::prefix('vendas')->group(function () {
    Route::get('/show', [VendaController::class, 'show'])->name('vendashow');
    Route::get('/index', [VendaController::class, 'index'])->name('venda.index');
    Route::get('/create', [VendaController::class, 'create']);
    Route::post('/store', [VendaController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [VendaController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [VendaController::class, 'update'])->name('update');
    Route::delete('/{id}', [VendaController::class, 'destroy'])->name('delete');
});
