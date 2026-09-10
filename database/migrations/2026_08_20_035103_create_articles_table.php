<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Tabel articles TIDAK PERNAH ADA di migration existing Anda — ini
 * migration BARU (create, bukan mengubah apa pun yang lama).
 * Kolom dibuat minimal: title, content, image (nullable). Kalau nanti
 * butuh slug atau published_at untuk fitur draft/publish, itu bisa
 * ditambahkan lewat migration terpisah lagi, additive, tanpa mengubah ini.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
