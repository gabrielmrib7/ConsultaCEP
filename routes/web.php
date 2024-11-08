<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CepController;

Route::get('/', function (){return view('busca');});
Route::get('/buscar', [CepController::class, 'buscar'])->name('buscar');
Route::post('/salvar', [CepController::class, 'salvar'])->name('salvar');

