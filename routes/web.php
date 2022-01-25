<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home');

Route::get('comic', 'HomeController@comic');