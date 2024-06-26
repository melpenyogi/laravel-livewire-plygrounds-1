# 💡 Laravel Playground

## Project Overview
Project ini dibuat untuk mempelajari dan mendalami pengembangan aplikasi web menggunakan dengan konsep TALLSTACK.
Dalam satu repository ini terdapat 2 pola pengembangan, yaitu : 
<ul>
    <li>Pengembangan menggunakan Laravel (Laravel, Bootstrap 5.3)</li>
    <li>Pengembangan menggunakan TALLSTACK (Tailwind, Alpine.js, Laravel dan Livewire)</li>
</ul>

## Project Screenshots

Table
![country](https://github.com/janzenfaidiban/laravel-livewire-plygrounds/assets/45115034/965e442f-7cfa-4b2b-80b3-a62932361e67)

Edit
![country-edit](https://github.com/janzenfaidiban/laravel-livewire-plygrounds/assets/45115034/d722bfb2-472c-4597-aa43-cb8ddda6e890)

Show Modal
![modal](https://github.com/janzenfaidiban/laravel-livewire-plygrounds/assets/45115034/4704a612-400b-4feb-9b05-e25f79b9e5f2)

Delete Modal 
![modal-delete](https://github.com/janzenfaidiban/laravel-livewire-plygrounds/assets/45115034/f7acd008-4b81-4f19-8d88-4676970b56b6)

## User story

Biasa ditulis oleh project manager yang tulis tapi bisa juga ditulis oleh developer

Aturan dan penjelasan membuat story Point oleh developer
<ol>
    <li>estimasi dalam beberapa menit</li>
    <li>estimasi dalam beberapa jam</li>
    <li>estimasi dalam 1 hari</li>
    <li>estimasi dalam beberapa hari</li>
</ol>

## 📙 Installation

Cara mendownload project melalui GitHub ke local repository.

### Download project
```
git clone https://github.com/janzenfaidiban/laravel-livewire-plygrounds.git
```

### Composer Install

```
composer install
```

### Setup .env

Copy file ```.env.example``` dan modifikasi nama database
```
cp .env.example .env
```

Membuat key baru 
```
php artisan key:generate
```


### Do the migration & seeder

```
php artisan migrate:fresh --seed
```

### Install Laravel Debugbar

Source & documentations
https://github.com/barryvdh/laravel-debugbar

Installation using composer

```
composer require barryvdh/laravel-debugbar --dev
```

# 🎯 TODOS

Daftar setiap tugas yang harus dilakukan dan informasi folder / file yang perlu diakses oleh para pengembang.

### 📁 Models

Model untuk mengolah fungsi data pada project laravel

```
.
├── app
│   ├── Models
|   |    ├── City.php ✅
|   |    ├── Country.php ✅
|   |    ├── Shop.php ✅
|   |    ├── User.php ✅
│   |    └── ...
```

### 📁 Migration

File migrasi untuk membuat table pada database

```
.
├── database
│   ├── migrations
|   |    ├── 2014_10_12_000000_create_users_table.php ✅
|   |    ├── 22024_03_17_025921_create_countries_table.php ✅
|   |    ├── 2024_03_17_031854_create_cities_table.php ✅
|   |    ├── 2024_03_17_032420_create_shops_table.php ✅
│   |    └── ...
│   ├── seeders
|   |    ├── CountrySeeder.php ✅
|   |    ├── CitySeeder.php ✅
|   |    ├── ShopSeeder.php ✅
|   |    ├── DatabaseSeeder.php ✅
│   |    └── ...
```

## ⭐ LARAVEL

### 📁 Controllers

File controller untuk project laravel

```
.
├── app
|   ├── Http
|   |   ├── Controllers
|   |   |   ├── CountryController.php⏳
|   |   |   ├── CityController.php⏳ 
|   |   |   ├── ShopController.php⏳
│   |   |   └── ...
```

### 📁 Views

Halaman blade untuk project laravel

```
.
├── resources
|   ├── views
|   |   ├── layouts
|   |   |   ├── app.blade.php ✅ 
|   |   ├── country
|   |   |   ├── index.blade.php✅ 
|   |   |   ├── show.blade.php✅ 
|   |   |   ├── create.blade.php✅ 
|   |   |   ├── edit.blade.php✅
│   |   |   └── ...
|   |   ├── city
|   |   |   ├── index.blade.php ✅ 
|   |   |   ├── create.blade.php ✅ 
|   |   |   ├── show.blade.php ✅ 
|   |   |   ├── edit.blade.php ✅ 
│   |   |   └── ...
|   |   ├── shop
|   |   |   ├── index.blade.php ✅ 
|   |   |   ├── create.blade.php ✅ 
|   |   |   ├── show.blade.php ✅ 
|   |   |   ├── edit.blade.php ✅ 
│   |   |   └── ...
```

### 📁 Routes

File & folder routes untuk project laravel

```
.
├── routes
|   ├── web.php
|   ├── laravel.php ✅
|   ├── laravel
|   |   ├── country.php ✅
|   |   ├── city.php ✅
|   |   ├── shop.php ✅
│   |   └── ...
```

## ⭐ LIVEWIRE

### 📙 Installation

Menginstall NPM packages
```
npm install
```

Menjalankan development project
```
npm run dev
```

Apabila terjadi error pada saat menjalankan ```npm run dev```, bisa dikarenakan oleh beberapa hal berikut : 
<ul>
    <li>sistem operasi yang digunakan oleh para developer berbeda, sehingga packages yang terinstal juga berbeda. Yang perlu dilakukan adalah menghapus folder <b>node_modules</b> dan file <b>package-lock.json</b>.</li>
    <li>Jalankan kembali perintah <code>npm install</code> </li>
    <li>Jalankan juga perintah <code>php artisan optimize:clear</code></li>
    <li>Setelah itu coba lagi jalankan <code>npm run dev</code> </li>
</ul>

### 📁 Directories

Folder dan file yang digunakan untuk project livewire

```
.
├── app
│   ├── Livewire
|   |    ├── Country ⌛
|   |    |   ├── Index.php ✅
│   |    |   └── From.php ✅
|   |    |   └── CountryRecord.php✅
|   |    ├── City ⌛
|   |    |   └── CityRecord.php✅
|   |    |   ├── form.php ✅
|   |    |   └── Index.php ✅
|   |    ├── Shop ⌛
|   |    |   ├── Index.php ✅
│   |    |   └── From.php ✅
|   |    |   └── ShopRecord.php✅
│   └── ...
├── rosources
│   ├── views
│   |   ├── components
|   |   |   ├── layouts ⌛
|   |   |   |   ├── app.blade.php ⌛
|   |   |   ├── alert.blade.php ✅
|   |   |   ├── modalAlpine.blade.php ✅
│   |   ├── livewire
|   |   |   ├── city ⌛
|   |   |   |   ├── city-record.blade.php ✅
|   |   |   |   ├── form.blade.php ✅
|   |   |   |   ├── index.blade.php ✅
|   |   |   ├── country ⌛
|   |   |   |   ├── form.blade.php ✅
|   |   |   |   ├── index.blade.php ✅
|   |   |   |   ├── shop-record.blade.php ✅
|   |   |   ├── shop ⌛
|   |   |   |   ├── form.blade.php ✅
|   |   |   |   ├── index.blade.php ✅
|   |   |   |   ├── shop-record.blade.php ✅
│   └── ...
├── routes
|   ├── livewire.php ⌛
└── README.md
```

# 📚 GIT COMMANDS

Membuat branch baru di local
```
git checkout -m <branch-name>
```
atau
```
git switch -c <branch-name>
```

Verifikasi branch yang sudah dibuat dan branch yang ada di remote
```
git branch -a
```

Push branch baru dari local ke remote
```
git push origin <branch-name>
```
atau
```
git push --set-upstream origin <branch-name>
```

Menggabungkan perubahan dari branch <b>main</b> ke branch <b>dev-name</b>. 
Pindah dulu ke branch ```dev-name```
```
git checkout dev-name
```
Gabungkan perubahan dari branch main menggunakan perintah ```merge```
```
git merge main
```
Cara untuk menghapus branch
```
git branch --delete <branchname>
```


# 📚 LEARNING RESOURCES

## Dokumentasi Livewire

Cara instal livewire lihat di sini
https://livewire.laravel.com/docs/installation

Install livewire
```
composer require livewire/livewire
```

Publikasi konfigurasi livewire gunakan perintah berikut
```
php artisan livewire:publish --config
```

## Dokumentasi Tailwind CSS

Cara menginstal tailwind css, kunjungi di sini
https://tailwindcss.com/docs/guides/laravel


```
npm install -D tailwindcss postcss autoprefixer
```

```
npx tailwindcss init -p
```

Videos, articles, and urls from any other platforms you can mention bellow here.

## Laravel Collective

Tutorial menggunakan Laravel Collective untuk menerapkan Form & HTML

Source : https://laravelcollective.com/docs/6.x/html

Menginstall package laravelcollective/html
```
composer require laravelcollective/html
```

## Bootstrap Alerts

Menambahkan packaga bootstrap alert
```
composer require eelcol/laravel-bootstrap-alerts
```

Source : https://github.com/eelcol/laravel-bootstrap-alerts

## Laravel Eloquent: Deeper Relationships with One Query

Tutorial video by Laravel Daily
https://youtu.be/5s-_SnVl-1g?si=rz_TAErEmOtUR2JS


## Perbedaan hasMany dan belongsToMany Eloquent Laravel

Tutorial untuk memahami pembuatan relasi pada project laravel
https://medium.com/@barutahucoding/perbedaan-hasmany-dan-belongstomany-eloquent-laravel-6236238f243e

## Daisy UI for Tailwind CSS

Learn from documentation
https://daisyui.com/docs

Install daisyUI:
```
npm i -D daisyui@latest
```

## Aturan / cara commit 

Contoh menulis commit sesuai dengan status 

Jika ada pesan atau info baru yang ditambahan atau juga perubahan terbaru di project
UPDATE: ...

Jika ada error yang sudah diselesaikan atau jika ada error yang perlu dibantu oleh developer lain
FIX : ...

Jika ada fitur baru yang ditambahkan 
FEAT : ...
