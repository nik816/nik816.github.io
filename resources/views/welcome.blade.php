<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cuannih - Pusat Belanja Berbagai Kebutuhan Terlengkap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }
        .fade-in { animation: fadeIn .5s ease-out both; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navbar -->
    <nav class="bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <h1 class="text-lg font-extrabold flex items-center gap-2 text-slate-900">
                    <span>⚡</span><span>cuannih</span>
                </h1>

                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center gap-1 text-sm font-semibold text-slate-600">
                    <a href="#" class="px-4 py-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Beranda</a>
                    <a href="#katalog" class="px-4 py-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Katalog</a>
                    <a href="#tentang" class="px-4 py-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Tentang Kami</a>
                    <a href="#ulasan" class="px-4 py-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Ulasan</a>
                    <a href="#kontak" class="px-4 py-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Kontak</a>

                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="ml-2 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold transition-colors shadow-sm shadow-blue-600/20">
                            Dashboard Admin
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="ml-2 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold transition-colors shadow-sm shadow-blue-600/20">
                            Login
                        </a>
                    @endauth
                </div>

                <!-- Tombol Menu Mobile -->
                <button id="mobile-menu-btn" type="button" class="md:hidden p-2 text-slate-600" aria-label="Buka menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>

            <!-- Menu Mobile -->
            <div id="mobile-menu" class="hidden md:hidden pb-5 flex flex-col gap-1 text-sm font-semibold text-slate-600">
                <a href="#" class="px-4 py-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Beranda</a>
                <a href="#katalog" class="px-4 py-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Katalog</a>
                <a href="#tentang" class="px-4 py-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Tentang Kami</a>
                <a href="#ulasan" class="px-4 py-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Ulasan</a>
                <a href="#kontak" class="px-4 py-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition-colors">Kontak</a>
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="mt-2 inline-flex items-center justify-center px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold transition-colors">
                        Dashboard Admin
                    </a>
                @else
                    <a href="{{ route('login') }}" class="mt-2 inline-flex items-center justify-center px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold transition-colors">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-blue-600 to-blue-500 text-white py-20 md:py-28 px-4 text-center">
        <div class="pointer-events-none absolute inset-0 opacity-20" aria-hidden="true">
            <div class="absolute -top-20 -right-20 h-72 w-72 rounded-full bg-blue-300 blur-3xl"></div>
            <div class="absolute -bottom-28 -left-16 h-72 w-72 rounded-full bg-blue-400 blur-3xl"></div>
        </div>

        <div class="container relative mx-auto max-w-3xl z-10">
            <span class="bg-white/15 border border-white/20 text-blue-50 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5 inline-block">
                PLATFORM BELANJA MODERN
            </span>
            <h2 class="text-3xl md:text-5xl font-black mb-5 leading-tight tracking-tight">
                Semua yang Kamu Cari,
                <br>
                Ada di Sini
            </h2>
            <p class="text-blue-100/90 mb-9 text-sm md:text-base leading-relaxed max-w-xl mx-auto">
                Temukan berbagai produk pilihan untuk memenuhi kebutuhanmu dalam satu tempat.
                Mulai dari kebutuhan sehari-hari hingga produk digital, semuanya tersedia dengan
                pilihan yang beragam, harga menarik, dan proses belanja yang mudah serta nyaman.
            </p>

            <!-- Form Pencarian -->
            <form action="{{ route('home') }}" method="GET" class="max-w-xl mx-auto flex gap-2 bg-white p-2 rounded-2xl shadow-xl shadow-blue-900/20">
                <div class="flex-1 flex items-center gap-2 px-3">
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z"></path></svg>
                    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama produk atau kategori..." class="w-full py-2 text-slate-800 text-sm placeholder:text-slate-400 focus:outline-none bg-transparent">
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm shadow-blue-600/30">
                    Cari
                </button>
            </form>
        </div>
    </header>

    <!-- Katalog / Produk Section -->
    <main id="katalog" class="container mx-auto px-4 py-16 md:py-20">
        <div class="text-center max-w-xl mx-auto mb-12">
            <h3 class="text-2xl md:text-3xl font-extrabold mb-3 text-slate-900 tracking-tight">Katalog Produk Pilihan</h3>
            <p class="text-slate-500 text-sm">Pilih produk dan layanan terbaik sesuai kebutuhan Anda di bawah ini.</p>
        </div>

        @if(session('success'))
            <div class="mb-8 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl text-center font-semibold max-w-xl mx-auto shadow-sm text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if(isset($products) && $products->isEmpty())
            <div class="text-center py-16 bg-white rounded-3xl shadow-sm border border-slate-200 max-w-xl mx-auto p-8">
                <div class="text-5xl mb-3">📦</div>
                <p class="text-slate-500 mb-4 font-semibold text-sm">Belum ada produk atau saldo yang ditemukan.</p>
                @auth
                    <a href="{{ route('admin.products.create') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-blue-700 transition-colors shadow text-sm">Tambah Produk Baru</a>
                @endauth
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                @foreach($products as $product)
                <div class="group bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-blue-100 fade-in">

                    <!-- FOTO PRODUK / PLACEHOLDER -->
                    <div class="w-full aspect-[4/3] bg-slate-100 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        @else
                            <div class="flex flex-col items-center justify-center text-slate-400">
                                <span class="text-4xl mb-1">📦</span>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest">No Image</span>
                            </div>
                        @endif

                        <!-- Badge Kategori -->
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-xs font-bold bg-white/90 backdrop-blur-md text-blue-600 shadow-sm">
                            {{ $product->category }}
                        </span>
                    </div>

                    <!-- INFORMASI PRODUK -->
                    <div class="p-6">
                        <h4 class="font-bold text-base text-slate-900 mb-1.5 leading-snug line-clamp-1">{{ $product->name }}</h4>
                        <div class="text-blue-600 font-black text-xl mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-2">{{ $product->description }}</p>
                    </div>

                    <!-- TOMBOL AKSI -->
                    <div class="px-6 pb-6 pt-0 grid grid-cols-2 gap-2">
                        <a href="{{ route('products.show', $product->id) }}" class="inline-flex items-center justify-center bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold py-2.5 rounded-xl transition-colors text-xs">Lihat Detail</a>
                        <a href="https://wa.me/?text={{ urlencode('Halo, saya ingin memesan produk: ' . $product->name) }}" target="_blank" class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 rounded-xl transition-colors text-xs shadow-sm shadow-blue-500/20">Beli Sekarang</a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Paginasi -->
            <div class="mt-12">
                {{ $products->links() }}
            </div>
        @endif
    </main>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="bg-white py-16 md:py-20 border-t border-b border-slate-100">
        <div class="container mx-auto px-4 max-w-3xl text-center">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-blue-600 mb-3">Tentang Kami</p>
            <h3 class="text-2xl md:text-3xl font-extrabold mb-5 text-slate-900 tracking-tight">Tentang cuannih</h3>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed">
            cuannih hadir sebagai platform jual beli yang menyediakan berbagai macam produk untuk memenuhi kebutuhan Anda dalam satu tempat. Mulai dari kebutuhan sehari-hari hingga berbagai produk pilihan lainnya, semuanya dapat Anda temukan dengan mudah, cepat, dan praktis. Kami berkomitmen memberikan pengalaman berbelanja yang nyaman dengan produk yang beragam, informasi yang jelas, harga yang menarik, serta pelayanan yang terpercaya. Temukan produk yang Anda butuhkan, pilih sesuai keinginan, dan nikmati pengalaman berbelanja yang lebih mudah bersama Cuannih. Karena bagi kami, setiap kebutuhan Anda layak ditemukan dengan cara yang sederhana, aman, dan menyenangkan.
            </p>
        </div>
    </section>

    <!-- Ulasan Section -->
    <section id="ulasan" class="py-16 md:py-20 bg-slate-50">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-blue-600 mb-3">Ulasan</p>
                <h3 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight mb-2">Ulasan Pelanggan</h3>
                <p class="text-slate-500 text-sm">Apa kata mereka yang sudah bertransaksi bersama kami.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-amber-400 text-sm mb-3">★★★★★</div>
                    <p class="text-sm text-slate-600 italic leading-relaxed mb-5">"Pelayanan sangat cepat, saldo langsung masuk tanpa kendala. Mantap!"</p>
                    <div class="font-bold text-xs text-slate-900">— Budi Santoso</div>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-amber-400 text-sm mb-3">★★★★★</div>
                    <p class="text-sm text-slate-600 italic leading-relaxed mb-5">"Harganya bersaing dan adminnya ramah banget. Recommended!"</p>
                    <div class="font-bold text-xs text-slate-900">— Siti Rahma</div>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-amber-400 text-sm mb-3">★★★★★</div>
                    <p class="text-sm text-slate-600 italic leading-relaxed mb-5">"Udah langganan beli pulsa di sini karena prosesnya super kilat."</p>
                    <div class="font-bold text-xs text-slate-900">— Dimas Prasetyo</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak & Medsos Section -->
    <section id="kontak" class="bg-gradient-to-br from-blue-700 to-blue-600 text-white py-16 md:py-20 text-center">
        <div class="container mx-auto px-4 max-w-3xl">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-blue-200 mb-3">Kontak</p>
            <h3 class="text-2xl md:text-3xl font-extrabold mb-4 tracking-tight">Hubungi &amp; Ikuti Kami</h3>
            <p class="text-blue-100/90 text-sm mb-10 max-w-lg mx-auto">Butuh bantuan transaksi atau ingin memantau update produk terbaru? Silakan hubungi kami melalui platform di bawah ini.</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="https://wa.me/" target="_blank" class="bg-white/10 hover:bg-white/20 border border-white/20 p-5 rounded-2xl flex flex-col items-center justify-center transition-all duration-200 hover:-translate-y-0.5 group">
                    <span class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-200">💬</span>
                    <span class="font-bold text-xs uppercase tracking-wider">WhatsApp</span>
                </a>
                <a href="https://instagram.com/" target="_blank" class="bg-white/10 hover:bg-white/20 border border-white/20 p-5 rounded-2xl flex flex-col items-center justify-center transition-all duration-200 hover:-translate-y-0.5 group">
                    <span class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-200">📸</span>
                    <span class="font-bold text-xs uppercase tracking-wider">Instagram</span>
                </a>
                <a href="https://tiktok.com/" target="_blank" class="bg-white/10 hover:bg-white/20 border border-white/20 p-5 rounded-2xl flex flex-col items-center justify-center transition-all duration-200 hover:-translate-y-0.5 group">
                    <span class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-200">🎵</span>
                    <span class="font-bold text-xs uppercase tracking-wider">TikTok</span>
                </a>
                <a href="https://t.me/" target="_blank" class="bg-white/10 hover:bg-white/20 border border-white/20 p-5 rounded-2xl flex flex-col items-center justify-center transition-all duration-200 hover:-translate-y-0.5 group">
                    <span class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-200">✈️</span>
                    <span class="font-bold text-xs uppercase tracking-wider">Telegram</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-14">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-base font-bold mb-2 flex items-center justify-center gap-2"><span>⚡</span> cuannih</h3>
            <p class="text-slate-400 text-xs max-w-md mx-auto mb-6 leading-relaxed">Pusat jual beli lengkap dan terpercaya.</p>
            <div class="h-px w-16 bg-slate-800 mx-auto mb-6"></div>
            <p class="text-xs text-slate-500">&copy; 2026 cuannih. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Vanilla JS — tidak menambah dependency baru, tidak mengubah logic backend.
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            const expanded = this.getAttribute('aria-expanded') === 'true';
            menu.classList.toggle('hidden');
            this.setAttribute('aria-expanded', String(!expanded));
        });
    </script>

</body>
</html>
