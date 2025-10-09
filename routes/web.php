<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\Nacionalidade;
use App\Models\Produtora;
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


Route::get('/generos', function () {
    $minhaVariavel = Genero::all();
    dd($minhaVariavel);
});

Route::get('/atores', function () {
    $minhaNovaVariavel = Ator::all();
    dd($minhaNovaVariavel);
});
Route::get('/nacionalidades', function () {
    $minhaNovaVariavel = Nacionalidade::all();
    dd($minhaNovaVariavel);
});
Route::get('/produtora', function () {
    $minhaNovaVariavel = Produtora::all();
    dd($minhaNovaVariavel);
});


