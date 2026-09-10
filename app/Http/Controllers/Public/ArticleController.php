<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Halaman daftar Artikel publik.
     * GET /artikel
     *
     * CATATAN: kolom yang dipakai (title, dsb.) mengikuti asumsi umum.
     * Sesuaikan nama kolom di bawah kalau tabel `articles` Anda berbeda.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(9);

        return view('public.articles.index', compact('articles'));
    }

    /**
     * Halaman Detail Artikel publik.
     * GET /artikel/{article}
     *
     * Route model binding otomatis 404 jika artikel tidak ditemukan.
     * Jika tabel articles Anda pakai kolom `slug` (bukan id) untuk URL,
     * ganti baris route di web.php jadi:
     *   Route::get('/artikel/{article:slug}', ...)
     */
    public function show(Article $article)
    {
        return view('public.articles.show', compact('article'));
    }
}
