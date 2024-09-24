<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function($username = 'example'){
    return "Welcome $username";
});

Route::get('/about', function($username = 'example'){
    return "about us";
});

Route::get('/our team', function($username = 'example'){
    return "our team";
});

Route::get('/contact us', function($username = 'example'){
    return "contact us";
});

Route::prefix('/program')->group(function(){
    Route::get('/project a', function(){
        echo '<h1>Program A</h1>';
    });
    Route::get('/program b', function(){
        echo '<h1>Program B</h1>';
    });
    Route::get('/program c', function(){
        echo '<h1>Program C</h1>';
    });
});

Route::fallback(function(){
    return "page not found :(";
});

?>