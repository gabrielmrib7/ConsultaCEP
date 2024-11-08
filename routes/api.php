<?php


use App\Http\Controllers\CepController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::get('hello', function(){return 'hello world';});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
