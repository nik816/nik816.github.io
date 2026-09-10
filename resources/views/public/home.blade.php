@extends('layouts.public')

@section('title', 'VELLORA — Discover Something Better')

@section('content')

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-vellora-bg text-white py-24 md:py-32 px-4 text-center">
        <!-- Ambient background wash -->
        <div class="absolute inset-0 bg-gradient-to-b from-vellora-bg via-vellora-bg2 to-vellora-bg"></div>

        <!-- Golden Light Trail — SVG organic path, CSS-animated, no video -->
        <svg class="pointer-events-none absolute inset-0 w-full h-full" viewBox="0 0 1200 700" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <defs>
                <linearGradient id="trailGold" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#fbbf24" stop-opacity="0"/>
                    <stop offset="45%" stop-color="#fbbf24" stop-opacity="0.55"/>
                    <stop offset="75%" stop-color="#fcd34d" stop-opacity="0.35"/>
                    <stop offset="100%" stop-color="#fcd34d" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="trailGoldFaint" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#d4a72c" stop-opacity="0"/>
                    <stop offset="50%" stop-color="#d4a72c" stop-opacity="0.25"/>
                    <stop offset="100%" stop-color="#d4a72c" stop-opacity="0"/>
                </linearGradient>
                <filter id="trailBlur" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur stdDeviation="8"/>
                </filter>
            </defs>

            <!-- Primary trail -->
            <path class="light-trail-1" d="M -100 480 C 150 520, 300 260, 480 300 S 750 480, 950 200 S 1150 60, 1350 120"
                  fill="none" stroke="url(#trailGold)" stroke-width="3" stroke-linecap="round" filter="url(#trailBlur)"/>

            <!-- Secondary faint trail, depth -->
            <path class="light-trail-2" d="M -100 250 C 200 180, 350 380, 550 340 S 800 140, 1000 340 S 1200 460, 1350 380"
                  fill="none" stroke="url(#trailGoldFaint)" stroke-width="2" stroke-linecap="round" filter="url(#trailBlur)"/>
        </svg>

        <!-- Soft ambient glows (gold primary, subtle violet secondary) -->
        <div class="pointer-events-none absolute inset-0" aria-hidden="true">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[140%] h-[140%] hero-glow-1 rounded-full blur-3xl opacity-30"></div>
            <div class="absolute top-1/3 left-1/4 w-[60%] h-[60%] hero-glow-2 rounded-full blur-3xl opacity-20"></div>
            <div class="absolute bottom-0 right-1/4 w-[50%] h-[50%] hero-glow-3 rounded-full blur-3xl opacity-20"></div>
            <div class="absolute top-1/4 right-1/5 w-[35%] h-[35%] hero-glow-violet rounded-full blur-3xl"></div>
        </div>

        <div class="container relative mx-auto max-w-2xl z-10 fade-in">
            <span class="border border-vellora-gold/30 bg-vellora-gold/10 text-vellora-gold-light px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-6 inline-block">
                Platform Jual Beli Terpercaya
            </span>
            <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight tracking-tight">
                Discover Something <span class="text-vellora-gold">Better</span>
            </h1>
            <p class="text-vellora-muted mb-10 text-base md:text-lg leading-relaxed max-w-lg mx-auto">
                Temukan produk dan informasi terbaik dari VELLORA — cepat, aman, dan terpercaya.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="{{ route('products.katalog') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-vellora-gold hover:bg-vellora-gold-light text-black font-bold px-8 py-3.5 rounded-xl transition-colors shadow-lg shadow-vellora-gold/20">
                    Lihat Produk
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
                <a href="#tentang" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 border border-white/20 hover:bg-white/5 text-white font-bold px-8 py-3.5 rounded-xl transition-colors">
                    Jelajahi Vellora
                </a>
            </div>
        </div>
    </header>

    <!-- Produk Unggulan -->
    <section class="py-16 md:py-24 bg-vellora-bg2 reveal">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-xl mx-auto mb-12">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-vellora-gold mb-3">Produk Unggulan</p>
                <h2 class="text-2xl md:text-3xl font-extrabold text-white tracking-tight">Pilihan Terbaik Untuk Anda</h2>
            </div>

            @if($products->isEmpty())
                <div class="text-center py-16 bg-vellora-surface rounded-3xl border border-white/[0.10] max-w-xl mx-auto p-8">
                    <p class="text-vellora-muted font-semibold text-sm">Belum ada produk yang ditemukan.</p>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                    @foreach($products->take(6) as $product)
                    <div class="group bg-vellora-surface rounded-3xl border border-white/[0.10] overflow-hidden flex flex-col justify-between transition-all duration-300 hover:border-vellora-gold/30 hover:-translate-y-1">
                        <div class="w-full aspect-[4/3] bg-vellora-elevated relative overflow-hidden flex items-center justify-center border-b border-white/[0.10]">
                            @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div class="flex flex-col items-center justify-center text-vellora-muted">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            @endif
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-xs font-bold bg-black/70 backdrop-blur-md text-white shadow-sm">{{ $product->category }}</span>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-base text-white mb-1.5 leading-snug line-clamp-1">{{ $product->name }}</h3>
                            <div class="text-vellora-gold font-black text-xl">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                        </div>
                        <div class="px-6 pb-6 pt-0">
                            <a href="{{ route('products.show', $product->id) }}" class="block w-full text-center bg-vellora-gold hover:bg-vellora-gold-light text-black font-bold py-2.5 rounded-xl transition-colors text-sm">Lihat Detail</a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-center mt-12">
                    <a href="{{ route('products.katalog') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-white hover:text-vellora-gold transition-colors">
                        Lihat Semua Produk
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Tentang Vellora -->
    <section id="tentang" class="bg-vellora-bg py-16 md:py-24 reveal">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-vellora-gold mb-3">Tentang Kami</p>
                    <h2 class="text-2xl md:text-3xl font-extrabold mb-5 text-white tracking-tight">Tentang VELLORA</h2>
                    <p class="text-vellora-muted text-sm md:text-base leading-relaxed">
                        VELLORA hadir sebagai platform jual beli fleksibel yang siap menyediakan segala macam barang kebutuhan digital, pulsa, dan saldo Anda dengan cepat, aman, dan terpercaya setiap hari.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-vellora-surface rounded-2xl border border-white/[0.10] p-6">
                        <div class="w-10 h-10 rounded-xl bg-vellora-gold/10 flex items-center justify-center text-vellora-gold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <p class="font-bold text-sm text-white mb-1">Proses Cepat</p>
                        <p class="text-xs text-vellora-muted leading-relaxed">Transaksi diproses dalam hitungan menit.</p>
                    </div>
                    <div class="bg-vellora-surface rounded-2xl border border-white/[0.10] p-6">
                        <div class="w-10 h-10 rounded-xl bg-vellora-gold/10 flex items-center justify-center text-vellora-gold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <p class="font-bold text-sm text-white mb-1">Aman &amp; Terpercaya</p>
                        <p class="text-xs text-vellora-muted leading-relaxed">Data dan transaksi Anda selalu terlindungi.</p>
                    </div>
                    <div class="bg-vellora-surface rounded-2xl border border-white/[0.10] p-6 col-span-2">
                        <div class="w-10 h-10 rounded-xl bg-vellora-gold/10 flex items-center justify-center text-vellora-gold mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-6.13a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </div>
                        <p class="font-bold text-sm text-white mb-1">Dipercaya Banyak Pelanggan</p>
                        <p class="text-xs text-vellora-muted leading-relaxed">Pelayanan ramah dan responsif setiap hari.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ulasan -->
    <section id="ulasan" class="py-16 md:py-24 bg-vellora-bg2 reveal">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-vellora-gold mb-3">Ulasan</p>
                <h2 class="text-2xl md:text-3xl font-extrabold text-white tracking-tight">Ulasan Pelanggan</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-vellora-surface p-6 rounded-3xl border border-white/[0.10]">
                    <div class="text-vellora-gold text-sm mb-3">★★★★★</div>
                    <p class="text-sm text-vellora-muted italic leading-relaxed mb-5">"Pelayanan sangat cepat, saldo langsung masuk tanpa kendala. Mantap!"</p>
                    <div class="font-bold text-xs text-white">— Budi Santoso</div>
                </div>
                <div class="bg-vellora-surface p-6 rounded-3xl border border-white/[0.10]">
                    <div class="text-vellora-gold text-sm mb-3">★★★★★</div>
                    <p class="text-sm text-vellora-muted italic leading-relaxed mb-5">"Harganya bersaing dan adminnya ramah banget. Recommended!"</p>
                    <div class="font-bold text-xs text-white">— Siti Rahma</div>
                </div>
                <div class="bg-vellora-surface p-6 rounded-3xl border border-white/[0.10]">
                    <div class="text-vellora-gold text-sm mb-3">★★★★★</div>
                    <p class="text-sm text-vellora-muted italic leading-relaxed mb-5">"Udah langganan beli pulsa di sini karena prosesnya super kilat."</p>
                    <div class="font-bold text-xs text-white">— Dimas Prasetyo</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Terbaru -->
    @if(isset($articles) && $articles->isNotEmpty())
    <section class="py-16 md:py-24 bg-vellora-bg reveal">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-xl mx-auto mb-12">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-vellora-gold mb-3">Artikel</p>
                <h2 class="text-2xl md:text-3xl font-extrabold text-white tracking-tight">Artikel Terbaru</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                @foreach($articles as $article)
                    <a href="{{ route('articles.show', $article->id) }}" class="group bg-vellora-surface rounded-3xl border border-white/[0.10] overflow-hidden flex flex-col transition-all duration-300 hover:border-vellora-gold/30 hover:-translate-y-1">
                        <div class="w-full aspect-[16/10] bg-vellora-elevated overflow-hidden flex items-center justify-center border-b border-white/[0.10]">
                            @if(!empty($article->image) && Storage::disk('public')->exists($article->image))
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <svg class="w-10 h-10 text-vellora-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l6 6v8a2 2 0 01-2 2z"/></svg>
                            @endif
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <p class="text-xs text-vellora-muted font-semibold uppercase tracking-wider mb-2">{{ $article->created_at?->translatedFormat('d F Y') }}</p>
                            <h3 class="font-bold text-base text-white mb-2 leading-snug line-clamp-2">{{ $article->title }}</h3>
                            <p class="text-vellora-muted text-xs leading-relaxed line-clamp-2 mb-4">{{ Str::limit(strip_tags($article->content), 110) }}</p>
                            <span class="mt-auto inline-flex items-center gap-1 text-xs font-bold text-vellora-gold group-hover:gap-1.5 transition-all">
                                Baca Selengkapnya
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('articles.index') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-white hover:text-vellora-gold transition-colors">
                    Lihat Semua Artikel
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </section>
    @endif

    <!-- Contact ringkas -->
    <section id="kontak" class="bg-vellora-bg text-white py-16 md:py-24 text-center reveal">
        <div class="container mx-auto px-4 max-w-2xl">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-vellora-gold mb-3">Hubungi Kami</p>
            <h2 class="text-2xl md:text-3xl font-extrabold mb-4 tracking-tight">Punya Pertanyaan?</h2>
            <p class="text-vellora-muted text-sm mb-8 max-w-md mx-auto leading-relaxed">Tim kami siap membantu Anda kapan saja lewat platform di bawah ini.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-vellora-gold hover:bg-vellora-gold-light text-black font-bold px-8 py-3.5 rounded-xl transition-colors shadow-lg shadow-vellora-gold/20">
                Hubungi Sekarang
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </section>

@endsection
