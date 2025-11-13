<?php

use App\Models\Ator;
use App\Models\Filme;
use App\Models\Genero;
use App\Models\Nacionalidade;
use App\Models\Produtora;
use App\Models\Diretor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
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

Route::get('/', function () {
    $filmes = Filme::all();
    return view('lista-filmes',
    compact('filmes'));
})->name('lista-filmes');

Route::get('/detalhes-filmes/{filme}',
function(Filme $filme){
 return view('detalhes-filmes', compact('filme'));
})->name('detalhes-filme');


Route::view('/login','login')->name('login');

Route::post('/logar', function (Request $request) {
   dd($request);
})->name('logar');


Route::get('/lista-produtoras', function () {
    $produtoras = Produtora::all();
    return view('lista-produtoras',
    compact('produtoras'));
})->name('lista-produtoras');

Route::get('/lista-diretores', function () {
    $diretores = Diretor::all();
    return view('lista-diretores',
    compact('diretores'));
})->name('lista-diretores');

Route::get('/lista-atores', function () {
    $atores = Ator::all();
    return view('lista-atores',
    compact('atores'));
})->name('lista-atores');

Route::get('/lista-filmes', function () {
    $filmes = Filme::all();
    return view('lista-filmes',
    compact('filmes'));
});