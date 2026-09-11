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
        $search = request('search');

        $products = Product::when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('category', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('public.produk.index', compact('products', 'search'));
    }

    /**
     * Halaman Detail Produk publik.
     * GET /produk/{product}
     */
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

        return view('public.produk.show', compact(
            'product',
            'reviews',
            'reviewCount',
            'averageRating'
        ));
    }
}