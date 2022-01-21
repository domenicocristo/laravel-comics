<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('game', function () {
    return view('pages.game');
})->name('game');