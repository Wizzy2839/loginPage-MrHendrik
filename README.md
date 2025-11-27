# Sistem Login & Manajemen User (MD5 Hash)

Project ini adalah aplikasi web sederhana yang menangani autentikasi pengguna. Fitur utamanya mencakup pendaftaran user, login, dan logout dengan keamanan password menggunakan enkripsi satu arah (hashing) MD5.

---

## Identitas Pengembang
**Nama** : Muhammad Andy Dwi Subandi  
**Kelas** : XII RPL 1  
**Absen** : 24  

---

## Fitur Aplikasi

Aplikasi ini mencakup pemenuhan tugas untuk poin-poin berikut:

1.  **Manajemen Database User**
    * Pembuatan struktur tabel `users` untuk menyimpan data pengguna.
2.  **Halaman Login**
    * Antarmuka untuk masuk ke dalam sistem.
    * Validasi username dan password.
3.  **Keamanan Password (MD5)**
    * Password tidak disimpan sebagai teks biasa (plain text).
    * Password dienkripsi menggunakan algoritma hashing **MD5** sebelum disimpan ke database dan saat proses verifikasi login.
4.  **Halaman Logout**
    * Skrip untuk menghapus sesi (session destroy) pengguna yang sedang aktif.
    * Redirect otomatis ke halaman login setelah logout.
5.  **Integrasi Navbar**
    * Penambahan tombol/link "Logout" pada navigasi bar yang hanya muncul ketika user sudah login.

---

## 🛠️ Teknologi yang Digunakan
* **Bahasa Pemrograman:** PHP (Native)
* **Database:** MySQL
* **Frontend:** HTML, CSS (Bootstrap)

---

## 📂 Struktur Database

Untuk menjalankan aplikasi ini, silakan buat database dan jalankan query SQL berikut di **phpMyAdmin** (Tab SQL):

```sql
-- 1. Buat Database (Jika belum ada)
CREATE DATABASE login_db;
USE login_db;

-- 2. Buat Tabel Users
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL, 
    nama_lengkap VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Akun Dummy (Password: 'admin123')
INSERT INTO users (username, password, nama_lengkap) 
VALUES ('admin', '0192023a7bbd73250516f069df18b500', 'Wizzy Nonchalant');
