<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
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
    return view('welcome');
});

// Route::get('/clientes', [ClienteController::class, 'show']);

// Route::get('/fornecedor', [FornecedorController::class, 'show']);

// Route::get('/', [FornecedorController::class, 'index']);
// Route::get('/create', [FornecedorController::class, 'create']);
// Route::post('/store', [FornecedorController::class, 'store']);

Route::prefix('clientes')->group(function () {
    Route::get('/show', [ClienteController::class, 'show']);
    Route::get('/', [ClienteController::class, 'index']);
    Route::get('/create', [ClienteController::class, 'create']);
    Route::post('/store', [ClienteController::class, 'store']);
    Route::get('/edit/{id}', [ClienteController::class, 'edit']);
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('update');
    Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('delete');
});

Route::prefix('fornecedor')->group(function () {
    Route::get('/show', [FornecedorController::class, 'show']);
    Route::get('/', [FornecedorController::class, 'index']);
    Route::get('/create', [FornecedorController::class, 'create']);
    Route::post('/store', [FornecedorController::class, 'store']);
    Route::get('/edit/{id}', [FornecedorController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FornecedorController::class, 'update'])->name('update');
    Route::delete('/{id}', [FornecedorController::class, 'destroy'])->name('delete');
});

//produtos
Route::get('/produtos/index', [ProdutoController::class, 'index']);
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos/store', [ProdutoController::class, 'store']);
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit'])->name('edit');
Route::put('/produtos/update/{id}', [ProdutoController::class, 'update'])->name('update');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('delete');

//entradas
Route::get('/entradas/index', [EntradaController::class, 'index']);
Route::get('/entradas/create', [EntradaController::class, 'create']);
Route::post('/entradas/store', [EntradaController::class, 'store']);
Route::get('/entradas/edit/{id}', [EntradaController::class, 'edit'])->name('edit');
Route::put('/entradas/update/{id}', [EntradaController::class, 'update'])->name('update');
Route::delete('/entradas/{id}', [EntradaController::class, 'destroy'])->name('delete');

//itensentradas 
Route::get('/itensentradas/index', [ItensEntradasController::class, 'index']);
Route::get('/itensentradas/create', [ItensEntradasController::class, 'create']);
Route::post('/itensentradas/store', [ItensEntradasController::class, 'store']);
Route::get('/itensentradas/edit/{id}', [ItensEntradasController::class, 'edit'])->name('edit');
Route::put('/itensentradas/update/{id}', [ItensEntradasController::class, 'update'])->name('update');
Route::delete('/itensentradas/{id}', [ItensEntradasController::class, 'destroy'])->name('delete');

//vendas 
Route::get('/vendas/index', [VendaController::class, 'index']);
Route::get('/vendas/create', [VendaController::class, 'create']);
Route::post('/vendas/store', [VendaController::class, 'store']);
Route::get('/vendas/edit/{id}', [VendaController::class, 'edit'])->name('edit');
Route::put('/vendas/update/{id}', [VendaController::class, 'update'])->name('update');
Route::delete('/vendas/{id}', [VendaController::class, 'destroy'])->name('delete');

//itensvendas 
Route::get('/itensvendas/index', [ItensVendasController::class, 'index']);
Route::get('itensvendas/create', [ItensVendasController::class, 'create']);
Route::post('/itensvendas/store', [ItensVendasController::class, 'store']);
Route::get('/itensvendas/edit/{id}', [ItensVendasController::class, 'edit'])->name('edit');
Route::put('/itensvendas/update/{id}', [ItensVendasController::class, 'update'])->name('update');
Route::delete('/itensvendas/{id}', [ItensVendasController::class, 'destroy'])->name('delete');