🌌 Dreamscape

Website Artikel & Galeri dengan Sistem Admin

Dreamscape adalah aplikasi website berbasis PHP dan MySQL yang digunakan untuk menampilkan artikel dan galeri gambar, serta menyediakan halaman admin untuk mengelola konten secara manual. Website ini dirancang sebagai proyek pembelajaran untuk memahami konsep CRUD, manajemen konten, dan pemisahan hak akses user–admin.

🎯 Tujuan Pembuatan

Website Dreamscape dibuat untuk:

- Menyediakan halaman publik berisi artikel dan galeri
  
- Memberikan fitur admin untuk menambah, mengedit, dan menghapus konten

- Melatih implementasi CRUD (Create, Read, Update, Delete)

- Memahami alur kerja frontend dan backend pada aplikasi web

🧩 Fitur Utama
🔓 Halaman Publik

- Menampilkan daftar artikel

- Menampilkan galeri gambar

- Tampilan responsif menggunakan Bootstrap

- Konten bersifat read-only untuk user biasa

🔐 Halaman Admin

- Login admin

- Tambah artikel secara manual

- Edit artikel

- Hapus artikel

- Upload gambar ke galeri

- Edit dan hapus gambar galeri

- Dashboard admin (jumlah artikel & galeri)

🛠️ Teknologi yang Digunakan

*Frontend

- HTML

- CSS

- Bootstrap

- JavaScript

- jQuery

*Backend

- PHP (Native)

- MySQL

- AJAX (untuk load data tanpa refresh)

- Server & Hosting

- XAMPP (Localhost)

- InfinityFree (Hosting gratis PHP)
  
🔄 Alur Kerja Sistem
*User (Pengunjung)

- Mengakses halaman website

- Melihat artikel dan galeri

- Tidak dapat mengubah konten

*Admin

- Login ke halaman admin

- Masuk dashboard

Mengelola artikel:

- Tambah

- Edit

- Hapus

- Mengelola galeri:

- Upload gambar

- Edit gambar

- Hapus gambar

- Data tersimpan di database MySQL

🗄️ Konsep Database

Website menggunakan database MySQL dengan tabel utama:

- article → menyimpan data artikel

- gallery → menyimpan data gambar galeri

- admin / user → menyimpan data login admin

🔐 Keamanan Dasar

- Login admin menggunakan username & password

- Validasi form input

- Upload file dibatasi tipe gambar (jpg, png, jpeg, gif)

- Pembatasan akses halaman admin
