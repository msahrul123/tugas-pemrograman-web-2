<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', function () {
   return view('game.index', ['title' => 'Game']);
});

Route::get('/game/create', function () {
   return view('game.create',['title' => 'create Game']);
});