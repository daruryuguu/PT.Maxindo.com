<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/katalog', function () {
    // render full katalog
    return view('katalog');
});
