# 06. Models dalam Laravel 13

## Tujuan Pembelajaran

Modul ini memperkenalkan konsep **Models** dalam Laravel 13 sebagai representasi data dan business logic aplikasi. Pada modul ini, siswa akan belajar membuat model, mengakses data, dan mengintegrasikannya dengan routing menggunakan named routes dan route checking.

---

## Konsep Utama

### 1. Pengenalan Models

**Model** adalah class PHP yang merepresentasikan satu tabel atau entitas dalam aplikasi. Model memiliki tanggung jawab:

- Menyimpan data dan business logic
- Menyediakan method untuk mengakses dan memanipulasi data
- Bertindak sebagai layer abstraksi antara controller dan database

### 2. Struktur Model Artikel

Model `Artikel` dibuat di `app/Models/Artikel.php` dengan fitur:

```php
namespace App\Models;

use Illuminate\Support\Arr;

class Artikel
{
    public static function find($slug)
    {
        // Mencari artikel berdasarkan slug menggunakan Arrow Function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);

        if (!$post) {
            abort(404);  // Jika tidak ditemukan, tampilkan halaman 404
        }

        return $post;
    }

    public static function all()
    {
        // Mengembalikan semua data artikel (dummy data)
        return [
            [
                'id' => 1,
                'slug' => 'berita-terbaru',
                'judul' => 'Berita Terbaru',
                'penulis' => 'Saifu NB',
                'isi_postingan' => 'Ini contoh data berita terbaru...',
            ],
            // ...
        ];
    }
}
```

---

## Fitur Pembelajaran

### 1. Named Routes

Named routes memberikan nama yang unik untuk setiap route, memudahkan reference dari berbagai bagian aplikasi.

**Contoh di `routes/web.php`:**

```php
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () { ... })->name('about');
Route::get('/blog', function () { ... })->name('blog');
```

**Keuntungan Named Routes:**

- Mudah diubah tanpa mengubah URL di berbagai tempat
- Lebih readable dan maintainable
- Digunakan dengan helper `route()` dan `url()`

### 2. Route Checking dengan `routeIs()`

Method `request()->routeIs()` digunakan untuk mengecek apakah route saat ini sesuai dengan nama yang ditentukan.

**Contoh di `navbar.blade.php`:**

```blade
<x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
    Home
</x-nav-link>

<x-nav-link href="{{ route('blog') }}" :active="request()->routeIs('blog')">
    Blog
</x-nav-link>

<x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
    About
</x-nav-link>
```

**Kegunaan:**

- Menentukan link mana yang aktif (sedang dikunjungi)
- Menampilkan styling khusus untuk link aktif
- Meningkatkan user experience dengan visual feedback

### 3. Dynamic Component dengan Props

Component `x-nav-link` menerima props untuk kontrol tampilan dinamis.

**Di `resources/views/components/nav-link.blade.php`:**

```blade
@props(['active' => 'false'])

<a {{ $attributes }}
   aria-current="{{ $active ? 'page' : false }}"
   class="{{ $active ? 'bg-gray-950/50  text-white' : 'text-gray-300  hover:bg-white/5  hover:text-white' }}
           rounded-md  px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>
```

**Props yang digunakan:**

- `$active`: Boolean untuk menentukan apakah link sedang aktif
- `$attributes`: Menerima atribut tambahan seperti `href`
- `$slot`: Konten text yang ditampilkan di dalam link

### 4. Arrow Function dan Anonymous Function

Model menggunakan **Arrow Function** (`fn`) untuk syntax yang lebih ringkas dibandingkan `function` biasa.

**Perbandingan:**

```php
// Anonymous Function (Lama)
Arr::first(static::all(), function ($post) use ($slug) {
    return $post['slug'] === $slug;
});

// Arrow Function (Modern - PHP 7.4+)
Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);
```

**Keuntungan Arrow Function:**

- Syntax lebih ringkas dan readable
- Automatic binding dari parent scope (tidak perlu `use`)
- Selalu return nilai dari expressi

### 5. Helper `Arr::first()`

Mencari item pertama dalam array yang memenuhi kondisi tertentu.

```php
$post = Arr::first($array, $callback);
```

---

## Alur Data Modul

```
Route -> Model Artikel -> View
  ↓
/blog → Artikel::all() → blog.blade.php (tampil daftar)
  ↓
/blog/{slug} → Artikel::find($slug) → post.blade.php (tampil detail)
```

---

## Implementasi di Routing

**File `routes/web.php`:**

```php
// Menampilkan daftar semua artikel
Route::get('/blog', function () {
    return view('blog.blog', [
        'title' => 'Blog',
        'postingan' => Artikel::all(),  // Menggunakan model
    ]);
})->name('blog');

// Menampilkan detail artikel berdasarkan slug
Route::get('/blog/{slug}', function ($slug) {
    $post = Artikel::find($slug);  // Mencari artikel
    return view('blog.post', ['title' => 'Post', 'post' => $post]);
});
```

---

## Poin Penting

✅ **Model** memisahkan data logic dari presentation logic  
✅ **Named Routes** membuat routing lebih maintainable  
✅ **routeIs()** berguna untuk menentukan link aktif  
✅ **Arrow Function** membuat code lebih ringkas dan readable  
✅ **Validasi 404** memastikan data yang diminta benar-benar ada  
✅ **Props Component** memungkinkan reusabilitas dengan behavior berbeda

---

## Teknologi yang Digunakan

- **Laravel 13** - Framework PHP modern
- **Blade Templating** - Template engine Laravel
- **Tailwind CSS** - Utility-first CSS framework
- **PHP 8.x** - Arrow Functions, Type Hints
- **Illuminate\Support\Arr** - Utility untuk manipulasi array

---

## Kesimpulan

Modul ini mendemonstrasikan bahwa **Models** adalah fondasi dari pattern MVC di Laravel. Dengan memahami Models, Named Routes, dan Route Checking, developer dapat membangun aplikasi yang:

- **Scalable** - Mudah dikembangkan untuk data dari database
- **Maintainable** - Routing dan navigation mudah dikelola
- **User-Friendly** - Visual feedback jelas menunjukkan halaman aktif
