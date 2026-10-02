<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Halaman Katalog / Produk publik.
     * GET /produk
     */
    public function index()
    {
        $search = trim((string) request('search'));
        $category = request('category');
        $sort = request('sort', 'terbaru');

        $query = Product::query()
            ->when($search !== '', function ($q) use ($search) {
                $q->where(function ($w) use ($search) {
                    $w->where('name', 'like', "%{$search}%")
                      ->orWhere('category', 'like', "%{$search}%");
                });
            })
            ->when($category, fn ($q, $cat) => $q->where('category', $cat));

        switch ($sort) {
            case 'termurah': $query->orderBy('price'); break;
            case 'termahal': $query->orderByDesc('price'); break;
            case 'nama':     $query->orderBy('name'); break;
            default:
                $sort = 'terbaru';
                $query->latest();
        }

        $products = $query->paginate(12)->withQueryString();

        $categories = Product::query()
            ->whereNotNull('category')->where('category', '!=', '')
            ->distinct()->orderBy('category')->pluck('category');

        return view('public.produk.index', compact('products', 'search', 'category', 'sort', 'categories'));
    }

    public function show(Product $product)
    {
        // Ambil ulasan yang sudah disetujui
        $reviews = $product->reviews()
            ->where('is_approved', true)
            ->latest()
            ->paginate(6, ['*'], 'reviews_page')
            ->withQueryString();

        // Hitung jumlah ulasan
        $reviewCount = $product->reviews()
            ->where('is_approved', true)
            ->count();

        // Hitung rata-rata rating
        $averageRating = $reviewCount > 0
            ? round(
                (float) $product->reviews()
                    ->where('is_approved', true)
                    ->avg('rating'),
                1
            )
            : 0;

        // Produk terkait: kategori yang sama, dari data existing
        $related = Product::where('id', '!=', $product->id)
            ->when($product->category, fn ($q, $cat) => $q->where('category', $cat))
            ->latest()
            ->take(4)
            ->get();

        // Jika kategori sama kurang dari 4, lengkapi dengan produk lain yang tersedia
        if ($related->count() < 4) {
            $extra = Product::where('id', '!=', $product->id)
                ->whereNotIn('id', $related->pluck('id'))
                ->latest()
                ->take(4 - $related->count())
                ->get();
            $related = $related->concat($extra);
        }

        return view('public.produk.show', compact(
            'related',
            'product',
            'reviews',
            'reviewCount',
            'averageRating'
        ));
    }
}