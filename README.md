# 📌 Sistem Informasi Pelaporan Barang Hilang dan Ditemukan di Lingkungan Kampus

## 📖 Deskripsi Proyek
Sistem ini bertujuan untuk memfasilitasi warga kampus dalam melaporkan barang yang hilang maupun ditemukan agar proses pencocokan lebih efisien dan terorganisir secara digital.

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

## 📷 Screenshot Tampilan
*(Akan ditambahkan setelah pengembangan tampilan selesai)*

---

## 📄 Lisensi
Khusus digunakan untuk tugas kuliah Framework Web-Based.
