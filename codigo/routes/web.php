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
    Route::get('/', [FornecedorController::class, 'index'])->name('fornecedorindex');
    Route::get('/create', [FornecedorController::class, 'create']);
    Route::post('/store', [FornecedorController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [FornecedorController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
    Route::delete('/{id}', [FornecedorController::class, 'destroy'])->name('delete');
});

Route::prefix('produtos')->group(function () {
    Route::get('/show', [ProdutoController::class, 'show'])->name('produtoshow');
    Route::get('/produtos/index', [ProdutoController::class, 'index'])->name('produtoindex');
    Route::get('/produtos/create', [ProdutoController::class, 'create']);
    Route::post('/produtos/store', [ProdutoController::class, 'store'])->name('store');
    Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit'])->name('edit');
    Route::put('/produtos/update/{id}', [ProdutoController::class, 'update'])->name('update');
    Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('delete');
});

Route::prefix('entrada')->group(function () {
    Route::get('/show', [EntradaController::class, 'show'])->name('entradashow');
    Route::get('/entradas/index', [EntradaController::class, 'index'])->name('entradaindex');
    Route::get('/entradas/create', [EntradaController::class, 'create']);
    Route::post('/entradas/store', [EntradaController::class, 'store'])->name('store');
    Route::get('/entradas/edit/{id}', [EntradaController::class, 'edit'])->name('edit');
    Route::put('/entradas/update/{id}', [EntradaController::class, 'update'])->name('update');
    Route::delete('/entradas/{id}', [EntradaController::class, 'destroy'])->name('delete');
});

Route::prefix('itensentrada')->group(function () {
    Route::get('/show', [ItensEntradasController::class, 'show'])->name('itensentradashow');
    Route::get('/itensentradas/index', [ItensEntradasController::class, 'index'])->name('itensentradaindex');
    Route::get('/itensentradas/create', [ItensEntradasController::class, 'create']);
    Route::post('/itensentradas/store', [ItensEntradasController::class, 'store'])->name('store');
    Route::get('/itensentradas/edit/{id}', [ItensEntradasController::class, 'edit'])->name('edit');
    Route::put('/itensentradas/update/{id}', [ItensEntradasController::class, 'update'])->name('update');
    Route::delete('/itensentradas/{id}', [ItensEntradasController::class, 'destroy'])->name('delete');
});

Route::prefix('vendas')->group(function () {
    Route::get('/show', [VendaController::class, 'show'])->name('vendashow');
    Route::get('/vendas/index', [VendaController::class, 'index'])->name('vendaindex');
    Route::get('/vendas/create', [VendaController::class, 'create']);
    Route::post('/vendas/store', [VendaController::class, 'store'])->name('store');
    Route::get('/vendas/edit/{id}', [VendaController::class, 'edit'])->name('edit');
    Route::put('/vendas/update/{id}', [VendaController::class, 'update'])->name('update');
    Route::delete('/vendas/{id}', [VendaController::class, 'destroy'])->name('delete');
});

Route::prefix('itensvendas')->group(function () {
    Route::get('/show', [VendaController::class, 'show'])->name('itensvendashow');
    Route::get('/itensvendas/index', [ItensVendasController::class, 'index'])->name('itensvendaindex');
    Route::get('itensvendas/create', [ItensVendasController::class, 'create']);
    Route::post('/itensvendas/store', [ItensVendasController::class, 'store'])->name('store');
    Route::get('/itensvendas/edit/{id}', [ItensVendasController::class, 'edit'])->name('edit');
    Route::put('/itensvendas/update/{id}', [ItensVendasController::class, 'update'])->name('update');
    Route::delete('/itensvendas/{id}', [ItensVendasController::class, 'destroy'])->name('delete');
});

Route::prefix('endereco')->group(function () {
    Route::get('/show', [EnderecoController::class, 'show'])->name('enderecoshow');
    Route::get('/index', [EnderecoController::class, 'index'])->name('enderecoindex');
    Route::get('/create', [EnderecoController::class, 'create']);
    Route::post('/store', [EnderecoController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [EnderecoController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [EnderecoController::class, 'update'])->name('update');
    Route::delete('/{id}', [EnderecoController::class, 'destroy'])->name('delete');
});