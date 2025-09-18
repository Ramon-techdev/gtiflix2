<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste', function () {
    return 'Olá';
});
Route::get('/oi/{texto}', function ($texto) {
    return 'Oi, '. $texto;
});

Route::view('/conheca', 'sobre');