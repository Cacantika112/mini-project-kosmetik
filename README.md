# Product Information System - Cosmetics Store

Sistem Informasi Manajemen Data Produk Kosmetik berbasis PHP native. Proyek ini dibuat untuk memenuhi **Mini Project 1 (Mata Kuliah Pemrograman Web)** dengan menerapkan prinsip **Separation of Concerns (SoC)** dan struktur pemrograman modular.

---

## 📌 Fitur Utama
- **Ringkasan Inventori**: Menampilkan total variasi produk serta total akumulasi nilai aset produk di gudang.
- **Katalog Produk**: Menampilkan daftar produk kosmetik lengkap dengan ID, Nama, Kategori, Harga, Stok, dan Deskripsi.
- **Deteksi Stok Kritis**: Menggunakan logika conditional untuk menandai dan memberi peringatan pada produk dengan stok kurang dari 3 item (`stok < 3`).
- **Format Rupiah**: Konversi otomatis format angka menjadi format mata uang Rupiah.

---

## 📁 Arsitektur Proyek (Separation of Concerns)

Proyek ini dipisah menjadi 3 komponen utama:

1. **`products.php` (Data Layer)**
   - Menampung data produk kosmetik dalam bentuk *Multidimensional Associative Array*.
2. **`functions.php` (Processing Layer)**
   - Berisi fungsi logika bisnis seperti `hitungTotalNilaiStok()`, `isStokKritis()`, dan helper `formatRupiah()`.
3. **`index.php` (Presentation Layer)**
   - Menggabungkan komponen menggunakan `require_once` dan merender antarmuka pengguna (UI) dengan tabel HTML dan CSS.

---

## 🛠️ Teknologi yang Digunakan
- **PHP** (Server-side processing)
- **HTML5 & CSS3** (UI Design)
- **Git & GitHub** (Version Control System)

---

## 🚀 Cara Menjalankan Proyek Secara Lokal

1. Pastikan kamu sudah menginstal server lokal seperti **XAMPP** atau **Laragon**.
2. Clone repository ini ke dalam folder web server kamu (`htdocs` untuk XAMPP):
   ```bash
   git clone [https://github.com/Cacantika112/mini-project-kosmetik.git](https://github.com/Cacantika112/mini-project-kosmetik.git)
