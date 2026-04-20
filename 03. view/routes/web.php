<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function(){
//     return 'Ini adalah halaman home';
// });

Route::get('/home', [HomeController::class, 'index']);

Route::get('/home/product/{id}', [HomeController::class, 'product']);

Route::get('/about', function(){
    // return view('about');
    return view('about',[
        'nama' => 'Saiful NB',
        'nidn' => '0710028805',
        'matakuliah' => 'Pemrograman Web Lanjut',
        'framework' => 'Laravel 13',
    ]);
});

Route::get('/blog', function(){
    return view('blog.blog'); 
});