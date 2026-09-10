<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Semua method di sini hanya bisa diakses user yang sudah login.
 * Middleware 'auth' didaftarkan di routes/web.php pada grup /admin.
 */
class ProductController extends Controller
{
    /**
     * Tabel Kelola Produk (admin) — sebelumnya route ini secara tidak
     * sengaja merender view publik tanpa tombol Edit/Hapus. Sekarang
     * diarahkan ke admin.products.index yang benar.
     * GET /admin/products
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Form tambah produk.
     * GET /admin/products/create
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Simpan produk baru.
     * POST /admin/products
     */
    public function store(Request $request)
    {
        $validated = $this->validateProduct($request);
        $validated['image'] = $this->storeImage($request);

        Product::create($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Form edit produk.
     * GET /admin/products/{product}/edit
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Perbarui produk.
     * PUT /admin/products/{product}
     */
    public function update(Request $request, Product $product)
    {
        $validated = $this->validateProduct($request);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $this->storeImage($request);
        } else {
            unset($validated['image']);
        }

        $product->update($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Hapus produk. Fitur ini yang sebelumnya hilang dari seluruh
     * tampilan admin — dikembalikan di sini dan di view index/edit.
     * DELETE /admin/products/{product}
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk berhasil dihapus!');
    }

    private function validateProduct(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    }

    private function storeImage(Request $request): ?string
    {
        return $request->hasFile('image')
            ? $request->file('image')->store('products', 'public')
            : null;
    }
}
