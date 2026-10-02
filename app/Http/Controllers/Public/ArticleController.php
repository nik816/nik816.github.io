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
        $search = trim((string) request('search'));

        $articles = Article::query()
            ->when($search !== '', function ($q) use ($search) {
                $q->where(function ($w) use ($search) {
                    $w->where('title', 'like', "%{$search}%")
                      ->orWhere('content', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(9)
            ->withQueryString();

        return view('public.articles.index', compact('articles', 'search'));
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
        $related = Article::where('id', '!=', $article->id)->latest()->take(3)->get();
        $prev = Article::where('id', '<', $article->id)->orderByDesc('id')->first();
        $next = Article::where('id', '>', $article->id)->orderBy('id')->first();

        return view('public.articles.show', compact('article', 'related', 'prev', 'next'));
    }
}
