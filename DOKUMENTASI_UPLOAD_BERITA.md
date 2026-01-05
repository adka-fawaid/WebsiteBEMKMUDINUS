# 📋 DOKUMENTASI UPLOAD BERITA - BEM KM UDINUS

Berikut adalah panduan lengkap tempat-tempat yang harus Anda edit/upload untuk menambahkan 3 berita baru: Partnership, Kegiatan, dan Kontak.

---

## 1️⃣ FITUR PARTNERSHIP

### 🗂️ Struktur Folder:
```
resources/views/guest/partnership/
├── partnership.blade.php          (Halaman daftar partnership)
└── detail_partnership.blade.php   (Halaman detail partnership)
```

### 📄 Tempat Upload Berita Partnership:
- **Database Table**: `partnerships` 
- **Kolom yang diisi**:
  - `judul` (string) - Nama partnership
  - `slug` (string) - URL-friendly (auto generate dari judul)
  - `image` (string) - Nama file gambar (disimpan di: `storage/app/public/artikel/`)
  - `desc` (text) - Deskripsi partnership

### 🖼️ Folder Gambar:
📁 `storage/app/public/artikel/` → Taruh gambar partnership di sini
*(Accessible via: `/storage/artikel/nama-gambar.png`)*

### 🔗 URL Akses:
- Daftar partnership: `http://127.0.0.1:8000/partnership`
- Detail partnership: `http://127.0.0.1:8000/detail_partnership/{slug}`

### 🎨 Template Input (Form):
Ada 2 cara upload:
1. **Via Database Seeder** (Recommended) - Edit file: `database/seeders/PartnershipBeritaSeeder.php`
2. **Via Admin Panel** - Route: `/partner` (authenticated)

---

## 2️⃣ FITUR KEGIATAN

### 🗂️ Struktur Folder:
```
resources/views/guest/kegiatan/
├── kegiatan.blade.php             (Halaman daftar kegiatan)
└── detail_kegiatan.blade.php      (Halaman detail kegiatan)
```

### 📄 Tempat Upload Berita Kegiatan:
- **Database Table**: `prokers` (Tabel Proker/Program Kerja)
- **Kolom yang diisi**:
  - `judul` (string) - Nama kegiatan
  - `slug` (string) - URL-friendly
  - `image` (string) - Nama file gambar (disimpan di: `storage/app/public/artikel/`)
  - `desc` (text) - Deskripsi kegiatan

### 🖼️ Folder Gambar:
📁 `storage/app/public/artikel/` → Taruh gambar kegiatan di sini
*(Accessible via: `/storage/artikel/nama-gambar.png`)*

### 🔗 URL Akses:
- Daftar kegiatan: `http://127.0.0.1:8000/kegiatan`
- Detail kegiatan: `http://127.0.0.1:8000/detail_kegiatan/{slug}`

### 🎨 Template Input (Form):
1. **Via Database Seeder** - Buat file: `database/seeders/KegiatanBeritaSeeder.php`
2. **Via Admin Panel** - Route: `/rkt` (authenticated)

---

## 3️⃣ FITUR KONTAK

### 🗂️ Struktur Folder:
```
resources/views/guest/kontak/
├── kontak.blade.php               (Halaman daftar kontak)
└── detail_kontak.blade.php        (Halaman detail kontak)
```

### 📄 Tempat Upload Berita Kontak:
- **Database Table**: `blogs` 
- **Kolom yang diisi**:
  - `judul` (string) - Nama/topik kontak
  - `slug` (string) - URL-friendly
  - `image` (string) - Nama file gambar (disimpan di: `storage/app/public/artikel/`)
  - `desc` (text) - Informasi kontak
  - `kategori` (string) - Harus: `"kontak"`

### 🖼️ Folder Gambar:
📁 `storage/app/public/artikel/` → Taruh gambar kontak di sini
*(Accessible via: `/storage/artikel/nama-gambar.png`)*

### 🔗 URL Akses:
- Daftar kontak: `http://127.0.0.1:8000/kontak`
- Detail kontak: `http://127.0.0.1:8000/detail_kontak/{slug}`

### 🎨 Template Input (Form):
1. **Via Database Seeder** - Buat file: `database/seeders/KontakBeritaSeeder.php`
2. **Via Admin Panel** - Route: `/blog` (authenticated)

---

## 📌 SUMMARY - Ringkasan Tempat Upload:

| Fitur | Database | Folder Gambar | View Listing | View Detail |
|-------|----------|--------------|--------------|------------|
| **Partnership** | `partnerships` | `storage/app/public/artikel/` | `guest.partnership.partnership` | `guest.partnership.detail_partnership` |
| **Kegiatan** | `prokers` | `storage/app/public/artikel/` | `guest.kegiatan.kegiatan` | `guest.kegiatan.detail_kegiatan` |
| **Kontak** | `blogs` (kategori=kontak) | `storage/app/public/artikel/` | `guest.kontak.kontak` | `guest.kontak.detail_kontak` |

---

## 🚀 LANGKAH-LANGKAH UPLOAD BERITA:

### 1. **Siapkan Gambar**
   - Ukuran: Minimal 500x400px (recommended 800x600px)
   - Format: PNG, JPG, JPEG, WebP
   - Simpan di: `storage/app/public/artikel/nama-gambar.png`

### 2. **Input Data ke Database**
   
   **Opsi A - Via Seeder (Recommended):**
   ```bash
   php artisan db:seed --class=PartnershipBeritaSeeder
   php artisan db:seed --class=KegiatanBeritaSeeder
   php artisan db:seed --class=KontakBeritaSeeder
   ```

   **Opsi B - Via Admin Panel:**
   - Partnership: `/partner` (authenticated)
   - Kegiatan: `/rkt` (authenticated)
   - Kontak: `/blog` (authenticated)

### 3. **Clear Cache**
   ```bash
   php artisan view:clear
   php artisan route:clear
   ```

### 4. **Akses Halaman**
   - Buka: `http://127.0.0.1:8000/partnership`
   - Buka: `http://127.0.0.1:8000/kegiatan`
   - Buka: `http://127.0.0.1:8000/kontak`

---

## 🔧 CONTOH SEEDER PARTNERSHIP:

```php
<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Partnership;
use Illuminate\Support\Str;

class PartnershipBeritaSeeder extends Seeder
{
    public function run(): void
    {
        $partnerships = [
            [
                'judul' => 'PT Mitra Indonesia - Software Development',
                'slug' => 'pt-mitra-indonesia-software-development',
                'image' => 'partnership-1.png',
                'desc' => '<p>Kolaborasi dengan PT Mitra Indonesia untuk program magang dan pengembangan skill mahasiswa.</p>',
            ],
        ];

        foreach ($partnerships as $partnership) {
            if (Partnership::where('slug', $partnership['slug'])->exists()) {
                continue;
            }
            Partnership::create($partnership);
        }
    }
}
```

---

## ❓ PERTANYAAN UMUM:

**Q: Di mana saya upload gambar?**
A: Folder `storage/app/public/artikel/` - gambar akan accessible via `/storage/artikel/nama-file.png`

**Q: Apakah slug auto-generate?**
A: Tidak, pastikan slug URL-friendly (gunakan tanda "-" untuk separator). Contoh: `berita-acara-unik`

**Q: Bagaimana jika gambar tidak muncul?**
A: Pastikan sudah jalankan `php artisan storage:link` dan gambar ada di folder yang tepat.

**Q: Bisa edit berita yang sudah upload?**
A: Ya, via admin panel atau edit langsung di database (hati-hati dengan perubahan slug).

---

Sudah siap upload berita? Beri tahu saya kapan saja! 🚀
