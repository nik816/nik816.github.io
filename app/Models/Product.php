<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * PENTING: kalau app/Models/Product.php Anda SUDAH ADA dan berfungsi,
 * JANGAN timpa file ini begitu saja — cukup pastikan $fillable Anda
 * sudah mencakup 'category' dan 'image' (dua kolom baru dari migration
 * 2026_08_20_000001_add_category_and_image_to_products_table.php).
 *
 * Kolom yang BENAR-BENAR ada di tabel products setelah migration baru:
 * id, name, category, price, stock, description, image, created_at, updated_at
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'stock',
        'description',
        'image',
    ];
}
