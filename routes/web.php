<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CepController;

Route::get('/', [CepController::class, 'index'])->name('index');
Route::get('/buscar', [CepController::class, 'buscar'])->name('buscar');
Route::get('/adicionar', [CepController::class, 'adicionar'])->name('adicionar');
Route::post('/salvar', [CepController::class, 'salvar'])->name('salvar');

