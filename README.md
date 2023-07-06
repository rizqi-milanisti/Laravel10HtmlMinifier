
# Laravel 10 Html Minifier
Adalah Paket simpel untuk minify HTML, Css Style, dan Javascript sebelum dirender ke browser untuk aplikasi Laravel 10 anda.

Alat ini hanya bekerja jika output yang diberikan adalah bentuk struktur html yang valid meliputi tag html, head dan body. contohnya

- Html yang valid (akan diproses dan diminify)

```html
<html>
   <head>
      <!-- head -->
   </head>
   <body>
      <!-- body -->
   </body>
</html>
```

- Html yang tidak valid (tidak diminify)

```html
< html>
   <head>
      <!-- head -->
   </head>
   <body>
      <!-- body -->
   </body>
</ html>

atau

<html>
   <head>
      <!-- head -->
   </head>
</html>
```

## Installasi

> **Membutuhkan:**
- **[PHP 8.1+](https://php.net/releases/)**
- **[Laravel 10.0+](https://github.com/laravel/laravel)**

## Tahap pertama anda bisa menginstall paket ini dengan [Composer 2x](https://getcomposer.org/download/)

```sh
composer require rizqimilanisti/laravelminifier
```

## Publish konfigurasi file

```sh
php artisan vendor:publish --provider="rizqimilanisti\LaravelMinifier\MinifierServiceProvider"
```

## Jangan lupa untuk mendaftarkan ke Global Middleware

[\rizqimilanisti\LaravelMinifier\Middleware\MinifyHtml::class](src/Middleware/MinifyHtml.php) dan Middleware lainnya harus didaftarkan ke kernel jika diperlukan, contoh :

```php

// file : app/Http/Karnel.php

protected $middleware = [
    ....
    \rizqimilanisti\LaravelMinifier\Middleware\MinifyHtml::class,         // middleware untuk minify html
    \rizqimilanisti\LaravelMinifier\Middleware\MinifyCss::class,         // middleware untuk minify css style
    \rizqimilanisti\LaravelMinifier\Middleware\MinifyJavascript::class, // middleware untuk minify kode javascript
];
```

## Lisensi

[MIT](LICENSE) (MIT)
