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
// Route::get('/home', function(){
//     $username = 'example';
//     return view('home',compact('username'));
// })->name('home');

// Route::get('/about', function(){
//     return view('about');
// })->name('about');

// Route::get('/team', function(){
//     return view('team');
// })->name('team');

// Route::get('/contact', function(){
//     return view('contact');
// })->name('contact');

// Route::fallback(function(){
//     return "page not found :(";
// });

// Route::prefix('/program')->group(function(){
//     Route::get('/programs', Function() {
//         Return view('programs');
//     })->name('programs');
//     Route::get('/a', function(){
//         echo '<h1>Program A</h1>';
//     })->name('a');
//     Route::get('/b', function(){
//         echo '<h1>Program B</h1>';
//     })->name('b');
//     Route::get('/c', function(){
//         echo '<h1>Program C</h1>';
//     })->name('c');
// })->name('program');

// //assessment 1 teori
// Route::get('/user/{id}', function($id) {
//     return "Tampilkan user dengan id = $id";
// })->where('id',  '[ABD]\d{4,}[a-z]');

// Route::get('/students', function() {
//     $students = [
//         ['nama' => 'Adi Setiawan', 'nim' => 'SI-20210023', 'prodi' => 'Sistem Informasi'],
//         ['nama' => 'Budi Kurniawan', 'nim' => 'IK-20210034', 'prodi' => 'Ilmu Komputer'],
//         ['nama' => 'Chandra Djaya', 'nim' => 'BM-20200045', 'prodi' => 'Manajemen'],
//         ['nama' => 'Derry Hutama', 'nim' => 'PS-20210012', 'prodi' => 'Psikologi'],
//         ['nama' => 'Eko Purnama', 'nim' => 'SN-20210044', 'prodi' => 'Sastra Inggris'],
//         ['nama' => 'Faras Abdillah', 'nim' => 'TI-20240056', 'prodi' => 'Teknik Industri'],
//     ];
//     return view('students', ['students' => $students]);
// });

//Assessment 1 praktek
Route::get('/home', function() {
    return view('assessment1/home');
})->name('assessment1.home');

Route::get('/catalog', function() {
    return view('assessment1/catalog');
})->name('assessment1.catalog');

Route::get('/about', function() {
    return view('assessment1/about');
})->name('assessment1.about');

Route::get('/contact', function() {
    return view('assessment1/contact');
})->name('assessment1.contact');

Route::fallback(function () {
    return redirect()->back()->with('error', 'Page not found');
});
?>