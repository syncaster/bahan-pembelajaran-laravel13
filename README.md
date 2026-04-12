# Pemrograman Web Lanjut - Laravel 13

Materi pembelajaran untuk mata kuliah **Pemrograman Web Lanjut** menggunakan Framework **Laravel 13**.

## 📚 Informasi Mata Kuliah

- **Nama Mata Kuliah**: Pemrograman Web Lanjut
- **Framework**: Laravel 13
- **Bahasa Pemrograman**: PHP
- **Level**: Intermediate/Lanjut
- **Durasi**: 16 Minggu (Semester)

---

## 📖 Struktur Materi

Project ini dibagi menjadi beberapa minggu pembelajaran dengan progresivitas bertahap:

### **Minggu 1: Introduction - Pengenalan Laravel**
**Lokasi**: `01.introduction/`

Pada minggu pertama, peserta akan mempelajari dasar-dasar Framework Laravel dan setup project:

- ✅ Pengenalan Laravel 13
- ✅ Instalasi dan Setup Environment
- ✅ Struktur Direktori Laravel
- ✅ Dasar-dasar Routing
- ✅ Blade Templating Engine
- ✅ Konfigurasi Project
- ✅ Database Connection (Persiapan)

**File Kunci**:
- `routes/web.php` - Routing dasar aplikasi

---

### **Minggu 2: Basic - Penggunaan Routing, Controller, CSS**
**Lokasi**: `02.basic/`

Pada minggu kedua, peserta akan mendalami routing lanjut, controller, dan styling:

#### **1. Routing** (`routes/`)
- Web Routes untuk HTTP requests
- Console Routes untuk artisan commands
- Grouping routes
- Named routes
- Route parameters

#### **2. Controller** (`Controllers/`)
- `Controller.php` - Base Controller
- `HomeController.php` - Contoh implementasi controller
- Method handling (GET, POST, PUT, DELETE)
- Request handling
- Response handling

#### **3. CSS & Assets** (`css/`)
- `app.css` - Stylesheet utama aplikasi
- CSS organization
- Styling templates & views
- CSS framework integration

#### **4. Views** (`views/`)
- `welcome.blade.php` - Halaman selamat datang
- `about.blade.php` - Halaman tentang
- Blade templating syntax
- Reusable components

---

## 📁 Struktur Direktori

```
pemrograman-web-lanjut/materi/bahan/
├── 01.introduction/
│   └── routes/
│       └── web.php              # Routing introduction
│
├── 02.basic/
│   ├── Controllers/
│   │   ├── Controller.php       # Base controller
│   │   └── HomeController.php   # Example controller
│   │
│   ├── css/
│   │   └── app.css              # Stylesheet
│   │
│   ├── routes/
│   │   ├── console.php          # Console routes
│   │   └── web.php              # Web routes
│   │
│   └── views/
│       ├── about.blade.php      # About page
│       └── welcome.blade.php    # Welcome page
│
└── README.md                    # Dokumentasi ini
```

---

## 🚀 Cara Menjalankan

### Prerequisites
- PHP >= 8.2
- Composer
- Laravel 13
- Database (MySQL/PostgreSQL/SQLite)
- Node.js (untuk asset compilation)

### Instalasi

1. **Clone atau Download Project**
```bash
cd pemrograman-web-lanjut/materi/bahan
```

2. **Install Dependencies**
```bash
composer install
```

3. **Setup Environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Konfigurasi Database** (Edit `.env`)
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=
```

5. **Migration & Seeding** (Jika diperlukan)
```bash
php artisan migrate
php artisan db:seed
```

6. **Jalankan Development Server**
```bash
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

---

## 🔧 Teknologi yang Digunakan

| Komponen | Versi | Keterangan |
|----------|-------|-----------|
| Laravel | 13.x | Web Framework |
| PHP | 8.2+ | Programming Language |
| Blade | Built-in | Template Engine |
| CSS | 3 | Styling |
| MySQL/PostgreSQL | Latest | Database |
| Composer | Latest | Dependency Manager |

---

## 📝 Materi Pembelajaran Detail

### **Minggu 1: Introduction**

#### Topik Utama:
1. **Pengenalan Laravel**
   - Apa itu Laravel?
   - Keuntungan menggunakan Laravel
   - Ekosistem Laravel

2. **Setup & Installation**
   - Instalasi Laravel via Composer
   - Struktur folder Laravel
   - Konfigurasi dasar

3. **First Route**
   - Membuat route pertama
   - Route parameters
   - Route methods (GET, POST, dll)

---

### **Minggu 2: Basic**

#### Topik 1: Routing
- Simple routes
- Route parameters (`/user/{id}`)
- Route naming
- Route grouping
- Middleware application
- RESTful routing

#### Topik 2: Controller
- Creating controllers dengan Artisan
- Basic controller structure:
  ```php
  class HomeController extends Controller {
      public function index() {}
      public function show($id) {}
      public function store(Request $request) {}
  }
  ```
- Connecting routes to controllers
- Request handling
- Response methods

#### Topik 3: CSS & Styling
- Asset organization (`/public/css/`)
- CSS frameworks (Bootstrap, Tailwind, dll)
- Blade CSS integration
- Responsive design basics

#### Topik 4: Views & Blade
- Creating views (`.blade.php`)
- Blade directives (`@if`, `@foreach`, `@include`, dll)
- Passing data ke views
- Reusable components
- Template inheritance

---

## 📚 File-file Pembelajaran

### `01.introduction/routes/web.php`
Mendemonstrasikan:
- Basic route definition
- Single action routes
- Route group concept

### `02.basic/routes/web.php`
Mendemonstrasikan:
- Controller routing
- Route parameters
- Route naming

### `02.basic/Controllers/HomeController.php`
Contoh implementasi controller dengan:
- Index method
- Show method
- Data passing ke views

### `02.basic/views/welcome.blade.php`
Demonstrasi:
- Blade syntax
- CSS integration
- Dynamic content

### `02.basic/views/about.blade.php`
Demonstrasi:
- Page navigation
- Blade components
- Styling

---

## 🎯 Learning Objectives

Setelah menyelesaikan materi minggu 1-2, peserta diharapkan dapat:

✅ Memahami konsep dasar Laravel Framework  
✅ Membuat dan mengkonfigurasi project Laravel baru  
✅ Membuat routes sederhana dan berparameter  
✅ Membuat Controllers dan menggunakannya  
✅ Membuat Views dengan Blade Templating Engine  
✅ Styling aplikasi dengan CSS  
✅ Memahami MVC architecture dalam praktik  
✅ Routing requests ke controller actions  

---

## 💡 Tips Pembelajaran

1. **Praktik Langsung**: Ketik ulang setiap code contoh, jangan copy-paste
2. **Eksperimen**: Modifikasi contoh yang ada untuk memahami lebih dalam
3. **Dokumentasi**: Baca dokumentasi [Laravel Official](https://laravel.com/docs)
4. **Debugging**: Gunakan Laravel Debugbar untuk debugging
5. **Version Control**: Gunakan Git untuk versioning code

---

## 📂 Navigasi Cepat

| Minggu | Topik | Folder | File Utama |
|--------|-------|--------|-----------|
| 1 | Introduction | `01.introduction/` | `routes/web.php` |
| 2 | Basic | `02.basic/` | `routes/`, `Controllers/`, `views/`, `css/` |

---

## 🔗 Referensi Berguna

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Blade Documentation](https://laravel.com/docs/blade)
- [PHP Official](https://www.php.net)
- [MDN Web Docs - CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)

---

## 📧 Kontak & Support

Untuk pertanyaan atau klarifikasi mengenai materi pembelajaran, silahkan menghubungi instruktur mata kuliah.

---

## 📄 Lisensi

Materi pembelajaran ini disediakan untuk keperluan pendidikan.

---

## 📅 Catatan Versi

| Versi | Tanggal | Keterangan |
|-------|---------|-----------|
| 1.0 | April 2026 | Inisial release - Minggu 1-2 |

---

**Last Updated**: April 2026

**Framework Version**: Laravel 13.x

