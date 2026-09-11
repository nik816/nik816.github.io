<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

/**
 * PENTING: kalau app/Models/Product.php Anda SUDAH ADA dan berfungsi,
 * JANGAN timpa file ini begitu saja — cukup pastikan $fillable Anda
 * sudah mencakup 'category' dan 'image'.
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

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}