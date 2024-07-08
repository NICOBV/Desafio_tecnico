<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/usuarios', 'App\Http\Controllers\App01Controller@index');
Route::post('/login', 'App\Http\Controllers\App01Controller@login');

