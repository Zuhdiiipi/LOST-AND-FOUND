# 📌 Sistem Informasi Pelaporan Barang Hilang dan Ditemukan di Lingkungan Kampus

## 📖 Deskripsi Proyek
Sistem ini bertujuan untuk memfasilitasi warga kampus dalam melaporkan barang yang hilang maupun ditemukan agar proses pencocokan lebih efisien dan terorganisir secara digital.

---

## 🎯 Tujuan
- Mempermudah pelaporan barang hilang dan ditemukan secara online.
- Menyediakan sistem yang aman dan berbasis role (mahasiswa, satpam, admin).
- Mempercepat proses pencocokan barang oleh admin.

---

## 🚀 Fitur Utama
- Autentikasi pengguna (Login/Register)
- Manajemen Role: Mahasiswa, Satpam, Admin
- CRUD Laporan Barang Hilang
- CRUD Barang Ditemukan
- Validasi Form
- Pencocokan Barang Hilang & Ditemukan (dengan Transaction)
- Tampilan riwayat laporan dan status pencocokan
- Efisiensi tampilan dengan Blade Layout

---

## 🧑‍🤝‍🧑 Role & Akses

| Role      | Hak Akses                                                                 |
|-----------|---------------------------------------------------------------------------|
| Mahasiswa | Input laporan barang hilang, melihat daftar barang ditemukan             |
| Satpam    | Input data barang ditemukan, melihat laporan barang hilang               |
| Admin     | Mencocokkan laporan, mengelola user & laporan                             |

---

## 🗂️ Struktur Database (ERD Ringkas)

- **users**: id, name, email, password, role
- **barang_hilang**: id, user_id, nama_barang, lokasi, deskripsi, status
- **barang_ditemukan**: id, user_id, nama_barang, lokasi, deskripsi, status
- **kecocokan**: id, hilang_id, ditemukan_id, tanggal

---

## 🛠️ Teknologi yang Digunakan

- Laravel 10+
- Blade Templating
- Laravel Breeze / Fortify
- MySQL
- Bootstrap / Tailwind CSS

---

## 🗓️ Roadmap Pengerjaan

### Minggu 1
- [ ] Riset & desain sistem
- [ ] Buat ERD dan use case
- [ ] Setup Laravel dan database
- [ ] Autentikasi & role

### Minggu 2
- [ ] CRUD Barang Hilang & Barang Ditemukan
- [ ] Validasi form
- [ ] Implementasi relasi antar tabel

### Minggu 3
- [ ] Middleware role
- [ ] Transaksi pencocokan data
- [ ] Blade layouting efisien

### Minggu 4
- [ ] Pengujian & penyempurnaan
- [ ] Dokumentasi & presentasi

---

## ✅ Checklist Kriteria Penilaian

- [ ] Efisiensi Layouting dengan Blade (10%)
- [ ] Pengelolaan Tabel dengan Migration (10%)
- [ ] Menerapkan Relation Table (15%)
- [ ] Menerapkan Transaction (10%)
- [ ] Penerapan Sistem Authentication (15%)
- [ ] Multi Role dengan 3 Role (15%)
- [ ] Menerapkan CRUD (15%)
- [ ] Validation Form (10%)

---

## 📷 Screenshot Tampilan
*(Akan ditambahkan setelah pengembangan tampilan selesai)*

---

## 📄 Lisensi
Khusus digunakan untuk tugas kuliah Framework Web-Based.
