# 🛡️ Amankan Data Karyawan dan Gaji – Laravel 12

Repositori ini berisi proyek akhir dengan tema **"Amankan Data Karyawan dan Gaji"**, yang dibangun menggunakan *framework* Laravel 12. Aplikasi ini bertujuan untuk mencatat, mengelola, dan mengamankan data karyawan serta informasi gaji melalui sistem yang terautentikasi dan terproteksi.

---
## 🚀 Fitur Utama

* **🔐 Autentikasi (Login & Register)** – menggunakan Laravel Breeze untuk mengatur akses pengguna.
* **👥 CRUD Karyawan** – fungsionalitas lengkap untuk menambah, mengedit, menghapus, dan melihat daftar karyawan.
* **💰 CRUD Gaji** – pengelolaan data gaji yang terhubung langsung ke data karyawan.
* **📊 Dashboard Ringkasan** – menampilkan jumlah total karyawan dan total keseluruhan gaji dalam bentuk ringkasan.
* **🛡️ Keamanan Data**:
    * Autentikasi & proteksi CSRF.
    * Validasi input form.
    * *Middleware auth* untuk membatasi akses data hanya kepada pengguna terverifikasi.

---
## 🧩 Teknologi yang Digunakan

* **Laravel 12**
* **MySQL** sebagai *database*
* **Laravel Breeze** (untuk Autentikasi dan *layout* sederhana)
* **Blade Template Engine**
* **Eloquent ORM** untuk relasi data

---
## ⚙️ Cara Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

### 1. Clone repositori

```bash
git clone [https://github.com/username/data-karyawan-gaji.git](https://github.com/username/data-karyawan-gaji.git)
cd data-karyawan-gaji
````

### 2\. Install dependensi

```bash
composer install
npm install && npm run dev
```

### 3\. Atur environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4\. Buat *database* di MySQL

(Misalnya: `data_karyawan_gaji`)

### 5\. Sesuaikan konfigurasi *database* di file `.env`

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=data_karyawan_gaji
DB_USERNAME=root
DB_PASSWORD=
```

### 6\. Jalankan migrasi

```bash
php artisan migrate
```

### 7\. Jalankan server

```bash
php artisan serve
```

-----

## 🔐 Penjelasan Keamanan

Aplikasi ini mengimplementasikan beberapa mekanisme keamanan penting:

  * **Autentikasi**: Hanya pengguna yang telah *login* dan terverifikasi yang dapat mengakses *dashboard*, data karyawan, dan data gaji, mencegah akses tidak sah.
  * **Proteksi CSRF**: Setiap *form* dalam aplikasi dilindungi dengan token `@csrf` untuk mencegah serangan *Cross-Site Request Forgery*.
  * **Validasi Data**: Setiap input dari pengguna difilter dan divalidasi secara ketat untuk memastikan data yang masuk sesuai format dan aman, mengurangi risiko injeksi data berbahaya.
  * **Proteksi SQL Injection**: Laravel Eloquent secara *default* sudah dilengkapi dengan fitur proteksi terhadap *SQL Injection*, sehingga *query database* Anda aman dari manipulasi.

-----

## 📷 Tampilan

(Anda bisa menambahkan *screenshot* di sini. Disarankan untuk membuat folder `screenshots/` dan meletakkan gambar di sana, lalu tautkan seperti contoh di bawah.)

  * **Dashboard**
  * ![Tampilan Dashboard Aplikasi](screenshots/dashboard.png)
  * **Form Karyawan**
  * ![Tampilan Dashboard Aplikasi](screenshots/karyawan.png)
  * **Form Gaji**
  * ![Tampilan Dashboard Aplikasi](screenshots/gaji.png)

-----

## 👤 Developer

**Alfianita Ingsiany** – [GitHub Profile](https://www.google.com/url?sa=E&source=gmail&q=https://github.com/auwfiii)

-----

## 📝 Lisensi

Proyek ini bersifat *open-source* dan bebas digunakan untuk keperluan pembelajaran.
