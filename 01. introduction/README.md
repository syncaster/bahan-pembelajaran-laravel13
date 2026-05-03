# Minggu 1: Introduction - Pengenalan Laravel

Pada minggu pertama, peserta akan mempelajari dasar-dasar Framework Laravel dan setup project.

## 📚 Apa yang akan dipelajari

- ✅ Pengenalan Laravel 13
- ✅ Instalasi dan Setup Environment
- ✅ Struktur Direktori Laravel
- ✅ Dasar-dasar Routing
- ✅ Blade Templating Engine
- ✅ Konfigurasi Project
- ✅ Database Connection (Persiapan)

## 📁 Struktur Folder

```
01.introduction/
└── routes/
    └── web.php              # Routing introduction
```

## 🎯 Topik Pembelajaran

### 1. Pengenalan Laravel

- Apa itu Laravel?
- Keuntungan menggunakan Laravel
- Ekosistem Laravel
- Versi Laravel dan features

### 2. Setup & Installation

- Instalasi Laravel via Composer
- Struktur folder Laravel
- Konfigurasi dasar
- Environment setup

### 3. First Route

- Membuat route pertama
- Route parameters
- Route methods (GET, POST, dll)
- Response types

## 📝 File Kunci

### `routes/web.php`

File ini mendemonstrasikan:

- Basic route definition
- Single action routes
- Route group concept
- Inline route responses

```php
// Contoh route dasar
Route::get('/', function () {
    return 'Selamat datang di Laravel!';
});

// Route dengan parameter
Route::get('/hello/{name}', function ($name) {
    return 'Halo, ' . $name;
});
```

## 🚀 Cara Menjalankan

1. **Install Laravel** (jika belum)

```bash
composer create-project laravel/laravel project-name
```

2. **Setup Environment**

```bash
cp .env.example .env
php artisan key:generate
```

3. **Jalankan Development Server**

```bash
php artisan serve
```

Server akan berjalan di: `http://localhost:8000`

## 🎯 Learning Objectives

Setelah menyelesaikan minggu 1, peserta diharapkan dapat:

✅ Memahami konsep dasar Laravel Framework  
✅ Melakukan instalasi dan setup Laravel project  
✅ Memahami struktur folder Laravel  
✅ Membuat routes sederhana  
✅ Memahami dasar-dasar Blade templating  
✅ Konfigurasi project dengan benar  
✅ Mempersiapkan database connection

## 💡 Tips Pembelajaran

1. **Dokumentasi**: Baca [Laravel Official Documentation](https://laravel.com/docs)
2. **Practice**: Coba membuat routes dengan berbagai parameter
3. **Eksperimen**: Modifikasi contoh yang ada
4. **Version Control**: Gunakan Git untuk tracking progress

## 📚 Referensi

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Routing](https://laravel.com/docs/routing)
- [Composer](https://getcomposer.org)
- [PHP Official](https://www.php.net)

---

**Next Week**: [Minggu 2 - Basic: Routing, Controller, dan CSS](../02.basic/README.md)

**Back to Main**: [Kembali ke Daftar Isi](../README.md)
