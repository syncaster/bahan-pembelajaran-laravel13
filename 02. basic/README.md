# Minggu 2: Basic - Routing, Controller, dan CSS

Pada minggu kedua, peserta akan mendalami routing lanjut, controller, dan styling dengan CSS.

## 📚 Apa yang akan dipelajari

- ✅ Routing Lanjut
- ✅ Membuat Controllers
- ✅ Method Handling (GET, POST, PUT, DELETE)
- ✅ Blade Views & Components
- ✅ CSS Styling
- ✅ Data Passing ke Views

## 📁 Struktur Folder

```
02.basic/
├── Controllers/
│   ├── Controller.php       # Base controller
│   └── HomeController.php   # Example controller
│
├── css/
│   └── app.css              # Stylesheet
│
├── routes/
│   ├── console.php          # Console routes
│   └── web.php              # Web routes
│
└── views/
    ├── about.blade.php      # About page
    └── welcome.blade.php    # Welcome page
```

## 🎯 Topik Pembelajaran

### 1. Routing Lanjut

- Web Routes untuk HTTP requests
- Console Routes untuk artisan commands
- Grouping routes
- Named routes
- Route parameters
- RESTful routing

### 2. Controller

- Creating controllers dengan Artisan
- Basic controller structure
- Method handling (GET, POST, PUT, DELETE)
- Request handling
- Response handling
- Data passing dari controller ke views

### 3. CSS & Assets

- Asset organization (`/public/css/`)
- CSS frameworks (Bootstrap, Tailwind, dll)
- Blade CSS integration
- Responsive design basics
- Inline styles vs external stylesheets

### 4. Views & Blade

- Creating views (`.blade.php`)
- Blade directives (`@if`, `@foreach`, `@include`, dll)
- Passing data ke views
- Reusable components
- Template inheritance
- View structure

## 📝 File Kunci

### `routes/web.php`

Mendemonstrasikan:

- Controller routing
- Route parameters
- Route naming

```php
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/product/{id}', [HomeController::class, 'product']);
Route::get('/about', function(){
    return view('about', ['nama' => 'Saiful NB']);
});
```

### `Controllers/HomeController.php`

Contoh implementasi controller dengan:

- Index method untuk halaman home
- Show method untuk detail page
- Data passing ke views

```php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){
        return view('home',[
            'title' => 'Home Page',
        ]);
    }

    public function product($id){
        return 'Ini adalah halaman produk dengan ID ' .$id;
    }
}
```

### `css/app.css`

File stylesheet utama aplikasi dengan:

- CSS organization
- Styling templates & views
- CSS framework integration
- Responsive design rules

### `views/welcome.blade.php`

Demonstrasi:

- Blade syntax dasar
- CSS integration
- Dynamic content rendering

### `views/about.blade.php`

Demonstrasi:

- Page navigation
- Blade components
- Data display
- Styling

## 🚀 Cara Menjalankan

1. **Setup Project**

```bash
cd 02.basic
```

2. **Jalankan Development Server**

```bash
php artisan serve
```

3. **Akses Routes**

- Home: `http://localhost:8000/home`
- About: `http://localhost:8000/about`
- Product: `http://localhost:8000/home/product/1`

## 🎯 Learning Objectives

Setelah menyelesaikan minggu 2, peserta diharapkan dapat:

✅ Membuat routes sederhana dan berparameter  
✅ Membuat Controllers dan menggunakannya  
✅ Memahami method handling (GET, POST, dll)  
✅ Membuat Views dengan Blade Templating Engine  
✅ Styling aplikasi dengan CSS  
✅ Passing data dari controller ke views  
✅ Memahami MVC architecture dalam praktik  
✅ Routing requests ke controller actions

## 💡 Tips Pembelajaran

1. **Praktik Langsung**: Ketik ulang setiap code contoh, jangan copy-paste
2. **Eksperimen**: Modifikasi contoh yang ada
3. **Create Controller**: Gunakan artisan: `php artisan make:controller NamaController`
4. **Blade Syntax**: Pelajari [Blade Documentation](https://laravel.com/docs/blade)
5. **CSS Organization**: Organize CSS secara struktural

## 📚 Referensi

- [Laravel Routing](https://laravel.com/docs/routing)
- [Laravel Controllers](https://laravel.com/docs/controllers)
- [Laravel Blade](https://laravel.com/docs/blade)
- [CSS MDN](https://developer.mozilla.org/en-US/docs/Web/CSS)

## 📝 Perintah Artisan Berguna

```bash
# Membuat Controller
php artisan make:controller NamaController

# Membuat Model
php artisan make:model NamaModel

# Membuat Migration
php artisan make:migration create_nama_table

# List semua routes
php artisan route:list
```

---

**Previous Week**: [Minggu 1 - Introduction](../01.introduction/README.md)

**Next Week**: [Minggu 3 - View & Vite](../03.%20view/README.md)

**Back to Main**: [Kembali ke Daftar Isi](../README.md)
