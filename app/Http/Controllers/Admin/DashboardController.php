<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DashboardController extends Controller
{
    /**
     * Dashboard admin (dilindungi middleware 'auth').
     * GET /admin
     *
     * Menyiapkan SEMUA variabel yang dipakai dashboard.blade.php:
     * $totalProducts, $totalStock, $totalAssetValue, $lowStockCount,
     * $lowStockItems, $latestProducts.
     */
    public function index()
    {
        $lowStockThreshold = 5;

        $totalProducts = Product::count();
        $totalStock = Product::sum('stock');
        $totalAssetValue = Product::selectRaw('SUM(price * stock) as total')->value('total') ?? 0;

        $lowStockItems = Product::where('stock', '<=', $lowStockThreshold)->orderBy('stock')->get();
        $lowStockCount = $lowStockItems->count();

        $latestProducts = Product::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalStock',
            'totalAssetValue',
            'lowStockCount',
            'lowStockItems',
            'latestProducts'
        ));
    }
}
