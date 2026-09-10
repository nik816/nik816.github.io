<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - cuannih</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">⚡ cuannih</h1>
            <a href="/" class="bg-white text-blue-600 px-4 py-2 rounded font-semibold text-sm hover:bg-gray-100 transition">← Kembali ke Beranda</a>
        </div>
    </nav>

    <!-- Detail Produk Section -->
    <main class="container mx-auto px-4 py-12 max-w-4xl">
        <div class="bg-white rounded-2xl shadow-lg border p-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            
            <!-- Ilustrasi / Gambar Produk -->
            <div class="bg-gray-100 rounded-xl h-72 flex items-center justify-center text-6xl">
                📦
            </div>

            <!-- Informasi Produk -->
            <div>
                <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">{{ $product->category }}</span>
                <h2 class="text-3xl font-bold mt-3 mb-2">{{ $product->name }}</h2>
                <p class="text-blue-600 font-extrabold text-2xl mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                
                <h4 class="font-semibold text-gray-700 mb-1">Deskripsi Produk:</h4>
                <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                    {{ $product->description }}
                </p>

                @if(!empty($product->specs_array))
                    <h4 class="font-semibold text-gray-700 mb-2">Spesifikasi:</h4>
                    <ul class="text-gray-600 text-sm list-disc list-inside mb-8 space-y-1">
                        @foreach($product->specs_array as $spec)
                            <li>{{ trim($spec) }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="flex gap-4">
                    <a href="/#kontak" class="flex-1 bg-blue-600 text-white text-center font-semibold py-3 rounded-xl hover:bg-blue-700 transition shadow">Beli Sekarang via Kontak</a>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-6 mt-12">
        <p>&copy; 2026 cuannih. All rights reserved.</p>
    </footer>

</body>
</html>