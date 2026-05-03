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

### **Minggu 3: View - Penggunaan Views & Vite Asset Compilation**

**Lokasi**: `03. view/`

Pada minggu ketiga, peserta akan mempelajari pengorganisasian views yang lebih baik dan menggunakan Vite untuk asset compilation:

#### **1. Struktur Views Lanjut** (`views/`)

- `home.blade.php` - Halaman home dengan struktur kompleks
- `about.blade.php` - Halaman about
- `blog/blog.blade.php` - Sub-folder untuk organizing views
- Blade inheritance dengan `@extends`
- Blade sections dengan `@section`
- Layout templates

#### **2. Asset Management dengan Vite** (`vite.config.js`)

- Konfigurasi Vite untuk Laravel
- CSS compilation dan processing
- JavaScript bundling
- Asset versioning untuk production
- Development server

#### **3. CSS Resources** (`resources/css/`)

- `app.css` - Stylesheet utama
- Tailwind CSS integration
- Asset organization best practices
- Hot Module Replacement (HMR)

#### **4. Static Assets** (`public/`)

- Image storage (`public/img/`)
- Asset linking di Blade
- Optimization untuk production

---

### **Minggu 4: Blade - Laravel Blade Components dengan TailwindCSS**

**Lokasi**: `04. blade/`

Pada minggu keempat, peserta akan mendalami penggunaan Laravel Blade Components dan mengintegrasikannya dengan TailwindCSS untuk membuat UI yang reusable dan modern:

#### **1. Blade Components Dasar** (`app/View/Components/`)

- **Layout Component** (`Layout.php`)
  - Master layout component
  - Slot untuk content dinamis
  - Header dan footer management
  - Responsive layout structure
- **Navbar Component** (`Navbar.php`)
  - Navigation bar component
  - Mobile menu support
  - Active route detection
  - User profile dropdown

#### **2. Component Views** (`views/components/`)

- **layout.blade.php** - Master layout template
  - HTML structure dengan Tailwind
  - Navbar dan header integration
  - Main content area
  - Asset linking (@vite, CDN)
  - Metadata setup

- **navbar.blade.php** - Navigation bar design
  - Responsive navigation dengan mobile hamburger menu
  - Logo/branding area
  - Navigation links
  - User profile dropdown
  - Tailwind utility classes untuk styling

- **header.blade.php** - Page header component
  - Page title display
  - Breadcrumb support (optional)
  - Tailwind gradient/styling

- **nav-link.blade.php** - Reusable navigation link component
  - Active state detection
  - Dynamic class binding
  - Props: `href`, `active`, `slot`
  - Conditional styling berdasarkan active state
  - Accessibility attributes

#### **3. Views dengan Components** (`views/`)

- `home.blade.php` - Menggunakan layout component
- `about.blade.php` - Blade component usage
- `blog/blog.blade.php` - Sub-folder views
- Data passing ke components
- Slot usage
- Named slots

#### **4. Controller** (`Controllers/HomeController.php`)

- Index method untuk home page
- Product method dengan route parameter
- Data passing ke views
- View rendering

#### **5. Routing** (`routes/web.php`)

- Welcome route
- Home route dengan HomeController
- Product route dengan parameter
- About route dengan data passing
- Blog route

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
├── 03. view/
│   ├── vite.config.js           # Vite configuration
│   ├── Controllers/
│   │   └── HomeController.php   # Home controller
│   │
│   ├── resources/
│   │   └── css/
│   │       └── app.css          # App stylesheet
│   │
│   ├── public/
│   │   └── img/                 # Images folder
│   │
│   ├── routes/
│   │   └── web.php              # Web routes
│   │
│   └── views/
│       ├── home.blade.php       # Home view
│       ├── about.blade.php      # About view
│       └── blog/
│           └── blog.blade.php   # Blog view
│
├── 04. blade/
│   ├── app/
│   │   └── View/
│   │       └── Components/
│   │           ├── Layout.php   # Layout component class
│   │           └── Navbar.php   # Navbar component class
│   │
│   ├── Controllers/
│   │   └── HomeController.php   # Home controller
│   │
│   ├── routes/
│   │   └── web.php              # Web routes
│   │
│   └── views/
│       ├── home.blade.php       # Home view
│       ├── about.blade.php      # About view
│       ├── blog/
│       │   └── blog.blade.php   # Blog view
│       └── components/
│           ├── layout.blade.php     # Layout template
│           ├── navbar.blade.php     # Navbar template
│           ├── header.blade.php     # Header template
│           └── nav-link.blade.php   # Nav-link template
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

| Komponen         | Versi    | Keterangan           |
| ---------------- | -------- | -------------------- |
| Laravel          | 13.x     | Web Framework        |
| PHP              | 8.2+     | Programming Language |
| Blade            | Built-in | Template Engine      |
| CSS              | 3        | Styling              |
| MySQL/PostgreSQL | Latest   | Database             |
| Composer         | Latest   | Dependency Manager   |

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

### **Minggu 3: View**

#### Topik 1: Advanced Views Organization

- Views folder structure
- Sub-folder untuk grouping views
- File naming conventions

#### Topik 2: Blade Templating Advanced

- Master layouts (@extends, @section, @yield)
- Including partials (@include)
- Component directives
- Blade control structures

#### Topik 3: Asset Compilation dengan Vite

- Vite configuration:

  ```javascript
  import { defineConfig } from "vite";
  import laravel from "laravel-vite-plugin";

  export default defineConfig({
    plugins: [
      laravel({
        input: ["resources/css/app.css", "resources/js/app.js"],
        refresh: true,
      }),
    ],
  });
  ```

- CSS preprocessing
- Hot Module Replacement (HMR)
- Development vs Production builds

#### Topik 4: Resource Organization

- Resources folder structure
- CSS files management
- Asset linking (@vite directive)
- Public assets

---

### **Minggu 4: Blade Components & TailwindCSS**

#### Topik 1: Laravel Blade Components

- Component class structure:

  ```php
  namespace App\View\Components;

  use Illuminate\View\Component;

  class Layout extends Component {
      public function render() {
          return view('components.layout');
      }
  }
  ```

- Component registration
- Passing props to components
- Slots (unnamed dan named slots)
- Component visibility

#### Topik 2: Component Examples - Layout

**File**: `app/View/Components/Layout.php` dan `views/components/layout.blade.php`

Demonstrasi:

- Master layout component structure
- Using @vite for asset compilation
- Navbar integration
- Header integration
- Main content area
- Meta tags dan title setup
- TailwindCSS utility classes:
  ```html
  <html class="h-full bg-gray-100">
    <body class="h-full">
      <div class="min-h-full">
        <main>
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
          </div>
        </main>
      </div>
    </body>
  </html>
  ```

#### Topik 3: Component Examples - Navbar

**File**: `app/View/Components/Navbar.php` dan `views/components/navbar.blade.php`

Demonstrasi:

- Responsive navigation bar
- Mobile menu dengan hamburger button
- Navigation items menggunakan nav-link component
- User profile dropdown
- Tailwind responsive classes:
  ```html
  <nav class="bg-gray-800">
    <div class="hidden md:block">
      <!-- Desktop navigation -->
    </div>
    <div class="-mr-2 flex md:hidden">
      <!-- Mobile menu button -->
    </div>
  </nav>
  ```
- Icon integration
- Accessibility attributes
- Active state detection dengan `request()->is()`

#### Topik 4: Component Examples - Nav-Link

**File**: `views/components/nav-link.blade.php`

Demonstrasi:

- Reusable navigation link component
- Props binding: `href`, `active`, `slot`
- Dynamic class binding
- Active state styling:
  ```blade
  <a {{ $attributes }}
     class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5' }}
              rounded-md px-3 py-2 text-sm font-medium">
      {{ $slot }}
  </a>
  ```
- Attribute merging dengan `{{ $attributes }}`
- Component usage: `<x-nav-link href="home" :active="request()->is('home')">Home</x-nav-link>`

#### Topik 5: Component Examples - Header

**File**: `views/components/header.blade.php`

Demonstrasi:

- Page header component
- Title display
- Styling dengan TailwindCSS
- After pseudo-element decoration
- Responsive spacing

#### Topik 6: Using Components di Views

- Component usage dalam views:

  ```blade
  <x-layout>
    <x-slot:judul>
      {{ $title }}
    </x-slot:judul>

    <h3 class="text-xl">
      Ini adalah halaman Home
    </h3>
  </x-layout>
  ```

- Named slots
- Component props
- Passing data to components

#### Topik 7: TailwindCSS Integration

- Utility classes usage
- Responsive design breakpoints (sm, md, lg, etc)
- Color palette
- Spacing, typography, sizing
- Hover dan focus states
- Accessibility considerations

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

### `03. view/vite.config.js`

Mendemonstrasikan:

- Vite configuration untuk Laravel
- Asset entry points
- Hot Module Replacement setup

### `03. view/routes/web.php`

Mendemonstrasikan:

- Controller routing
- View rendering
- Data passing ke views

### `03. view/Controllers/HomeController.php`

Contoh controller dengan:

- Index method untuk home page
- Data array passing
- View returning

### `03. view/views/home.blade.php`

Demonstrasi:

- Home page layout
- Data display
- Styling dengan CSS

### `03. view/views/about.blade.php`

Demonstrasi:

- About page content
- Data passing dan display
- Responsive layout

### `03. view/views/blog/blog.blade.php`

Demonstrasi:

- Sub-folder view organization
- Blog page structure
- Content management

---

### `04. blade/app/View/Components/Layout.php`

Demonstrasi:

- Component class definition
- Component registration
- Render method

### `04. blade/app/View/Components/Navbar.php`

Demonstrasi:

- Navbar component class
- Navigation structure
- Component registration

### `04. blade/views/components/layout.blade.php`

Mendemonstrasikan:

- Master layout HTML structure
- Vite asset linking (@vite directive)
- Navbar dan header inclusion
- Slot usage untuk dynamic content
- TailwindCSS untuk responsive design
- Meta tags setup
- Asset linking (CDN, Tailwind Plus Elements):
  ```blade
  <!DOCTYPE html>
  <html class="h-full bg-gray-100">
  <head>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1"></script>
  </head>
  <body class="h-full">
    <x-navbar></x-navbar>
    <x-header>{{ $judul }}</x-header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>{{ $slot }}</p>
      </div>
    </main>
  </body>
  </html>
  ```

### `04. blade/views/components/navbar.blade.php`

Mendemonstrasikan:

- Responsive navigation bar dengan TailwindCSS
- Mobile hamburger menu dengan hidden/flex states
- Logo/branding area
- Navigation links menggunakan x-nav-link component
- User profile dropdown dengan el-dropdown element
- Dark mode styling (`bg-gray-800`, `text-gray-300`)
- Active route detection dengan `request()->is()`
- Accessibility attributes (aria-current, sr-only, role-based)
- Responsive breakpoints (hidden md:block, flex md:hidden)

### `04. blade/views/components/nav-link.blade.php`

Mendemonstrasikan:

- Reusable navigation link component dengan props
- Props binding: `href`, `active`
- Dynamic class binding berdasarkan active state:
  ```blade
  <a {{ $attributes }}
     aria-current="{{ $active ? 'page' : false }}"
     class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}
              rounded-md px-3 py-2 text-sm font-medium">
     {{ $slot }}
  </a>
  ```
- Attribute merging dengan `{{ $attributes }}`
- Conditional styling
- Component reusability pattern
- Accessibility (aria-current attribute)

### `04. blade/views/components/header.blade.php`

Mendemonstrasikan:

- Page header component dengan TailwindCSS styling
- Title display dengan text utilities
- After pseudo-element untuk border decoration
- Responsive spacing (`px-4 py-6 sm:px-6 lg:px-8`)
- Typography utilities (`text-3xl font-bold tracking-tight text-white`)
- Dark background styling

### `04. blade/views/home.blade.php`

Demonstrasi:

- Using layout component dengan named slot
- Named slot usage untuk title (`<x-slot:judul>`)
- Content passing ke layout
- TailwindCSS class usage:

  ```blade
  <x-layout>
    <x-slot:judul>
      {{ $title }}
    </x-slot:judul>

    <h3 class="text-xl">
      Ini adalah halaman Home
    </h3>
  </x-layout>
  ```

### `04. blade/views/about.blade.php` & `blog/blog.blade.php`

Demonstrasi:

- Menggunakan layout component
- Sub-folder view organization
- Component nesting
- Data passing dan display

### `04. blade/routes/web.php`

Mendemonstrasikan:

- Welcome route
- Home route dengan HomeController
- Product route dengan route parameters
- About route dengan data array passing
- Blog route dengan view dari sub-folder:

  ```php
  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('/home', [HomeController::class, 'index']);

  Route::get('/about', function(){
      return view('about',[
          'nama' => 'Saiful NB',
          'nidn' => '0710028805',
          'matakuliah' => 'Pemrograman Web Lanjut',
          'framework' => 'Laravel 13',
          'title' => 'About',
      ]);
  });
  ```

### `04. blade/Controllers/HomeController.php`

Mendemonstrasikan:

- Index method untuk home page dengan view rendering
- Product method dengan route parameter handling
- View rendering dengan data array
- Data passing pattern:
  ```php
  public function index(){
      return view('home',[
          'title' => 'Home Page',
      ]);
  }
  ```

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

### Minggu 3 Learning Objectives

Setelah menyelesaikan materi minggu 3, peserta diharapkan dapat:

✅ Mengorganisasikan views dengan proper folder structure  
✅ Memahami Blade inheritance dan sections  
✅ Menggunakan Vite untuk asset compilation  
✅ Mengelola CSS resources dengan proper workflow  
✅ Mengintegrasikan asset linking di Blade templates  
✅ Memahami Hot Module Replacement (HMR) concept  
✅ Menggunakan CDN resources dalam Laravel project

---

### Minggu 4 Learning Objectives

Setelah menyelesaikan materi minggu 4, peserta diharapkan dapat:

✅ Membuat dan menggunakan Laravel Blade Components  
✅ Memahami Component class structure dan registration  
✅ Menggunakan slots (named dan unnamed) dalam components  
✅ Membuat reusable layout component  
✅ Membuat responsive navbar component dengan mobile menu  
✅ Membuat reusable navigation link component  
✅ Mengintegrasikan TailwindCSS utility classes dalam components  
✅ Memahami props binding dan attribute merging  
✅ Membuat responsive UI dengan TailwindCSS breakpoints  
✅ Implementasi active state detection di navigation  
✅ Accessibility best practices di components (aria-\*, sr-only, dll)  
✅ Menggunakan CDN elements (Tailwind Plus Elements) untuk UI components

---

## 💡 Tips Pembelajaran

1. **Praktik Langsung**: Ketik ulang setiap code contoh, jangan copy-paste
2. **Eksperimen**: Modifikasi contoh yang ada untuk memahami lebih dalam
3. **Dokumentasi**: Baca dokumentasi [Laravel Official](https://laravel.com/docs)
4. **Debugging**: Gunakan Laravel Debugbar untuk debugging
5. **Version Control**: Gunakan Git untuk versioning code

---

## 📂 Navigasi Cepat

| Minggu | Topik               | Folder             | File Utama                                                    |
| ------ | ------------------- | ------------------ | ------------------------------------------------------------- |
| 1      | Introduction        | `01.introduction/` | `routes/web.php`                                              |
| 2      | Basic               | `02.basic/`        | `routes/`, `Controllers/`, `views/`, `css/`                   |
| 3      | View                | `03. view/`        | `vite.config.js`, `routes/web.php`, `views/`                  |
| 4      | Blade & TailwindCSS | `04. blade/`       | `app/View/Components/`, `views/components/`, `routes/web.php` |

---

## 🔗 Referensi Berguna

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Blade Documentation](https://laravel.com/docs/blade)
- [Laravel Vite Integration](https://laravel.com/docs/vite)
- [Laravel Components Documentation](https://laravel.com/docs/blade#components)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Tailwind Plus Elements](https://tailwindplus.com/elements)
- [Vite Documentation](https://vitejs.dev/)
- [PHP Official](https://www.php.net)
- [MDN Web Docs - CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [MDN Web Docs - HTML](https://developer.mozilla.org/en-US/docs/Web/HTML)

---

## 📧 Kontak & Support

Untuk pertanyaan atau klarifikasi mengenai materi pembelajaran, silahkan menghubungi instruktur mata kuliah.

---

## 📄 Lisensi

Materi pembelajaran ini disediakan untuk keperluan pendidikan.

---

## 📅 Catatan Versi

| Versi | Tanggal    | Keterangan                   |
| ----- | ---------- | ---------------------------- |
| 1.0   | April 2026 | Inisial release - Minggu 1-2 |

---

**Last Updated**: April 2026

**Framework Version**: Laravel 13.x
