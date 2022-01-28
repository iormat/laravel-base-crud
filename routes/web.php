<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.main-layout') -> name('home');
// });

Route::get('/', 'HomeController@home');
