@extends('layouts.public')

@section('title', 'Penting Ngawe - Pusat Belanja Berbagai Kebutuhan Terlengkap')

@section('content')

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-blue-600 to-blue-500 text-white py-20 md:py-28 px-4 text-center">
        <div class="pointer-events-none absolute inset-0 opacity-20" aria-hidden="true">
            <div class="absolute -top-20 -right-20 h-72 w-72 rounded-full bg-blue-300 blur-3xl"></div>
            <div class="absolute -bottom-28 -left-16 h-72 w-72 rounded-full bg-blue-400 blur-3xl"></div>
        </div>

        <div class="container relative mx-auto max-w-3xl z-10">
            <span class="bg-white/15 border border-white/20 text-blue-50 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5 inline-block">
                Platform Jual Beli Terpercaya
            </span>
            <h2 class="text-3xl md:text-5xl font-black mb-5 leading-tight tracking-tight">
                Pusat Belanja Pulsa, Saldo &amp; Kebutuhan Digital
            </h2>
            <p class="text-blue-100/90 mb-9 text-sm md:text-base leading-relaxed max-w-xl mx-auto">
                Temukan berbagai produk digital dan layanan terbaik untuk memenuhi segala keperluan Anda dengan mudah, aman, dan cepat.
            </p>

            <!-- Search mengarah ke halaman Katalog (/produk) -->
            <form action="{{ route('products.katalog') }}" method="GET" class="max-w-xl mx-auto flex gap-2 bg-white p-2 rounded-2xl shadow-xl shadow-blue-900/20">
                <div class="flex-1 flex items-center gap-2 px-3">
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z"></path></svg>
                    <input type="text" name="search" placeholder="Cari nama produk atau kategori..." class="w-full py-2 text-slate-800 text-sm placeholder:text-slate-400 focus:outline-none bg-transparent">
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm shadow-blue-600/30">
                    Cari
                </button>
            </form>
        </div>
    </header>

    <!-- Preview Produk Terbaru -->
    <main class="container mx-auto px-4 py-16 md:py-20">
        <div class="text-center max-w-xl mx-auto mb-12">
            <h3 class="text-2xl md:text-3xl font-extrabold mb-3 text-slate-900 tracking-tight">Produk Terbaru</h3>
            <p class="text-slate-500 text-sm">Beberapa produk dan layanan terbaru yang bisa langsung Anda pesan.</p>
        </div>

        @if($products->isEmpty())
            <div class="text-center py-16 bg-white rounded-3xl shadow-sm border border-slate-200 max-w-xl mx-auto p-8">
                <div class="text-5xl mb-3">📦</div>
                <p class="text-slate-500 mb-4 font-semibold text-sm">Belum ada produk yang ditemukan.</p>
                @auth
                    <a href="{{ route('products.create') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-blue-700 transition-colors shadow text-sm">Tambah Produk Baru</a>
                @endauth
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                @foreach($products->take(6) as $product)
                <div class="group bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-blue-100 fade-in">
                    <div class="w-full aspect-[4/3] bg-slate-100 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        @else
                            <div class="flex flex-col items-center justify-center text-slate-400">
                                <span class="text-4xl mb-1">📦</span>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest">No Image</span>
                            </div>
                        @endif
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-xs font-bold bg-white/90 backdrop-blur-md text-blue-600 shadow-sm">{{ $product->category }}</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-bold text-base text-slate-900 mb-1.5 leading-snug line-clamp-1">{{ $product->name }}</h4>
                        <div class="text-blue-600 font-black text-xl mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-2">{{ $product->description }}</p>
                    </div>
                    <div class="px-6 pb-6 pt-0 grid grid-cols-2 gap-2">
                        <a href="{{ route('products.show', $product->id) }}" class="inline-flex items-center justify-center bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold py-2.5 rounded-xl transition-colors text-xs">Lihat Detail</a>
                        <a href="https://wa.me/?text={{ urlencode('Halo, saya ingin memesan produk: ' . $product->name) }}" target="_blank" class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 rounded-xl transition-colors text-xs shadow-sm shadow-blue-500/20">Beli Sekarang</a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('products.katalog') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors">
                    Lihat Semua Produk
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        @endif
    </main>

    <!-- Tentang Kami -->
    <section id="tentang" class="bg-white py-16 md:py-20 border-t border-b border-slate-100">
        <div class="container mx-auto px-4 max-w-3xl text-center">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-blue-600 mb-3">Tentang Kami</p>
            <h3 class="text-2xl md:text-3xl font-extrabold mb-5 text-slate-900 tracking-tight">Tentang Penting Ngawe</h3>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed">
                Penting Ngawe hadir sebagai platform jual beli fleksibel yang siap menyediakan segala macam barang kebutuhan digital, pulsa, dan saldo Anda dengan cepat, aman, dan terpercaya setiap hari.
            </p>
        </div>
    </section>

    <!-- Ulasan -->
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

@endsection
