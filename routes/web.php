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

// Route::get('giveID/{id?}', function (string $id = null) {
//     if($id){
//         return view('getID', ['id' => $id]);
//     }
//     else{
//         return "<h1>No ID found</h1>";
//     }
// }) -> whereNumber('id');

Route::get('giveName/{name?}', function(string $name = null){
    if($name){
        return view('getID', ['id' => $name]);
    }
    else{
        return "<h1>No ID found</h1>";
    }
}) -> whereAlpha('name');

// There can be more like "whereAplhaNumeric('name of the parameter given');"
// and then to specify like it should be movie/song here "whereIn('id', ['movie','song']);"
// can use regular expression also "where('id', [0-9]+);"
