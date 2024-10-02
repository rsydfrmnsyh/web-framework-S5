<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/mahasiswa', function () {
//     $nama = 'Tya Kirana Putri';
//     $nilai = 75;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = [
//     "mahasiswa01" => "Risa Lestari",
//     "mahasiswa02" => "Rudi Hermawan",
//     "mahasiswa03" => "Bambang Kusumo",
//     "mahasiswa04" => "Lisa Permata"
//     ];
//     return view('mahasiswa',['mahasiswa'
//     => $arrMahasiswa]);
// });

//assignment 1
// Route::get('/home', function($username = 'example'){
//     return "Welcome $username";
// });

// Route::get('/about', function($username = 'example'){
//     return "about us";
// });

// Route::get('/our team', function($username = 'example'){
//     return "our team";
// });

// Route::get('/contact us', function($username = 'example'){
//     return "contact us";
// });

// Route::prefix('/program')->group(function(){
//     Route::get('/project a', function(){
//         echo '<h1>Program A</h1>';
//     });
//     Route::get('/program b', function(){
//         echo '<h1>Program B</h1>';
//     });
//     Route::get('/program c', function(){
//         echo '<h1>Program C</h1>';
//     });
// });

// Route::fallback(function(){
//     return "page not found :(";
// });


//assignment 2
Route::get('/home', function(){
    $username = 'example';
    return view('home',compact('username'));
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/team', function(){
    return view('team');
})->name('team');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::fallback(function(){
    return "page not found :(";
});

?>