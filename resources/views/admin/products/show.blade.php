<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Penting Ngawe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800">

    <!-- Navbar Sederhana / Header -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-30">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ url('/') }}" class="font-bold text-lg text-blue-600 flex items-center space-x-2">
                <span>⚡</span><span>Penting Ngawe</span>
            </a>
            <a href="{{ url('/') }}" class="text-xs font-semibold text-slate-600 hover:text-slate-900 bg-slate-100 px-3.5 py-2 rounded-xl transition">&larr; Kembali ke Katalog</a>
        </div>
    </header>

    <!-- Main Content Detail Produk -->
    <main class="max-w-6xl mx-auto px-6 py-10">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-8 md:p-12 grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            
            <!-- Kolom Foto Produk / Placeholder -->
            <div class="w-full">
                @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-80 md:h-96 object-cover rounded-2xl shadow-sm border border-slate-100">
                @else
                    <div class="w-full h-80 md:h-96 bg-slate-50 rounded-2xl border-2 border-dashed border-slate-200 flex flex-col items-center justify-center text-slate-400">
                        <span class="text-5xl mb-2">📦</span>
                        <span class="text-sm font-bold">No Image Available</span>
                    </div>
                @endif
            </div>

            <!-- Kolom Informasi Produk -->
            <div class="flex flex-col h-full justify-between space-y-6">
                <div>
                    <!-- Kategori Badge -->
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-600 mb-4 tracking-wide uppercase">
                        {{ $product->category }}
                    </span>

                    <!-- Nama Produk -->
                    <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-3 leading-snug">
                        {{ $product->name }}
                    </h1>

                    <!-- Harga -->
                    <div class="text-2xl md:text-3xl font-black text-blue-600 mb-6">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </div>

                    <!-- Informasi Stok -->
                    <div class="flex items-center space-x-2 mb-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Status Stok:</span>
                        @if($product->stock > 0)
                            <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-50 text-emerald-600">Tersedia ({{ $product->stock }})</span>
                        @else
                            <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-rose-50 text-rose-600">Habis</span>
                        @endif
                    </div>

                    <!-- Tombol Beli / Aksi -->
                    <div>
                        <a href="https://wa.me/?text={{ urlencode('Halo, saya ingin memesan produk: ' . $product->name) }}" target="_blank" class="w-full block text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-6 rounded-2xl shadow-lg shadow-blue-500/20 transition text-sm">
                            Beli / Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bagian Deskripsi Produk di Bawah -->
        <div class="mt-8 bg-white rounded-3xl shadow-sm border border-slate-200 p-8 md:p-10">
            <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-400 mb-4">Deskripsi Produk</h3>
            <div class="text-sm text-slate-600 leading-relaxed whitespace-pre-line">
                {{ $product->description ?? 'Tidak ada deskripsi tambahan untuk produk ini.' }}
            </div>
        </div>
    </main>

</body>
</html>