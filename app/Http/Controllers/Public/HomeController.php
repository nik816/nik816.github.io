<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Beranda publik.
     * GET /
     *
     * PENTING: method ini hanya mengambil data dan mengarahkan ke view
     * Home yang SUDAH ADA. Ganti nama view di baris `return view(...)`
     * di bawah sesuai lokasi file Home Anda saat ini:
     *   - Jika Home Anda masih di resources/views/welcome.blade.php,
     *     ganti jadi: return view('welcome', ...);
     *   - Jika sudah dipindah ke resources/views/public/home.blade.php,
     *     biarkan seperti di bawah ini.
     */
    public function index()
    {
        $search = request('search');

        $products = Product::when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('category', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(9)
            ->withQueryString();

        return view('public.home', compact('products', 'search'));
    }
}
