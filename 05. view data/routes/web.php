<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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
        'title' => 'About',
    ]);
});

// Route::get('/blog', function(){
//     return view('blog.blog',[
//         'title'=>'Blog',
//     ]); 
// });

Route::get('/blog', function(){
    return view('blog.blog', ['title'=>'Blog', 'postingan' => [
        [
            'id' => 1,
            'slug' => 'berita-terbaru',
            'judul' => 'Berita Terbaru',
            'penulis' => 'Saifu NB',
            'isi_postingan' => 'Ini contoh data berita terbaru dari routing /blog'
        ],
        [
            'id' => 2,            
            'slug' => 'berita-sebelumnya',
             'judul' => 'Berita Sebelumnya',
            'penulis' => 'Admin',
            'isi_postingan' => 'Ini contoh data yang ditulis admin pada berita lama dari routing /blog'
        ]
    ]]);
});

Route::get('/blog/{slug}', function($slug){
    $postingan = [
        [
            'id' => 1,
            'slug' => 'berita-terbaru',
            'judul' => 'Berita Terbaru',
            'penulis' => 'Saifu NB',
            'isi_postingan' => 'Ini contoh data berita terbaru dari routing /blog'
        ],
        [
            'id' => 2,
            'slug' => 'berita-sebelumnya',
            'judul' => 'Berita Sebelumnya',
            'penulis' => 'Admin',
            'isi_postingan' => 'Ini contoh data yang ditulis admin pada berita lama dari routing /blog'
        ]
    ];

    $post = Arr::first($postingan, function($post) use ($slug){
        return $post['slug'] === $slug;
    });

    // dd($post);
    return view ('blog.post', ['title'=>'Post', 'post'=>$post]);
});
