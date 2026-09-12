# Asteria Riksa Uji

**Aplikasi Manajemen Riksa Uji PT. Asteria Riksa Indonesia**

Asteria Riksa Uji merupakan aplikasi berbasis web yang dikembangkan untuk membantu proses pengelolaan kegiatan **Riksa Uji (Pemeriksaan dan Pengujian)** secara terintegrasi.

Aplikasi ini menyediakan pengelolaan **Job Order (JO)**, data alat, penugasan petugas, serta berbagai **Form KP (Kartu Pemeriksaan)** berdasarkan jenis peralatan atau instalasi yang diperiksa.

Sistem dilengkapi dengan autentikasi, role & permission, dashboard, pencarian data, serta pengelolaan status pekerjaan sehingga proses administrasi Riksa Uji dapat dilakukan secara lebih terstruktur.

---

## 🚀 Fitur Utama

### 1. Authentication

Aplikasi menyediakan sistem autentikasi pengguna yang mencakup:

* Login
* Register
* Logout
* Verifikasi email
* Reset password
* Konfirmasi password
* Pengelolaan profil pengguna

Authentication dibangun menggunakan **Laravel Breeze**.

---

### 2. Role & Permission

Sistem menggunakan **Spatie Laravel Permission** untuk mengatur hak akses pengguna.

Terdapat beberapa role utama:

| Role                | Hak Akses                             |
| ------------------- | ------------------------------------- |
| **Super Admin**     | Mengelola seluruh sistem dan pengguna |
| **Admin Riksa Uji** | Mengelola Job Order dan data alat     |
| **Tim Riksa Uji**   | Mengelola Form KP                     |
| **Penyusun LHP**    | Melihat data dan hasil pemeriksaan    |

Permission yang tersedia:

* `manage job orders`
* `manage form_kp`
* `view only`
* `manage users`

---

## 📋 Modul Job Order

Modul Job Order digunakan untuk mengelola pekerjaan Riksa Uji mulai dari pembuatan hingga penyelesaian.

Informasi yang dapat dikelola antara lain:

* Nomor Job Order
* Nama perusahaan
* Alamat perusahaan
* PIC Order
* Email
* Contact Person
* Nomor penawaran
* Nomor Purchase Order
* Tanggal pembuatan
* Jadwal pemeriksaan
* Jumlah hari pemeriksaan
* Jadwal selesai
* Jam bertemu
* PIC yang ditemui
* Catatan
* Kelengkapan dokumen

### Status Job Order

Job Order memiliki tiga status utama:

```text
BELUM
  ↓
PROSES
  ↓
SELESAI
```

Status Job Order dihitung berdasarkan status alat yang terdapat pada Job Order.

Logika status:

* **Belum** → belum ada alat yang selesai
* **Proses** → sebagian alat telah selesai
* **Selesai** → seluruh alat telah selesai

---

## 🔧 Modul Data Alat

Modul Tools digunakan untuk mengelola berbagai alat yang menjadi objek Riksa Uji.

Data alat dapat mencakup:

* Jenis Riksa Uji
* Sub Jenis Riksa Uji
* Nama alat
* Kapasitas
* Model
* Nomor seri
* Status alat

Admin dapat melakukan:

* Menambah alat
* Melihat detail alat
* Mengubah data alat
* Menghapus alat
* Melakukan pencarian alat
* Filter berdasarkan jenis dan sub jenis

---

## 📝 Modul Form KP

Form KP digunakan untuk mencatat data pemeriksaan berdasarkan jenis peralatan atau instalasi.

Aplikasi menyediakan beberapa kelompok Form KP:

### PUBT

**Pesawat Uap dan Bejana Tekan**

Jenis form yang tersedia:

* Bejana Tekan
* Ketel Uap
* Screw Compressor
* Tangki Timbun

---

### PTP

**Pesawat Tenaga dan Produksi**

Jenis form yang tersedia:

* Pesawat Tenaga Produksi
* Motor Diesel
* Heat Treatment

---

### PAPA

**Pesawat Angkat, Pesawat Angkut dan Peralatan Angkat**

Jenis form yang tersedia:

* Crane
* Forklift
* Wheel Loader
* Scissor Lift
* Cargo Lift
* Dump Trailer

---

### IPK

**Instalasi Proteksi Kebakaran**

Jenis form yang tersedia:

* Fire Alarm
* Fire Hydrant

---

### Instalasi Listrik

Jenis form yang tersedia:

* Instalasi Listrik
* Instalasi Penyalur Petir

---

### Eskalator & Elevator

Jenis form yang tersedia:

* Eskalator
* Elevator

---

## 🔄 Alur Utama Sistem

Secara umum proses aplikasi dapat digambarkan sebagai berikut:

```text
Login
  │
  ▼
Dashboard
  │
  ▼
Job Order
  │
  ├── Data Perusahaan
  ├── Jadwal Pemeriksaan
  ├── Data Alat
  └── Petugas Pemeriksa
          │
          ▼
      Pemeriksaan
          │
          ▼
       Form KP
          │
          ▼
   Status Alat Selesai
          │
          ▼
  Status Job Order
          │
          ▼
       Selesai
```

---

## 👥 Role & Alur Pengguna

### Super Admin

Super Admin memiliki akses paling tinggi dalam sistem.

Fungsi utama:

* Melihat dashboard
* Mengelola Job Order
* Mengelola data alat
* Mengelola Form KP
* Mengelola pengguna
* Mengubah role pengguna
* Menghapus pengguna

---

### Admin Riksa Uji

Admin bertanggung jawab terhadap administrasi Riksa Uji.

Fungsi utama:

* Membuat Job Order
* Mengubah Job Order
* Melihat Job Order
* Mengelola data alat
* Menentukan petugas
* Melihat Form KP

---

### Tim Riksa Uji

Tim Riksa Uji bertanggung jawab terhadap proses pemeriksaan.

Fungsi utama:

* Melihat Job Order
* Mengelola Form KP
* Mengisi data pemeriksaan
* Memperbarui data hasil pemeriksaan
* Menandai alat yang telah selesai diperiksa

---

### Penyusun LHP

Penyusun LHP memiliki akses untuk melihat data yang diperlukan dalam proses penyusunan laporan.

Fungsi utama:

* Melihat Job Order
* Melihat data alat
* Melihat Form KP
* Melihat hasil pemeriksaan

---

## 🏗️ Teknologi yang Digunakan

### Backend

* PHP 8.2+
* Laravel 12
* Laravel Eloquent ORM
* Laravel Blade
* Laravel Breeze
* Spatie Laravel Permission

### Frontend

* Blade Template
* Tailwind CSS
* Alpine.js
* Vite
* Axios

### Database

* MySQL / MariaDB
* Laravel Migration
* Laravel Seeder
* Eloquent ORM

### Development Tools

* Composer
* NPM
* Git
* GitHub

---

## 📁 Struktur Project

Struktur utama aplikasi:

```text
asteria/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   ├── DashboardController.php
│   │   │   ├── JobOrderController.php
│   │   │   ├── JobOrderToolController.php
│   │   │   ├── ToolController.php
│   │   │   ├── RiksaUjiController.php
│   │   │   ├── SuperAdminController.php
│   │   │   └── FormKp*Controller.php
│   │   │
│   │   └── Requests/
│   │
│   ├── Models/
│   │   ├── User.php
│   │   ├── JobOrder.php
│   │   ├── JobOrderTool.php
│   │   ├── JobOrderResponsible.php
│   │   ├── Tool.php
│   │   ├── JenisRiksaUji.php
│   │   ├── SubJenisRiksaUji.php
│   │   └── FormKp*.php
│   │
│   ├── Observers/
│   └── Providers/
│
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── auth/
│       ├── form_kp/
│       ├── job_orders/
│       ├── profile/
│       ├── superadmin/
│       ├── tools/
│       └── components/
│
├── routes/
│   ├── web.php
│   └── console.php
│
├── public/
├── config/
├── storage/
├── tests/
│
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

---

## 🗄️ Struktur Database

Database dibangun menggunakan Laravel Migration.

Beberapa tabel utama:

```text
users
roles
permissions
model_has_roles
model_has_permissions
role_has_permissions

jenis_riksa_ujis
sub_jenis_riksa_ujis
tools

job_orders
job_order_responsibles
job_order_tools

form_kp_bejana_tekans
form_kp_katel_uaps
form_kp_screw_compressors
form_kp_tangki_timbuns

form_kp_eskalators
form_kp_elevators

form_kp_cranes
form_kp_forklifts
form_kp_wheel_loaders
form_kp_scissor_lifts
form_kp_cargo_lifts
form_kp_dump_trailers

form_kp_pesawat_tenaga_produksis
form_kp_motor_diesels
form_kp_heat_treatments

form_kp_instalasi_fire_alarms
form_kp_instalasi_fire_hydrants

form_kp_instalasi_listriks
form_kp_instalasi_penyalur_petirs
```

Relasi utama:

```text
Job Order
   │
   ├──< Job Order Tools >── Tool
   │
   └──< Job Order Responsibles >── User
                                  │
                                  ▼
                              Petugas
```

Job Order menjadi pusat proses karena menghubungkan perusahaan, alat yang diperiksa, petugas, jadwal pemeriksaan, dan Form KP.

---

# ⚙️ Instalasi

## 1. Clone Repository

```bash
git clone https://github.com/USERNAME/asteria.git
cd asteria
```

Ganti `USERNAME/asteria` dengan alamat repository sebenarnya.

---

## 2. Install Dependency PHP

```bash
composer install
```

---

## 3. Install Dependency Frontend

```bash
npm install
```

---

## 4. Buat File Environment

Salin file `.env.example` menjadi `.env`.

Windows:

```bash
copy .env.example .env
```

Linux / macOS:

```bash
cp .env.example .env
```

---

## 5. Generate Application Key

```bash
php artisan key:generate
```

---

## 6. Konfigurasi Database

Buka file:

```text
.env
```

Kemudian sesuaikan konfigurasi database.

Contoh:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=asteria
DB_USERNAME=root
DB_PASSWORD=
```

Buat database dengan nama:

```text
asteria
```

---

## 7. Jalankan Migration dan Seeder

Untuk membuat struktur database sekaligus data awal:

```bash
php artisan migrate --seed
```

Seeder akan membuat data awal seperti:

* Role
* Permission
* User Super Admin
* Data jenis Riksa Uji
* Data sub jenis Riksa Uji
* Data tools
* Data Job Order
* Data Form KP

---

## 8. Jalankan Development Server

```bash
php artisan serve
```

Kemudian buka:

```text
http://127.0.0.1:8000
```

Untuk menjalankan Vite:

```bash
npm run dev
```

---

## 💻 Menjalankan dengan Satu Perintah

Project juga menyediakan script development pada `composer.json`.

Jalankan:

```bash
composer run dev
```

Command tersebut menjalankan beberapa proses development seperti:

```text
Laravel Server
Queue Listener
Laravel Pail
Vite
```

---

# 🔐 Akun Default

Seeder menyediakan akun Super Admin:

```text
Email    : simpelnaker@gmail.com
ID User  : 0001
Password : kepatuhan
Role     : Super Admin
```

> **Catatan:** Ganti password default setelah aplikasi digunakan pada lingkungan sebenarnya.

---

# 🧪 Testing

Laravel menyediakan PHPUnit untuk menjalankan pengujian.

Jalankan:

```bash
php artisan test
```

atau:

```bash
composer test
```

---

# 🛠️ Perintah Artisan yang Berguna

Membersihkan cache:

```bash
php artisan optimize:clear
```

Menjalankan migration:

```bash
php artisan migrate
```

Rollback migration:

```bash
php artisan migrate:rollback
```

Menjalankan seeder:

```bash
php artisan db:seed
```

Melihat daftar route:

```bash
php artisan route:list
```

Membersihkan cache konfigurasi:

```bash
php artisan config:clear
```

Membersihkan cache route:

```bash
php artisan route:clear
```

---

# 📌 Pengembangan Sistem

Aplikasi menggunakan pola arsitektur Laravel dengan pembagian utama:

```text
Route
  ↓
Controller
  ↓
Model
  ↓
Database
  ↓
View
```

Contoh proses Job Order:

```text
User
 │
 ▼
JobOrderController
 │
 ▼
JobOrder Model
 │
 ├── JobOrderTool
 │       └── Tool
 │
 └── JobOrderResponsible
         └── User
 │
 ▼
Database
 │
 ▼
Blade View
```

Untuk Form KP, setiap jenis peralatan memiliki controller, model, migration, seeder, dan view masing-masing sehingga struktur modul lebih terorganisasi.

---

# 🔒 Keamanan

Aplikasi menerapkan beberapa mekanisme keamanan Laravel, antara lain:

* Authentication
* Authorization berbasis role
* Permission management
* CSRF Protection
* Request Validation
* Password Hashing
* Session Authentication
* Eloquent ORM
* Route Middleware

Hak akses halaman dibatasi menggunakan middleware role seperti:

```php
role:Super Admin
```

atau kombinasi role:

```php
role:Super Admin|Admin Riksa Uji|Tim Riksa Uji|Penyusun LHP
```

---

# 📈 Tujuan Sistem

Aplikasi Asteria Riksa Uji dikembangkan untuk:

1. Memusatkan pengelolaan data Riksa Uji.
2. Mempermudah pembuatan dan pengelolaan Job Order.
3. Mengelola data alat yang akan diperiksa.
4. Mengatur penugasan Tim Riksa Uji.
5. Mendigitalisasi Form KP.
6. Memantau status pemeriksaan.
7. Mengurangi pencatatan manual.
8. Membatasi akses berdasarkan role pengguna.
9. Menyediakan data yang lebih terstruktur untuk proses pelaporan.

---

# 🔮 Pengembangan Selanjutnya

Beberapa pengembangan yang dapat ditambahkan:

* Dashboard statistik yang lebih lengkap
* Notifikasi Job Order
* Export data ke PDF/Excel
* Upload dokumen pendukung
* Audit log aktivitas pengguna
* Riwayat pemeriksaan alat
* Sistem penyusunan LHP
* Digital signature
* Approval workflow
* REST API
* Integrasi notifikasi WhatsApp/email
* Reporting dan analytics

---

# 👨‍💻 Development

Project ini dikembangkan menggunakan:

**Laravel 12 + PHP 8.2 + MySQL + Blade + Tailwind CSS + Alpine.js + Vite**

Struktur aplikasi dirancang secara modular agar pengembangan jenis Form KP baru dapat dilakukan tanpa mengubah keseluruhan sistem.

---

## 📄 License

Project ini dikembangkan untuk kebutuhan internal/akademik dan pengembangan sistem **PT. Asteria Riksa Indonesia**.

---

## ⭐ Asteria Riksa Uji

> **Digitalisasi proses Riksa Uji untuk pengelolaan pemeriksaan yang lebih terstruktur, terintegrasi, dan efisien.**
