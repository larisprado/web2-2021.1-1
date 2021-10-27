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
});

Route::prefix('fornecedor')->group(function () {
    Route::get('/show', [FornecedorController::class, 'show']);
    Route::get('/', [FornecedorController::class, 'index']);
    Route::get('/create', [FornecedorController::class, 'create']);
    Route::post('/store', [FornecedorController::class, 'store']);
});