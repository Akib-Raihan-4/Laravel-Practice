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


// Named Route
Route::get('test', function () {
    return view('about');
})-> name('about');


// If I want to update the about page from page/about, I can do this, so that even if anyone goes
// to /page/about it will redirect to /test page which is the update the page url
Route::redirect('/page/about', '/test', 301);


// Route Group is used so that I don't need to write /page/grouping, /page/someOtherName again and
// again
Route::prefix('page')->group(function(){
    Route::get('/grouping', function () {
        return view('group');
    })->name('group');
});


// I can make a custom page for 404 error, if a user put different url.
Route::fallback(function(){
    return "<h1>Page Not Found</h1>";
});
