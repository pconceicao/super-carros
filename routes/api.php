<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Rota responsável para trazer todas as cartas do jogo.

Route::get('/cards', 'CardController@getCard')->name('cards');