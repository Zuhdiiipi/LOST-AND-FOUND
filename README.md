<h3 align="center">Sistem Informasi Pelaporan Barang Hilang dan Ditemukan di Lingkungan Kampus</h3>

<p align="center">
  <img src="https://github.com/user-attachments/assets/a923ec20-ad7c-4bfb-96d9-9bcc0c9547a7" alt="Logo unsulbar" width="200"/>
</p>

<p align="center">
  <strong>MUHAMMAD ZUHDI</strong><br/><br/>
  <strong>D0223320</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

---

## 🎯 Role dan Fitur

### 🧑 User
- Registrasi & Login
- Melapor barang hilang & ditemukan (melalui form, diverifikasi oleh staff sebelum ditampilkan)
- Melihat daftar barang hilang & ditemukan (informasi terbatas)
- Mengklaim barang ditemukan (form klaim diverifikasi staff)
- Melihat riwayat laporan pribadi

### 🧑‍💼 Staff
- Login
- Melihat semua laporan barang hilang & ditemukan
- Verifikasi laporan barang (hilang/ditemukan)
- Verifikasi klaim barang
- Mengelola status barang (tersedia, sedang diklaim, selesai)

### 🛠️ Admin
- Login
- Mengelola akun Staff
- Mengelola akun User
- Melihat semua laporan dan klaim
- Melihat semua aktivitas sistem

---

## 🗃️ Tabel Database

### Tabel `users`
| Field         | Tipe Data   | Keterangan          |
|---------------|-------------|---------------------|
| id            | BIGINT      | Primary Key         |
| name          | VARCHAR     | Nama lengkap        |
| email         | VARCHAR     | Email unik          |
| password      | VARCHAR     | Disimpan dalam hash |
| phone_number  | VARCHAR     | Nomor HP kontak     |
| role          | ENUM        | user, staff, admin  |
| timestamps    | TIMESTAMP   | created_at, updated_at |

### Tabel `reports`
| Field         | Tipe Data   | Keterangan                     |
|---------------|-------------|--------------------------------|
| id            | BIGINT      | Primary Key                    |
| user_id       | BIGINT      | FK ke `users.id`               |
| type          | ENUM        | 'lost', 'found'                |
| item_name     | VARCHAR     | Nama barang                    |
| description   | TEXT        | Deskripsi detail               |
| location      | VARCHAR     | Lokasi ditemukan/hilang        |
| date          | DATE        | Tanggal kejadian               |
| image         | VARCHAR     | Path gambar (opsional)         |
| status        | ENUM        | 'pending', 'approved', 'rejected' |
| is_claimed    | BOOLEAN     | TRUE jika sudah diklaim        |
| timestamps    | TIMESTAMP   | created_at, updated_at         |

### Tabel `claims`
| Field         | Tipe Data   | Keterangan                         |
|---------------|-------------|------------------------------------|
| id            | BIGINT      | Primary Key                        |
| user_id       | BIGINT      | FK ke `users.id`                   |
| report_id     | BIGINT      | FK ke `reports.id`                 |
| justification | TEXT        | Alasan/keterangan mengklaim       |
| status        | ENUM        | 'pending', 'approved', 'rejected' |
| timestamps    | TIMESTAMP   | created_at, updated_at             |

---

## 🔗 Jenis Relasi dan Tabel yang Berelasi

- `users` memiliki banyak `reports`  
- `users` memiliki banyak `claims`  
- `reports` dimiliki oleh satu `user`  
- `reports` bisa memiliki satu `claim`  
- `claims` dimiliki oleh satu `user`  
- `claims` terkait ke satu `report`

---

Silakan beri tahu jika ingin ditambahkan diagram relasi database (ERD) atau demo penggunaan halaman-halamannya.
