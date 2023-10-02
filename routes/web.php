<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/getMethod', function () {
    return view('get');
});

// Route::get('/get', function () {
//     return "<h1>Another way to route</h1>
//     <p>Hello <a href='/'>home</a></p>";
// });

// another way to get view
// Route::view('/get', 'get');
