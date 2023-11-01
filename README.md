# DriveRent

Aplikasi penyewaan kendaraan alat berat yang dibangun menggunakan framework laravel 10.0.

## Fitur aplikasi

-   Terdapat 3 user (admin, approver1, approver2)
-   Admin dapat menginputkan pemesanan kendaraan dan menentukan driver serta
    pihak yang menyetujui pemesanan
-   Persetujuan dilakukan berjenjang dengan 2 level approver
-   Pihak yang menyetujui dapat melakukan persetujuan melalui aplikasi
-   Terdapat dashboard yang menampilkan grafik pemakaian kendaraan
-   Terdapat laporan periodik pemesanan kendaraan yang dapat di export (Excel)

## Technology Stack

-   Laravel 10
-   PHP 8.1.9
-   MySql 5.1.0

## Installation

Buka file directory laravel-rentApp menggunakan code editor
Download dependensi dengan menjalankan perintah:

```sh
composer install
```

Renama file .env.example menjadi .env
Set up .env seoerti berikut
`sh
    # Config to database
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=rent_drive
    DB_USERNAME=root
    DB_PASSWORD=
    `

Buat database mysql dengan nama rent_drive

Setelah database dibuat, jalankan perintah berikut pada terminal

```sh
php artisan migrate
php artisan db:seed
php artisan db:seed --class=UnitSeeder
php artisan db:seed --class=DriverSeeder
php artisan db:seed --class=RentSeeder
php artisan key:generate
```

## Running App

Setelah migrasi database selesai dan berhasil jalankan Apache dan Mysql server menggunkan XAMPP atau Laragon.

Terakhir, jalankan laravel server menggunakan perintah:

```sh
php artisan serve
```

Arahkan dan jalankan server pada alamat `http://127.0.0.1:8000/login` untuk melakukan login.

List Email dan Password untuk login:
Login sebagai Admin
email: admin@mail.com
password: 123

Login sebagai Approver 1
email: approver1@mail.com
password: 123

Login sebagai Approver 1
email: approver1@mail.com
password: 123

Tampilan halaman login

![alt text](https://github.com/rochmadqolim/laravel-rentApp/blob/main/public/login.jpg?raw=true)

Tampilan halaman dashboard

![alt text](https://github.com/rochmadqolim/laravel-rentApp/blob/main/public/dashboard.jpg?raw=true)

Tampilan untuk mengexport dan mendownload data excel

![alt text](https://github.com/rochmadqolim/laravel-rentApp/blob/main/public/logs.jpg?raw=true)

Untuk update aplikasi dapat melakukan pull atau clone pada repository:

```sh
https://github.com/rochmadqolim/laravel-rentApp.git
```
