# Laravel Playground

## Project Overview

<img src="public/images/country.png">

## Installation

### Download project
```
git clone https://github.com/janzenfaidiban/laravel-livewire-plygrounds.git
```

### Composer Install

```
composer install
```

### Setup .env

Copy the ```.env.example``` file

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

# TODOS

## GENERAL

### Models


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

### Migration


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
|   |    ├── CitySeeder.php ✅
|   |    ├── CountrySeeder.php ✅
|   |    ├── ShopSeeder.php ✅
|   |    ├── DatabaseSeeder.php ✅
│   |    └── ...
```

## LARAVEL

## Models

### Migrations

### Controllers


```
.
├── app
|   ├── Http
|   |   ├── Controllers
|   |   |   ├── CityController.php⏳ 
|   |   |   ├── CountryController.php⏳
|   |   |   ├── ShopController.php⏳
│   |   |   └── ...
```

### Views

<ul>
    <li>country</li>
    <ul>
        <li>✅ index</li>
        <li>⏳ show</li>
        <li>⏳ create</li>
        <li>⏳ edit</li>
        <li>⏳ modal > delete</li>
    </ul>
    <li>city</li>
    <ul>
        <li>✅ index</li>
        <li>⏳ show</li>
        <li>⏳ create</li>
        <li>⏳ edit</li>
        <li>⏳ modal > delete</li>
    </ul>
    <li>shop</li>
    <ul>
        <li>✅ index</li>
        <li>⏳ show</li>
        <li>⏳ create</li>
        <li>⏳ edit</li>
        <li>⏳ modal > delete</li>
    </ul>
</ul>

## LIVEWIRE

### Directories

```
.
├── app
│   ├── Livewire
|   |    ├── Country ✅
|   |    |   ├── index.php ⌛
│   |    |   └── ...
|   |    ├── City ⌛
|   |    |   ├── index.php ⌛
│   |    |   └── ...
|   |    ├── Shop ⌛
|   |    |   ├── index.php ⌛
│   |    |   └── ...
│   └── ...
├── rosources
│   ├── views
│   |   ├── components ✅
|   |   |   ├── layouts ✅
|   |   |   |   ├── app.blade.php ⌛
|   |   |   ├── modalAlpine.blade.php ⌛
│   |   ├── livewire
|   |   |   ├── country ✅
|   |   |   |   ├── index.blade.php ⌛
|   |   |   ├── city ⌛
|   |   |   |   ├── index.blade.php ⌛
|   |   |   ├── shop ⌛
|   |   |   |   ├── index.blade.php ⌛
│   └── ...
├── routes
|   ├── livewire.php ✅
└── README.md
```

### routes

# Learning Sources

Vieos, articles, and urls from any other platforms you can mention bellow here.

## Laravel Eloquent: Deeper Relationships with One Query

Tutorial video by Laravel Daily
https://youtu.be/5s-_SnVl-1g?si=rz_TAErEmOtUR2JS