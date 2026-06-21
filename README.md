# Pemrograman Web Lanjut - Laravel 13

Materi pembelajaran untuk mata kuliah **Pemrograman Web Lanjut** menggunakan Framework **Laravel 13**.

## 📚 Informasi Mata Kuliah

- **Nama Mata Kuliah**: Pemrograman Web Lanjut
- **Framework**: Laravel 13
- **Bahasa Pemrograman**: PHP
- **Level**: Intermediate/Lanjut
- **Durasi**: 16 Minggu (Semester)

---

## 📖 Ringkasan Materi

| #   | Minggu                                    | Topik                | Ringkasan                                                                 |
| --- | ----------------------------------------- | -------------------- | ------------------------------------------------------------------------- |
| 1   | [Introduction](01.introduction/README.md) | Pengenalan Laravel   | Instalasi Laravel 13, struktur direktori, routing dasar, blade templating |
| 2   | [Basic](02.basic/README.md)               | Routing & Controller | Controllers, routing lanjut, blade views, CSS styling                     |
| 3   | [View](03.%20view/README.md)              | Views & Vite         | Organisasi views, asset compilation dengan Vite, HMR                      |
| 4   | [Blade](04.%20blade/README.md)            | Blade Components     | Blade components class, slots, props, TailwindCSS                         |
| 5   | [View Data](05.%20view%20data/README.md)  | Props & Display Data | Component props (`@props`), string limiter, dynamic routing               |
| 6   | [Model](06.%20model/README.md)            | Models               | Model class, named routes, `routeIs()`, arrow functions                   |

---

## 🚀 Quick Start

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js (untuk Vite)
- Database (MySQL/PostgreSQL)

### Setup

```bash
# Navigasi ke folder minggu yang ingin dipelajari
cd 01.introduction/  # atau 02.basic, 03.view, 04.blade

# Untuk minggu 3 & 4: Install dependencies
npm install
composer install

# Setup environment
cp .env.example .env
php artisan key:generate

# Development server
php artisan serve
npm run dev  # (hanya untuk minggu 3 & 4)
```

Akses aplikasi di: `http://localhost:8000`

---

## 🔧 Teknologi yang Digunakan

| Komponen         | Versi    | Keterangan           |
| ---------------- | -------- | -------------------- |
| Laravel          | 13.x     | Web Framework        |
| PHP              | 8.2+     | Programming Language |
| Blade            | Built-in | Template Engine      |
| Vite             | Latest   | Asset Bundler        |
| TailwindCSS      | Latest   | CSS Framework        |
| MySQL/PostgreSQL | Latest   | Database             |
| Composer         | Latest   | Dependency Manager   |

---

## 💡 Tips Pembelajaran

1. **Baca Documentation**: Kunjungi README.md di setiap folder minggu untuk penjelasan detail
2. **Practice First**: Praktik langsung, jangan hanya membaca
3. **Eksperimen**: Modifikasi code dan lihat hasilnya
4. **Follow Pattern**: Ikuti pattern yang sudah ada di setiap folder
5. **Use Git**: Track progress dengan Git

---

## 📚 Referensi Berguna

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Blade](https://laravel.com/docs/blade)
- [Laravel Components](https://laravel.com/docs/blade#components)
- [Vite Documentation](https://vitejs.dev/)
- [TailwindCSS Documentation](https://tailwindcss.com/)
- [PHP Official](https://www.php.net)

---

## 📧 Kontak & Support

Untuk pertanyaan atau klarifikasi mengenai materi pembelajaran, silahkan menghubungi instruktur mata kuliah.

---

## 📄 Lisensi

Materi pembelajaran ini disediakan untuk keperluan pendidikan.

---

**Last Updated**: May 2026  
**Framework Version**: Laravel 13.x  
**Created for**: Pemrograman Web Lanjut
