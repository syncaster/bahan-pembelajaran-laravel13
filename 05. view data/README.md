# Minggu 5: View Data - Props, String Limiter, dan Display Data 📊

**Folder**: `05. view data/`

Pada minggu kelima, peserta akan mempelajari cara menampilkan data ke view dengan menggunakan Blade Components Props, String Limiter dari Laravel 13, serta teknik menampilkan daftar postingan dan detail postingan secara dinamis.

**Topik**: Component Props (`@props`) · String Limiter · Blade Loops · Dynamic Routing · Data Binding

---

## 📚 Pembelajaran yang Dicover

### 1. **Component Props dengan `@props`** 🎯

**Konsep:**
Directive `@props` digunakan untuk mendefinisikan properti yang dapat diterima oleh sebuah Blade Component. Props memungkinkan komponen menerima data dari view yang menggunakannya.

**Contoh Implementasi:**

File: `resources/views/components/nav-link.blade.php`

```blade
@props(['active' => 'false'])

<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
    class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}
                            rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>
```

**Penjelasan:**

- `@props(['active' => 'false'])` - Mendefinisikan prop `active` dengan nilai default `false`
- `{{ $attributes }}` - Mereferensikan atribut tambahan yang diteruskan ke komponen
- `{{ $slot }}` - Menampilkan konten yang dikirimkan ke dalam komponen

**Cara Penggunaan:**

```blade
<x-nav-link href="#" :active="request()->is('home')">
    Home
</x-nav-link>
```

---

### 2. **String Limiter dari Laravel 13** 📝

**Konsep:**
Helper function `Str::limit()` digunakan untuk membatasi jumlah karakter dalam string. Fungsi ini sangat berguna untuk menampilkan preview teks yang panjang tanpa mengubah data asli.

**Sintaks:**

```php
Str::limit(string $value, int $limit = 100, string $end = '...')
```

**Contoh Implementasi:**

File: `resources/views/blog/blog.blade.php`

```blade
<p class="my-4 font-light">
    {{ Str::limit($post['isi_postingan'], 35) }}
</p>
```

**Penjelasan:**

- Membatasi panjang text `isi_postingan` hingga 35 karakter
- Jika text lebih panjang dari 35 karakter, akan ditambahkan `...` di akhir
- Original data tidak berubah, hanya tampilan yang dibatasi

**Keuntungan:**

- Membuat list postingan lebih rapi dan terstruktur
- Memberikan preview kepada user untuk membaca postingan lengkapnya
- Meningkatkan UX dengan tampilan yang tidak terlalu panjang

---

### 3. **Menampilkan Seluruh Postingan (Listing)** 📋

**Konsep:**
Menampilkan daftar semua postingan dengan menggunakan loop Blade `@foreach` untuk iterasi data array dari controller/route.

**Implementasi Route:**

File: `routes/web.php`

```php
Route::get('/blog', function(){
    return view('blog.blog', ['title'=>'Blog', 'postingan' => [
        [
            'id' => 1,
            'slug' => 'berita-terbaru',
            'judul' => 'Berita Terbaru',
            'penulis' => 'Saiful NB',
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
```

**Implementasi View:**

File: `resources/views/blog/blog.blade.php`

```blade
<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    @foreach ($postingan as $post)
        <article class="py-8 max-w-sm border-b border-gray-300">
            <a href="blog/{{ $post['slug'] }}" class="hover:underline">
                <h3 class="mb-1 text-3xl tracking-tight font-bold text-blue-700">
                    {{ $post['judul'] }}
                </h3>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['penulis'] }}</a> 11 Mei 2026
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['isi_postingan'], 35) }}
            </p>
            <a href="blog/{{ $post['slug'] }}" class="font-medium text-blue-600">
                Readmore &raquo;
            </a>
        </article>
    @endforeach
</x-layout>
```

**Penjelasan:**

- Loop `@foreach` untuk mengiterasi semua postingan
- `{{ $post['slug'] }}` digunakan untuk membuat URL dinamis
- String limiter menampilkan preview postingan
- Link "Readmore" mengarahkan ke detail postingan

---

### 4. **Menampilkan Detail Setiap Postingan** 🔍

**Konsep:**
Menampilkan detail lengkap sebuah postingan berdasarkan slug yang dikirim melalui URL parameter. Menggunakan helper `Arr::first()` untuk mencari postingan yang sesuai dengan slug.

**Implementasi Route:**

File: `routes/web.php`

```php
Route::get('/blog/{slug}', function($slug){
    $postingan = [
        [
            'id' => 1,
            'slug' => 'berita-terbaru',
            'judul' => 'Berita Terbaru',
            'penulis' => 'Saiful NB',
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

    return view('blog.post', ['title'=>'Post', 'post'=>$post]);
});
```

**Penjelasan `Arr::first()`:**

- `Arr::first($postingan, ...)` - Mencari elemen pertama yang memenuhi kondisi
- Kondisi: `$post['slug'] === $slug` - Bandingkan slug dari data dengan parameter URL
- Jika ditemukan, return data postingan; jika tidak, return null

**Implementasi View:**

File: `resources/views/blog/post.blade.php`

```blade
<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <article class="py-8 max-w-sm border-b border-gray-300">
        <h3 class="mb-1 text-3xl tracking-tight font-bold text-blue-700">
            {{ $post['judul'] }}
        </h3>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['penulis'] }}</a> 11 Mei 2026
        </div>
        <p class="my-4 font-light">
            {{ $post['isi_postingan'] }}
        </p>
        <a href="/blog" class="font-medium text-blue-600">Back &laquo;</a>
    </article>
</x-layout>
```

**Perbedaan dengan Blog List:**

- Tidak ada `Str::limit()` - Menampilkan isi postingan lengkap
- Tidak ada loop `@foreach` - Menampilkan satu postingan saja
- Terdapat link "Back" untuk kembali ke halaman blog

---

## 🎓 Learning Outcomes

Setelah mempelajari materi minggu 5 ini, peserta diharapkan mampu:

✅ Memahami dan menggunakan `@props` dalam Blade Components  
✅ Menerapkan String Limiter untuk formatting teks dinamis  
✅ Menampilkan daftar data dengan loop `@foreach` dalam Blade  
✅ Membuat URL dinamis dengan parameter slug  
✅ Menggunakan helper `Arr::first()` untuk pencarian data  
✅ Menampilkan detail data berdasarkan parameter URL  
✅ Memahami flow data dari Route → View → Display

---

## 📁 Struktur File

```
05. view data/
├── routes/
│   └── web.php                 # Route definitions
├── views/
│   ├── blog/
│   │   ├── blog.blade.php     # Listing semua postingan
│   │   └── post.blade.php     # Detail satu postingan
│   └── components/
│       └── nav-link.blade.php # Component dengan @props
└── README.md                   # File ini
```

---

## 🚀 Cara Menjalankan

1. **Navigasi ke folder:**

   ```bash
   cd "05. view data"
   ```

2. **Install dependencies (jika belum):**

   ```bash
   composer install
   npm install
   ```

3. **Jalankan development server:**

   ```bash
   php artisan serve
   ```

4. **Akses di browser:**
   - Blog List: `http://localhost:8000/blog`
   - Blog Detail: `http://localhost:8000/blog/berita-terbaru`

---

## 💡 Catatan Penting

- **Props Default Value**: Jika prop tidak dikirimkan, akan menggunakan nilai default yang didefinisikan
- **Str::limit() dengan Custom End**: `Str::limit($text, 35, '...[read more]')` - Ubah ending sesuai kebutuhan
- **Dynamic URL**: Gunakan slug untuk membuat URL yang SEO-friendly daripada ID numerik
- **Data Persistence**: Untuk production, data sebaiknya disimpan di database, bukan hardcoded di route

---

## 📖 Referensi Resmi Laravel

- [Blade Components - Laravel Docs](https://laravel.com/docs/11/blade#components)
- [Helpers - Str::limit - Laravel Docs](https://laravel.com/docs/11/helpers#method-str-limit)
- [Helpers - Arr::first - Laravel Docs](https://laravel.com/docs/11/helpers#method-arr-first)
- [Routing Parameters - Laravel Docs](https://laravel.com/docs/11/routing#required-parameters)

---

**Dibuat untuk Mata Kuliah: Pemrograman Web Lanjut - Laravel 13**  
**Last Updated**: Mei 2026
