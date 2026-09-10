<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * PENTING: Anda menyebutkan tabel `articles` sudah ada dan dipakai.
 * Kalau app/Models/Article.php SUDAH ADA dan berfungsi, JANGAN timpa
 * dengan file ini — cukup pastikan $fillable di model Anda sudah
 * mencakup kolom yang dipakai form Admin (title, content, image, dst).
 *
 * File ini hanya untuk jaga-jaga kalau modelnya belum ada sama sekali.
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
    ];
}
