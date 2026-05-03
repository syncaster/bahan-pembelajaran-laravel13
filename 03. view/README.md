# Minggu 3: View - Views & Vite Asset Compilation

Pada minggu ketiga, peserta akan mempelajari pengorganisasian views yang lebih baik dan menggunakan Vite untuk asset compilation modern.

## 📚 Apa yang akan dipelajari

- ✅ Advanced Views Organization
- ✅ Blade Templating Lanjut
- ✅ Asset Compilation dengan Vite
- ✅ CSS Resources Management
- ✅ Hot Module Replacement (HMR)
- ✅ Asset Versioning
- ✅ CDN Integration

## 📁 Struktur Folder

```
03. view/
├── vite.config.js           # Vite configuration
├── Controllers/
│   └── HomeController.php   # Home controller
│
├── resources/
│   └── css/
│       └── app.css          # App stylesheet
│
├── public/
│   └── img/                 # Images folder
│
├── routes/
│   └── web.php              # Web routes
│
└── views/
    ├── home.blade.php       # Home view
    ├── about.blade.php      # About view
    └── blog/
        └── blog.blade.php   # Blog view (sub-folder)
```

## 🎯 Topik Pembelajaran

### 1. Advanced Views Organization

- Views folder structure
- Sub-folder untuk grouping views
- File naming conventions
- View discovery mechanism
- Nested view organization

### 2. Blade Templating Advanced

- Master layouts dengan `@extends`
- Sections dengan `@section` dan `@endsection`
- Yielding sections dengan `@yield`
- Including partials dengan `@include`
- Component directives
- Blade control structures

### 3. Asset Compilation dengan Vite

- Apa itu Vite?
- Konfigurasi Vite untuk Laravel
- CSS preprocessing
- JavaScript bundling
- Asset versioning untuk production
- Development server setup

### 4. Resource Organization

- Resources folder structure
- CSS files management
- Asset linking dengan @vite directive
- Public assets vs resources
- CDN resources integration

## 📝 File Kunci

### `vite.config.js`

Konfigurasi Vite untuk Laravel:

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

Mendemonstrasikan:

- Vite configuration untuk Laravel
- Asset entry points
- Hot Module Replacement setup
- Development vs production modes

### `routes/web.php`

Mendemonstrasikan:

- Controller routing
- View rendering
- Data passing ke views

### `Controllers/HomeController.php`

Contoh controller dengan:

- Index method untuk home page
- Data array passing
- View returning

```php
public function index(){
    return view('home',[
        'title' => 'Home Page',
    ]);
}
```

### `resources/css/app.css`

File stylesheet utama dengan:

- CSS organization
- Tailwind CSS integration
- Asset organization best practices
- Hot Module Replacement (HMR) support

### `views/home.blade.php`

Demonstrasi:

- Home page layout
- Data display
- Styling dengan CSS
- Responsive design

### `views/about.blade.php`

Demonstrasi:

- About page content
- Data passing dan display
- Responsive layout
- View structure

### `views/blog/blog.blade.php`

Demonstrasi:

- Sub-folder view organization
- Blog page structure
- Content management
- Nested view usage

## 🚀 Cara Menjalankan

1. **Setup Project**

```bash
cd "03. view"
```

2. **Install Dependencies**

```bash
npm install
composer install
```

3. **Development Mode dengan Vite**

```bash
# Terminal 1: Jalankan Vite dev server
npm run dev

# Terminal 2: Jalankan Laravel server
php artisan serve
```

4. **Build untuk Production**

```bash
npm run build
```

5. **Akses Routes**

- Home: `http://localhost:8000/home`
- About: `http://localhost:8000/about`
- Blog: `http://localhost:8000/blog`

## 💡 Vite vs Traditional Asset Management

### Vite (Modern Approach)

- ✅ Hot Module Replacement (HMR)
- ✅ Native ES modules support
- ✅ Lightning-fast cold starts
- ✅ Optimized build times
- ✅ Better developer experience

### Traditional (Webpack/Mix)

- Legacy approach
- Slower development builds
- Manual refresh required
- Less efficient HMR

## 🎯 Learning Objectives

Setelah menyelesaikan minggu 3, peserta diharapkan dapat:

✅ Mengorganisasikan views dengan proper folder structure  
✅ Memahami Blade inheritance dan sections  
✅ Menggunakan Vite untuk asset compilation  
✅ Mengelola CSS resources dengan proper workflow  
✅ Mengintegrasikan asset linking di Blade templates  
✅ Memahami Hot Module Replacement (HMR) concept  
✅ Menggunakan CDN resources dalam Laravel project  
✅ Optimize assets untuk production

## 📚 NPM Scripts

Di `package.json` terdapat:

```json
{
  "scripts": {
    "dev": "vite",
    "build": "vite build",
    "preview": "vite preview"
  }
}
```

## 💡 Tips Pembelajaran

1. **HMR Magic**: Lihat perubahan CSS/JS secara real-time tanpa refresh
2. **Asset Versioning**: Vite otomatis handle cache busting
3. **CDN Integration**: Bisa combine Vite dengan external CDNs
4. **View Organization**: Group related views dalam sub-folders
5. **Blade @extends**: Gunakan untuk template inheritance

## 📚 Referensi

- [Vite Documentation](https://vitejs.dev/)
- [Laravel Vite Integration](https://laravel.com/docs/vite)
- [Laravel Blade](https://laravel.com/docs/blade)
- [CSS Best Practices](https://developer.mozilla.org/en-US/docs/Web/CSS)

## 🔧 Troubleshooting

### Issue: HMR tidak berfungsi

```bash
# Restart Vite dev server
npm run dev
```

### Issue: Assets tidak ter-load

```bash
# Clear cache
php artisan view:clear
php artisan cache:clear
npm run build
```

### Issue: Vite timeout

```bash
# Increase timeout di vite.config.js
import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css'],
      refresh: true,
      hmr: {
        host: 'localhost',
        port: 5173,
      },
    }),
  ],
})
```

---

**Previous Week**: [Minggu 2 - Basic](../02.basic/README.md)

**Next Week**: [Minggu 4 - Blade Components](../04.%20blade/README.md)

**Back to Main**: [Kembali ke Daftar Isi](../README.md)
