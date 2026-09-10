<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Halaman Katalog / Produk publik.
     * GET /produk  (atau /katalog, sesuaikan dengan URL yang Anda pakai)
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
        return view('public.produk.show', compact('product'));
    }
}
