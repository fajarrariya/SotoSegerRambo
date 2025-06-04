<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/berita', function () {
    return view('berita');
});