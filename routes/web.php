<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Public\ArticleController as PublicArticleController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ProductController as PublicProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LOGIN / LOGOUT — manual, tanpa Breeze/Fortify
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| PUBLIC — tidak butuh login
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/produk', [PublicProductController::class, 'index'])->name('products.katalog');
Route::get('/produk/{product}', [PublicProductController::class, 'show'])->name('products.show');

Route::get('/artikel', [PublicArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{article}', [PublicArticleController::class, 'show'])->name('articles.show');

Route::get('/kontak', [ContactController::class, 'index'])->name('contact');

/*
|--------------------------------------------------------------------------
| ADMIN — wajib login
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('admin')->group(function () {

    // Nama route TETAP 'admin.dashboard' — sudah dipakai di
    // dashboard.blade.php, create.blade.php, edit.blade.php.
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // PENTING: nama route resource ini SENGAJA TIDAK diberi prefix
    // 'admin.' (jadi 'products.index', bukan 'admin.products.index'),
    // karena dashboard.blade.php / create.blade.php / edit.blade.php
    // yang sudah ada memanggil route('products.index'), route('products.create'),
    // dst. TANPA prefix admin. Kalau prefix ditambahkan di sini, semua
    // link di ketiga file itu akan error "Route [products.index] not defined".
    //
    // ->except(['show']) karena halaman detail produk sudah publik
    // lewat route('products.show') di atas.
    Route::resource('products', AdminProductController::class)->except(['show']);

    // Artikel belum pernah punya konvensi nama route sebelumnya (fitur
    // baru), jadi di sini AMAN dipakai prefix 'admin.' yang konsisten:
    // admin.articles.index, admin.articles.create, dst.
    Route::resource('articles', AdminArticleController::class)
        ->except(['show'])
        ->names([
            'index' => 'admin.articles.index',
            'create' => 'admin.articles.create',
            'store' => 'admin.articles.store',
            'edit' => 'admin.articles.edit',
            'update' => 'admin.articles.update',
            'destroy' => 'admin.articles.destroy',
        ]);
});

/*
|--------------------------------------------------------------------------
| CATATAN AUTENTIKASI
|--------------------------------------------------------------------------
| Login/logout di project ini TIDAK pakai Breeze/Fortify — dibuat manual
| lewat App\Http\Controllers\Auth\LoginController di atas, langsung
| memakai Auth facade bawaan Laravel terhadap tabel `users` existing.
|
| JANGAN menambahkan baris:
|     require __DIR__.'/auth.php';
| kecuali Anda benar-benar membuat file routes/auth.php sendiri — file
| itu tidak dipakai di sini.
*/
