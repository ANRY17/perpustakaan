<h1 align="center">Perpustakaan</h1>

## Tech Stack

- **[Laravel 10](https://laravel.com/)**
- **[Bootstrap 5.3](https://getbootstrap.com)**

## Prerequisites
- PHP ^8.1
- Composer ^2.2.0
- NPM

## Setup Guide

- Clone project.
```bash
git clone https://github.com/ANRY17/perpustakaan.git
```
- Setup database pada komputer anda, lalu masukkan kredensial-kredensialnya ke file `.env`.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=perpus_db
DB_USERNAME=root
DB_PASSWORD=
```
- Install dependency.
```bash
composer install
npm install
```
- Copy .env.
```bash
copy .env.example .env
```
- Generate app key.
```bash
php artisan key:generate
```
- Link storage untuk file upload.
```bash
php artisan storage:link
```
- Migrate database.
```bash
# Tanpa seeder
php artisan migrate

# Dengan seeder (data)
php artisan migrate --seed
```
- Jalankan aplikasi.
```bash
php artisan serve
```
> Buka terminal baru, lalu jalankan.
```bash
npm run dev
```
