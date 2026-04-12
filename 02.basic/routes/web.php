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
    return view('about');
});