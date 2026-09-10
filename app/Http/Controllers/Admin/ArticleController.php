<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Semua method di sini hanya bisa diakses user yang sudah login.
 * Middleware 'auth' didaftarkan di routes/web.php pada grup /admin.
 *
 * CATATAN: field yang divalidasi (title, content, image) mengikuti asumsi
 * umum tabel artikel. Sesuaikan validateArticle() di bawah kalau kolom
 * tabel `articles` Anda berbeda (mis. ada `slug`, `excerpt`, `is_published`).
 */
class ArticleController extends Controller
{
    /**
     * Tabel Kelola Artikel (admin).
     * GET /admin/articles
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Form tambah artikel.
     * GET /admin/articles/create
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Simpan artikel baru.
     * POST /admin/articles
     */
    public function store(Request $request)
    {
        $validated = $this->validateArticle($request);
        $validated['image'] = $this->storeImage($request);

        Article::create($validated);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Form edit artikel.
     * GET /admin/articles/{article}/edit
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Perbarui artikel.
     * PUT /admin/articles/{article}
     */
    public function update(Request $request, Article $article)
    {
        $validated = $this->validateArticle($request);

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $validated['image'] = $this->storeImage($request);
        } else {
            unset($validated['image']);
        }

        $article->update($validated);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Hapus artikel.
     * DELETE /admin/articles/{article}
     */
    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }

    private function validateArticle(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    }

    private function storeImage(Request $request): ?string
    {
        return $request->hasFile('image')
            ? $request->file('image')->store('articles', 'public')
            : null;
    }
}
