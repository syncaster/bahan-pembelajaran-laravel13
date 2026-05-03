# Minggu 4: Blade Components & TailwindCSS

Pada minggu keempat, peserta akan mendalami penggunaan Laravel Blade Components dan mengintegrasikannya dengan TailwindCSS untuk membuat UI yang reusable dan modern.

## 📚 Apa yang akan dipelajari

- ✅ Laravel Blade Components Dasar
- ✅ Component Class Structure
- ✅ Slots & Props
- ✅ Reusable Layout Component
- ✅ Responsive Navigation Component
- ✅ TailwindCSS Integration
- ✅ Accessibility Best Practices
- ✅ Mobile-First Design

## 📁 Struktur Folder

```
04. blade/
├── app/
│   └── View/
│       └── Components/
│           ├── Layout.php       # Layout component class
│           └── Navbar.php       # Navbar component class
│
├── Controllers/
│   └── HomeController.php       # Home controller
│
├── routes/
│   └── web.php                  # Web routes
│
└── views/
    ├── home.blade.php           # Home view
    ├── about.blade.php          # About view
    ├── blog/
    │   └── blog.blade.php       # Blog view
    └── components/
        ├── layout.blade.php         # Layout template
        ├── navbar.blade.php         # Navbar template
        ├── header.blade.php         # Header template
        └── nav-link.blade.php       # Nav-link template
```

## 🎯 Topik Pembelajaran

### 1. Laravel Blade Components Dasar

- Component class definition
- Component registration
- Passing props to components
- Slots (unnamed dan named slots)
- Component visibility
- Component discovery

### 2. Component Class Structure

```php
namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component {
    public function render() {
        return view('components.layout');
    }
}
```

### 3. Slots & Props

- **Unnamed Slots**: `{{ $slot }}`
- **Named Slots**: `<x-slot:name></x-slot:name>`
- **Props Binding**: `:active="true"`
- **Attribute Merging**: `{{ $attributes }}`

### 4. Component Examples

#### Layout Component

- Master layout component
- Slot untuk content dinamis
- Header dan footer management
- Responsive layout structure
- Asset linking (@vite, CDN)
- Metadata setup

#### Navbar Component

- Navigation bar component
- Mobile menu support
- Active route detection
- User profile dropdown
- Responsive design

#### Nav-Link Component

- Reusable navigation link
- Active state detection
- Dynamic class binding
- Accessibility attributes

#### Header Component

- Page header component
- Title display
- TailwindCSS styling

### 5. TailwindCSS Integration

- Utility classes usage
- Responsive design breakpoints (sm, md, lg, xl, 2xl)
- Color palette
- Spacing, typography, sizing
- Hover dan focus states
- Dark mode support
- Accessibility considerations

## 📝 File Kunci

### `app/View/Components/Layout.php`

Component class untuk layout master:

```php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component {
    public function render(): View|Closure|string {
        return view('components.layout');
    }
}
```

### `views/components/layout.blade.php`

Master layout template dengan:

- HTML structure
- Vite asset linking
- Navbar dan header inclusion
- Slot usage untuk dynamic content
- TailwindCSS untuk responsive design

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
        <div class="mx-auto max-w-7xl px-4 py-6">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
```

### `app/View/Components/Navbar.php` & `views/components/navbar.blade.php`

Responsive navbar dengan:

- Mobile hamburger menu
- Logo/branding area
- Navigation links
- User profile dropdown
- Dark mode styling
- Active route detection
- Accessibility attributes

### `views/components/nav-link.blade.php`

Reusable navigation link component:

```blade
<a {{ $attributes }}
   aria-current="{{ $active ? 'page' : false }}"
   class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5' }}
            rounded-md px-3 py-2 text-sm font-medium">
   {{ $slot }}
</a>
```

**Usage**:

```blade
<x-nav-link href="home" :active="request()->is('home')">Home</x-nav-link>
```

### `views/components/header.blade.php`

Page header component dengan:

- Title display
- TailwindCSS styling
- Responsive spacing
- Typography utilities

### `routes/web.php`

Demonstrasi:

- Welcome route
- Home route dengan HomeController
- Product route dengan parameters
- About route dengan data passing
- Blog route

### `Controllers/HomeController.php`

Demonstrasi:

- Index method untuk home page
- View rendering dengan data
- Data passing pattern

```php
public function index(){
    return view('home',[
        'title' => 'Home Page',
    ]);
}
```

## 🚀 Cara Menjalankan

1. **Setup Project**

```bash
cd "04. blade"
```

2. **Install Dependencies**

```bash
npm install
composer install
```

3. **Development Mode**

```bash
# Terminal 1
npm run dev

# Terminal 2
php artisan serve
```

4. **Akses Routes**

- Welcome: `http://localhost:8000/`
- Home: `http://localhost:8000/home`
- About: `http://localhost:8000/about`
- Blog: `http://localhost:8000/blog`
- Product: `http://localhost:8000/home/product/1`

## 🎯 Component Usage Examples

### Basic Component Usage

```blade
<x-layout>
    <h1>Halo dunia!</h1>
</x-layout>
```

### With Named Slots

```blade
<x-layout>
    <x-slot:judul>
        Page Title
    </x-slot:judul>

    <p>Konten halaman</p>
</x-layout>
```

### With Props

```blade
<x-nav-link href="home" :active="true">
    Home
</x-nav-link>
```

## 📚 TailwindCSS Classes Reference

### Responsive Breakpoints

```
sm  = 640px
md  = 768px
lg  = 1024px
xl  = 1280px
2xl = 1536px
```

### Common Patterns

```html
<!-- Responsive spacing -->
<div class="px-4 sm:px-6 lg:px-8">
  <!-- Hidden on mobile, visible on md+ -->
  <div class="hidden md:block">
    <!-- Visible on mobile, hidden on md+ -->
    <div class="md:hidden">
      <!-- Dark mode -->
      <div class="bg-white dark:bg-gray-900">
        <!-- Hover state -->
        <button class="hover:bg-blue-600 hover:text-white"></button>
      </div>
    </div>
  </div>
</div>
```

## 🎯 Learning Objectives

Setelah menyelesaikan minggu 4, peserta diharapkan dapat:

✅ Membuat dan menggunakan Laravel Blade Components  
✅ Memahami Component class structure dan registration  
✅ Menggunakan slots (named dan unnamed) dalam components  
✅ Membuat reusable layout component  
✅ Membuat responsive navbar component dengan mobile menu  
✅ Membuat reusable navigation link component  
✅ Mengintegrasikan TailwindCSS utility classes  
✅ Memahami props binding dan attribute merging  
✅ Membuat responsive UI dengan breakpoints  
✅ Implementasi active state detection  
✅ Accessibility best practices (aria-\*, sr-only, dll)  
✅ Menggunakan CDN elements (Tailwind Plus Elements)

## 💡 Tips Pembelajaran

1. **Component Reusability**: Buat components yang dapat digunakan kembali
2. **Props Validation**: Validate props di component class
3. **Slot Naming**: Gunakan named slots untuk flexibility
4. **Attribute Merging**: Combine custom classes dengan user's attributes
5. **Mobile-First**: Design untuk mobile dulu, kemudian desktop
6. **Accessibility**: Selalu include aria-\* attributes
7. **Testing**: Test components di berbagai screen sizes

## 🔧 Advanced Features

### Component Props Validation

```php
public function __construct(
    public string $href = '/',
    public bool $active = false,
) {}
```

### Conditional Rendering

```blade
@if($active)
    <div class="active">Active</div>
@endif
```

### Computed Properties

```php
#[Computed]
public function isActive() {
    return request()->is($this->href);
}
```

## 📚 Referensi

- [Laravel Components Documentation](https://laravel.com/docs/blade#components)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Tailwind Plus Elements](https://tailwindplus.com/elements)
- [ARIA Documentation](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA)

## 🎨 Tailwind Playground

Coba Tailwind classes online di:

- [Tailwind Play](https://play.tailwindcss.com/)
- [CodePen](https://codepen.io/)

## 📝 Perintah Artisan

```bash
# Membuat component
php artisan make:component NameComponent

# List semua components
php artisan component:list
```

---

**Previous Week**: [Minggu 3 - View](../03.%20view/README.md)

**Back to Main**: [Kembali ke Daftar Isi](../README.md)

---

**Next Steps**: Lanjutkan pembelajaran dengan fitur-fitur advanced Laravel seperti Database, Authentication, dan API development!
