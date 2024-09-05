<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/Tentang', function () {
    return view('body.about');
});

Route::get('/list-Harga', function () {
    return view('body.list-harga');
});
