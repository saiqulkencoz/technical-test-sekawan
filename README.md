# README.

## Dibuat menggunakan :

- Framework : Laravel 7.x
- Database : MySQL  10.4.14
- XAMPP : v3.2.4

## Cara Instalasi

- Clone repositori menggunakan 'git clone https://github.com/saiqulkencoz/technical-test-sekawan.git'
- Membuat database bernama 'app-test' lalu set username dan password untuk database | tertera pada .env
- Membuka terminal pada direktori project, lalu jalankan 'composer dump-autoload'
- Melakukan migrasi tabel dan data seed dengan 'php artisan migrate:fresh --seed'
- untuk menjalankan, ketikkan pada terminal 'php artisan serve' lalu bisa diakses secara default pada http://127.0.0.1:8080 atau biasanya muncul di terminal

## Daftar User
- user : admin | email : admin@gmail.com | pass: test | manipulasi data kendaraan, request kendaraan, dan melihat grafik. cetak data pengajuan hanya bisa dilakukan admin
- user : Manager A | email : mng_a@gmail.com | pass : test | Menyetujui Request pada tingkat 1 dan melihat grafik
- user : Manager B | email : mng_b@gmail.com | pass : test | Menyetujui Request pada tingkat 2 dan melihat grafik. Request akan masuk pada user ini hanya ketika sudah disetujui tingkat 1.

## Diagram

![diagram](https://user-images.githubusercontent.com/63548313/155472745-86bd702c-edf7-4ac5-9e8f-291115d38b90.png)
