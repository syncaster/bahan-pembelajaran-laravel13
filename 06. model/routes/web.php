<?php

use App\Http\Controllers\HomeController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/product/{id}', [HomeController::class, 'product']);

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Saiful NB',
        'nidn' => '0710028805',
        'matakuliah' => 'Pemrograman Web Lanjut',
        'framework' => 'Laravel 13',
        'title' => 'About',
    ]);
})->name('about');

Route::get('/blog', function () {
    return view('blog.blog', [
        'title' => 'Blog',
        'postingan' => Artikel::all(),
    ]);
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    $post = Artikel::find($slug);

    return view('blog.post', ['title' => 'Post', 'post' => $post]);
});
