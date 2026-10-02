@extends('layouts.public')

@section('title', 'VELLORA — Discover Something Better')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<header class="vellora-hero relative isolate overflow-hidden bg-[#080808] text-white">
    {{-- ambient glow --}}
    <div class="pointer-events-none absolute left-1/2 top-[42%] h-[520px] w-[720px] -translate-x-1/2 rounded-full bg-[#D4AF37]/[0.10] blur-[130px]"></div>
    <div class="pointer-events-none absolute -left-48 top-24 h-[420px] w-[420px] rounded-full bg-[#D4AF37]/[0.06] blur-[110px]"></div>
    <div class="pointer-events-none absolute -right-48 top-20 h-[420px] w-[420px] rounded-full bg-[#D4AF37]/[0.055] blur-[110px]"></div>

    <div class="relative z-10 mx-auto flex min-h-[calc(100vh-76px)] max-w-7xl items-center justify-center px-5 py-24 sm:px-8 lg:px-12">
        {{-- 4 premium 3D objects: obsidian + gold, layered CSS 3D (tanpa library) --}}
        {{-- definisi bentuk 3D (gradien emas + simbol) --}}
        <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
            <defs>
                <linearGradient id="gGold" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0" stop-color="#8A6A18"/><stop offset=".26" stop-color="#FFDF00"/><stop offset=".5" stop-color="#D4AF37"/><stop offset=".74" stop-color="#8A6A18"/><stop offset="1" stop-color="#D4AF37"/>
                </linearGradient>
                <pattern id="pBrush" width="3" height="3" patternUnits="userSpaceOnUse" patternTransform="rotate(100)"><rect width=".7" height="3" fill="rgba(0,0,0,.2)"/></pattern>
                <symbol id="h3dDia" viewBox="0 0 100 100"><rect x="19" y="19" width="62" height="62" rx="12" transform="rotate(45 50 50)"/></symbol>
                <symbol id="h3dRing" viewBox="0 0 100 100"><rect x="30" y="30" width="40" height="40" rx="8" transform="rotate(45 50 50)"/></symbol>
                <symbol id="h3dV" viewBox="0 0 100 100"><path d="M27 31H41L50 52 59 31H73L56 71H44Z"/></symbol>
            </defs>
        </svg>
        <div class="hero-float h3d h3d--va" data-depth="1" aria-hidden="true">
            <span class="h3d-aura"></span>
            <div class="h3d-tilt"><div class="h3d-spin">
                <i class="h3d-ext" style="--z:1"></i><i class="h3d-ext" style="--z:2"></i><i class="h3d-ext" style="--z:3"></i><i class="h3d-ext" style="--z:4"></i><i class="h3d-ext" style="--z:5"></i><i class="h3d-ext" style="--z:6"></i><i class="h3d-ext" style="--z:7"></i><i class="h3d-ext" style="--z:8"></i><i class="h3d-ext" style="--z:9"></i><i class="h3d-ext" style="--z:10"></i><i class="h3d-ext" style="--z:11"></i>
                <div class="h3d-plate"></div>
                <div class="h3d-g h3d-g--dark" style="--z:1.5"><img src="{{ asset('images/vellora-va-navbar.png') }}" alt="" decoding="async"></div><div class="h3d-g h3d-g--dark" style="--z:2.5"><img src="{{ asset('images/vellora-va-navbar.png') }}" alt="" decoding="async"></div><div class="h3d-g h3d-g--dark" style="--z:3.5"><img src="{{ asset('images/vellora-va-navbar.png') }}" alt="" decoding="async"></div><div class="h3d-g h3d-g--dark" style="--z:4.5"><img src="{{ asset('images/vellora-va-navbar.png') }}" alt="" decoding="async"></div><div class="h3d-g h3d-g--dark" style="--z:5.5"><img src="{{ asset('images/vellora-va-navbar.png') }}" alt="" decoding="async"></div><div class="h3d-g h3d-g--dark" style="--z:6.5"><img src="{{ asset('images/vellora-va-navbar.png') }}" alt="" decoding="async"></div>
                <div class="h3d-g h3d-g--top" style="--z:7.5"><img src="{{ asset('images/vellora-va-navbar.png') }}" alt="" decoding="async"></div>
            </div></div>
            <span class="h3d-floor"></span>
        </div>
        <div class="hero-float h3d h3d--chip" data-depth=".7" aria-hidden="true">
            <span class="h3d-aura"></span>
            <div class="h3d-tilt"><div class="h3d-spin">
                <i class="h3d-ext" style="--z:1"></i><i class="h3d-ext" style="--z:2"></i><i class="h3d-ext" style="--z:3"></i><i class="h3d-ext" style="--z:4"></i><i class="h3d-ext" style="--z:5"></i><i class="h3d-ext" style="--z:6"></i><i class="h3d-ext" style="--z:7"></i><i class="h3d-ext" style="--z:8"></i><i class="h3d-ext" style="--z:9"></i><i class="h3d-ext" style="--z:10"></i>
                <div class="h3d-plate" style="--r:16%"></div>
                <svg class="h3d-layer" style="--z:1.2" viewBox="0 0 100 100" fill="url(#gGold)"><rect x="31" y="14" width="5" height="12" rx="1.2"/><rect x="31" y="74" width="5" height="12" rx="1.2"/><rect x="14" y="31" width="12" height="5" rx="1.2"/><rect x="74" y="31" width="12" height="5" rx="1.2"/><rect x="41.5" y="14" width="5" height="12" rx="1.2"/><rect x="41.5" y="74" width="5" height="12" rx="1.2"/><rect x="14" y="41.5" width="12" height="5" rx="1.2"/><rect x="74" y="41.5" width="12" height="5" rx="1.2"/><rect x="52" y="14" width="5" height="12" rx="1.2"/><rect x="52" y="74" width="5" height="12" rx="1.2"/><rect x="14" y="52" width="12" height="5" rx="1.2"/><rect x="74" y="52" width="12" height="5" rx="1.2"/><rect x="62.5" y="14" width="5" height="12" rx="1.2"/><rect x="62.5" y="74" width="5" height="12" rx="1.2"/><rect x="14" y="62.5" width="12" height="5" rx="1.2"/><rect x="74" y="62.5" width="12" height="5" rx="1.2"/></svg>
                <i class="h3d-ext h3d-ext--die" style="--z:1"></i><i class="h3d-ext h3d-ext--die" style="--z:2"></i><i class="h3d-ext h3d-ext--die" style="--z:3"></i>
                <div class="h3d-die"></div>
                <svg class="h3d-layer" style="--z:6.2" viewBox="0 0 100 100" fill="none" stroke="#D4AF37" stroke-linecap="round">
                    <path d="M36 36h12v8M64 36H52v8M36 64h12v-8M64 64H52v-8M36 50h6M58 50h6M50 36v6M50 58v6" stroke-width="1.1" opacity=".75"/>
                    <circle cx="36" cy="36" r="1.5" fill="#FFDF00" stroke="none"/><circle cx="64" cy="36" r="1.5" fill="#FFDF00" stroke="none"/><circle cx="36" cy="64" r="1.5" fill="#FFDF00" stroke="none"/><circle cx="64" cy="64" r="1.5" fill="#FFDF00" stroke="none"/>
                    <rect x="43" y="43" width="14" height="14" rx="2.5" fill="url(#gGold)" stroke="#FFDF00" stroke-width=".8"/>
                    <circle cx="50" cy="50" r="2.2" fill="#FFDF00" stroke="none" class="h3d-pulse"/>
                </svg>
            </div></div>
            <span class="h3d-floor"></span>
        </div>
        <div class="hero-float h3d h3d--cube" data-depth="1.2" aria-hidden="true">
            <span class="h3d-aura"></span>
            <div class="h3d-tilt"><div class="h3d-spin">
                <i class="h3d-cf h3d-cf--f"></i><i class="h3d-cf h3d-cf--b"></i><i class="h3d-cf h3d-cf--r"></i><i class="h3d-cf h3d-cf--l"></i><i class="h3d-cf h3d-cf--t"></i><i class="h3d-cf h3d-cf--d"></i>
                <i class="h3d-core"></i>
                <i class="h3d-cv" style="--x:-1;--y:-1;--zz:-1"></i><i class="h3d-cv" style="--x:-1;--y:-1;--zz:1"></i><i class="h3d-cv" style="--x:-1;--y:1;--zz:-1"></i><i class="h3d-cv" style="--x:-1;--y:1;--zz:1"></i><i class="h3d-cv" style="--x:1;--y:-1;--zz:-1"></i><i class="h3d-cv" style="--x:1;--y:-1;--zz:1"></i><i class="h3d-cv" style="--x:1;--y:1;--zz:-1"></i><i class="h3d-cv" style="--x:1;--y:1;--zz:1"></i>
            </div></div>
            <span class="h3d-floor"></span>
        </div>
        <div class="hero-float h3d h3d--emb" data-depth=".9" aria-hidden="true">
            <span class="h3d-aura"></span>
            <div class="h3d-tilt"><div class="h3d-spin">
                <svg class="h3d-layer" style="--z:-5;fill:#1a1204" viewBox="0 0 100 100"><use href="#h3dDia"/></svg><svg class="h3d-layer" style="--z:-4;fill:#1f1505" viewBox="0 0 100 100"><use href="#h3dDia"/></svg><svg class="h3d-layer" style="--z:-3;fill:#241906" viewBox="0 0 100 100"><use href="#h3dDia"/></svg><svg class="h3d-layer" style="--z:-2;fill:#291c07" viewBox="0 0 100 100"><use href="#h3dDia"/></svg><svg class="h3d-layer" style="--z:-1;fill:#2e2008" viewBox="0 0 100 100"><use href="#h3dDia"/></svg><svg class="h3d-layer" style="--z:0;fill:#34250a" viewBox="0 0 100 100"><use href="#h3dDia"/></svg>
                <svg class="h3d-layer" style="--z:1;fill:#070707;stroke:url(#gGold);stroke-width:2.2;stroke-linejoin:round" viewBox="0 0 100 100"><use href="#h3dDia"/></svg>
                <svg class="h3d-layer" style="--z:2.4;fill:#0B0B0B;stroke:#8A6A18;stroke-width:1.2" viewBox="0 0 100 100"><use href="#h3dRing"/></svg>
                <svg class="h3d-layer" style="--z:3.0;fill:#2a1d05" viewBox="0 0 100 100"><use href="#h3dV"/></svg><svg class="h3d-layer" style="--z:3.8;fill:#33240a" viewBox="0 0 100 100"><use href="#h3dV"/></svg><svg class="h3d-layer" style="--z:4.6;fill:#3d2b0c" viewBox="0 0 100 100"><use href="#h3dV"/></svg><svg class="h3d-layer" style="--z:5.4;fill:#47320e" viewBox="0 0 100 100"><use href="#h3dV"/></svg><svg class="h3d-layer" style="--z:6.2;fill:#523a10" viewBox="0 0 100 100"><use href="#h3dV"/></svg><svg class="h3d-layer" style="--z:7.0;fill:#5e4312" viewBox="0 0 100 100"><use href="#h3dV"/></svg>
                <svg class="h3d-layer h3d-layer--top" style="--z:8.4;fill:url(#gGold)" viewBox="0 0 100 100"><use href="#h3dV"/></svg>
                <svg class="h3d-layer" style="--z:8.6;fill:url(#pBrush)" viewBox="0 0 100 100"><use href="#h3dV"/></svg>
                <svg class="h3d-layer" style="--z:8.8;fill:none;stroke:rgba(255,223,0,.65);stroke-width:.6;stroke-linejoin:round" viewBox="0 0 100 100"><use href="#h3dV"/></svg>
            </div></div>
            <span class="h3d-floor"></span>
        </div>

        {{-- center content --}}
        <div class="relative z-20 mx-auto w-full max-w-4xl text-center">
            <div class="mb-5 inline-flex items-center gap-2.5 rounded-full sm:mb-7 sm:gap-3 border border-[#D4AF37]/80 bg-black/40 px-4 py-1.5 text-[9px] font-bold uppercase tracking-[0.2em] text-[#F5D76E] sm:px-5 sm:py-2 sm:tracking-[0.28em] shadow-[0_0_25px_rgba(212,175,55,.16)] backdrop-blur-md sm:text-xs">
                <span class="h-2 w-2 rounded-full bg-[#F5D76E] shadow-[0_0_12px_rgba(245,215,110,.9)]"></span>
                PLATFORM JUAL BELI TERPERCAYA
                <span class="h-2 w-2 rounded-full bg-[#F5D76E] shadow-[0_0_12px_rgba(245,215,110,.9)]"></span>
            </div>

            <h1 class="text-[clamp(2.75rem,13vw,3.75rem)] font-black leading-[1] sm:text-[clamp(2.5rem,5.6vw,5rem)] tracking-[-0.04em] drop-shadow-[0_8px_35px_rgba(0,0,0,.55)]">
                <span class="block text-white">Discover<span class="hidden sm:inline">&nbsp;</span><span class="block sm:inline">Something</span></span>
                <span class="vellora-gold-text block">Better</span>
            </h1>

            <p class="mx-auto mt-5 max-w-2xl text-[15px] leading-7 text-zinc-300 sm:mt-8 sm:text-lg sm:leading-8">
                Temukan produk dan informasi terbaik dari <span class="font-semibold text-white">VELLORA</span> — cepat, aman, dan terpercaya.
            </p>

            <div class="mx-auto mt-7 flex w-full max-w-xs flex-col items-center justify-center gap-3 sm:mt-10 sm:max-w-none sm:flex-row">
                <a href="{{ route('products.katalog') }}" class="vellora-gold-button inline-flex min-h-12 w-full items-center justify-center gap-2 rounded-full px-8 py-3 text-sm font-extrabold text-[#080808] sm:w-auto">
                    Lihat Produk
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
                <a href="#tentang" class="inline-flex min-h-12 w-full items-center justify-center rounded-full border border-[#D4AF37]/75 bg-black/35 px-8 py-3 text-sm font-bold text-white backdrop-blur-md transition hover:-translate-y-0.5 hover:bg-[#D4AF37]/10 hover:text-[#F5D76E] sm:w-auto">
                    Jelajahi Vellora
                </a>
            </div>

            <div class="mx-auto mt-10 hidden max-w-md items-center justify-center gap-4 text-[9px] sm:mt-12 sm:flex uppercase tracking-[0.34em] text-zinc-500">
                <span class="h-px flex-1 bg-gradient-to-r from-transparent to-white/15"></span>
                LUXURY DIGITAL PLATFORM
                <span class="h-px flex-1 bg-gradient-to-l from-transparent to-white/15"></span>
            </div>
        </div>
    </div>
</header>

{{-- =========================================================
    PRODUK UNGGULAN
========================================================= --}}
<section id="produk-unggulan" class="vellora-section relative overflow-hidden bg-[#080808] py-16 md:py-20 lg:py-24">
    <div class="product-showcase-glow pointer-events-none absolute inset-0" aria-hidden="true"></div>
    <div class="product-showcase-grid pointer-events-none absolute inset-0" aria-hidden="true"></div>
    <span class="showcase-rule pointer-events-none absolute left-1/2 top-0 z-0 h-px w-28 -translate-x-1/2 bg-gradient-to-r from-transparent via-[#D4AF37]/45 to-transparent" aria-hidden="true"></span>
    <div class="relative z-10 mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="mb-9 flex flex-col gap-4 sm:mb-12 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <span class="vellora-badge">PILIHAN VELLORA</span>
                <h2 class="mt-5 text-3xl font-black tracking-tight text-white sm:text-4xl">Produk Pilihan</h2>
                <p class="mt-3 max-w-xl text-sm leading-7 text-zinc-400 sm:text-base">Pilihan digital terkurasi, dengan informasi yang jelas untuk membantu Anda menentukan pilihan.</p>
            </div>
            <a href="{{ route('products.katalog') }}" class="inline-flex w-fit items-center gap-2 text-sm font-bold text-white transition hover:text-[#F5D76E]">
                Jelajahi katalog
                <svg class="micro-arrow h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6 6 6-6 6"/></svg>
            </a>
        </div>

        @php
            $homeProducts = $products->take(6);
            $featuredProduct = $homeProducts->first();
        @endphp
        @if($homeProducts->isEmpty())
            <div class="rounded-3xl border border-white/10 bg-[#0d0d0d] px-6 py-12 text-center text-sm text-zinc-400 sm:py-16">Belum ada produk yang tersedia.</div>
        @else
            <div class="product-showcase-grid-layout grid gap-5 @if($homeProducts->count() === 1) product-showcase-single lg:grid-cols-1 @else lg:grid-cols-5 @endif">
                @php
                    $featuredReviews = $featuredProduct->relationLoaded('reviews') ? $featuredProduct->reviews : collect();
                    $featuredReviewCount = $featuredReviews->count();
                    $featuredRating = $featuredReviewCount ? round((float) $featuredReviews->avg('rating'), 1) : 0;
                @endphp
                <article class="vellora-product-card product-featured-card group overflow-hidden rounded-[28px] border border-[#D4AF37]/20 bg-[#0d0d0d] @if($homeProducts->count() > 1) lg:col-span-3 @else lg:col-span-1 @endif">
                    <a href="{{ route('products.show', $featuredProduct->id) }}" class="product-featured-image relative block min-h-56 overflow-hidden bg-[#111111] sm:min-h-72 lg:min-h-full" aria-label="Lihat {{ $featuredProduct->name }}">
                        @if(!empty($featuredProduct->image) && Storage::disk('public')->exists($featuredProduct->image))
                            <img src="{{ asset('storage/' . $featuredProduct->image) }}" alt="{{ $featuredProduct->name }}" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-[1.025]">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center text-zinc-700">
                                <svg class="h-14 w-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                        @endif
                        <span class="absolute left-4 top-4 inline-flex items-center gap-2 rounded-full border border-[#D4AF37]/40 bg-[#080808]/85 px-3 py-1.5 text-[9px] font-bold uppercase tracking-[0.18em] text-[#F5D76E] backdrop-blur-sm sm:left-5 sm:top-5">
                            <span class="h-1.5 w-1.5 rounded-full bg-[#D4AF37]" aria-hidden="true"></span>
                            Featured product
                        </span>
                        <span class="absolute bottom-4 left-4 rounded-full border border-white/10 bg-[#080808]/80 px-3 py-1.5 text-[9px] font-bold uppercase tracking-[0.14em] text-white/90 backdrop-blur-sm sm:bottom-5 sm:left-5">{{ $featuredProduct->category }}</span>
                        <span class="product-image-vignette pointer-events-none absolute inset-0" aria-hidden="true"></span>
                    </a>
                    <div class="flex flex-col justify-center p-6 sm:p-8">
                        <h3 class="text-2xl font-extrabold leading-tight text-white sm:text-3xl">{{ $featuredProduct->name }}</h3>
                        @if($featuredProduct->description)
                            <p class="mt-3 line-clamp-3 text-sm leading-7 text-zinc-400">{{ \Illuminate\Support\Str::limit(strip_tags($featuredProduct->description), 170) }}</p>
                        @endif
                        <div class="mt-5 flex flex-wrap items-center gap-x-5 gap-y-2">
                            <span class="text-xl font-black text-[#F5D76E]">Rp {{ number_format($featuredProduct->price, 0, ',', '.') }}</span>
                            @if(isset($featuredProduct->stock) && $featuredProduct->stock > 0)
                                <span class="inline-flex items-center gap-2 text-xs font-semibold text-zinc-300"><span class="h-1.5 w-1.5 rounded-full bg-[#D4AF37]"></span>Tersedia ({{ $featuredProduct->stock }})</span>
                            @else
                                <span class="inline-flex items-center gap-2 text-xs font-semibold text-zinc-500"><span class="h-1.5 w-1.5 rounded-full bg-zinc-600"></span>Stok habis</span>
                            @endif
                        </div>
                        @if($featuredReviewCount > 0)
                            <p class="mt-3 inline-flex items-center gap-2 text-xs text-zinc-500" aria-label="Rating {{ number_format($featuredRating, 1) }} dari 5, {{ $featuredReviewCount }} ulasan">
                                <span class="tracking-[0.12em] text-[#F5D76E]" aria-hidden="true">★★★★★</span>
                                <span class="font-bold text-white">{{ number_format($featuredRating, 1) }}</span>
                                <span>{{ $featuredReviewCount }} ulasan</span>
                            </p>
                        @endif
                        <a href="{{ route('products.show', $featuredProduct->id) }}" class="product-detail-link mt-6 inline-flex min-h-11 w-fit items-center justify-center gap-2 rounded-xl border border-[#D4AF37]/50 px-5 py-3 text-sm font-bold text-[#F5D76E] transition hover:bg-[#D4AF37]/[0.08] hover:border-[#D4AF37]/80">
                            Lihat detail <span class="micro-arrow" aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>

                @if($homeProducts->count() > 1)
                    <div class="product-supporting-list grid gap-4 @if($homeProducts->count() === 2) sm:grid-cols-1 product-supporting-single @else sm:grid-cols-2 @endif lg:col-span-2 lg:grid-cols-1">
                        @foreach($homeProducts->skip(1) as $product)
                            @php
                                $approvedReviews = $product->relationLoaded('reviews') ? $product->reviews : collect();
                                $productReviewCount = $approvedReviews->count();
                                $productAverageRating = $productReviewCount ? round((float) $approvedReviews->avg('rating'), 1) : 0;
                            @endphp
                            <article class="vellora-product-card group overflow-hidden rounded-2xl border border-[#D4AF37]/15 bg-[#0d0d0d] @if($homeProducts->count() === 2) product-supporting-feature @endif">
                                <a href="{{ route('products.show', $product->id) }}" class="flex h-full min-h-36 gap-4 p-3" aria-label="Lihat detail {{ $product->name }}">
                                    <div class="relative aspect-[4/3] w-28 flex-none self-center overflow-hidden rounded-xl bg-[#111111] sm:w-32 lg:w-28">
                                        @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
                                        @else
                                            <div class="flex h-full items-center justify-center text-zinc-700">
                                                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M6 20h12a2 2 0 002-2V6H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex min-w-0 flex-1 flex-col justify-center py-1">
                                        <span class="text-[9px] font-bold uppercase tracking-[0.15em] text-[#D4AF37]">{{ $product->category }}</span>
                                        <h3 class="mt-1 line-clamp-2 text-sm font-extrabold leading-5 text-white transition group-hover:text-[#F5D76E]">{{ $product->name }}</h3>
                                        <span class="mt-2 text-sm font-black text-[#F5D76E]">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                        <span class="mt-1 text-[11px] text-zinc-500">{{ isset($product->stock) && $product->stock > 0 ? 'Tersedia (' . $product->stock . ')' : 'Stok habis' }}</span>
                                        @if($productReviewCount > 0)
                                            <span class="mt-1 text-[11px] text-zinc-500"><span class="text-[#F5D76E]">★ {{ number_format($productAverageRating, 1) }}</span> · {{ $productReviewCount }} ulasan</span>
                                        @endif
                                        <span class="mt-2 inline-flex items-center gap-1 text-[11px] font-bold text-[#D4AF37]">Lihat detail <span class="micro-arrow" aria-hidden="true">→</span></span>
                                    </div>
                                </a>
                            </article>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mt-8 border-t border-white/[0.08] pt-6 text-center">
                <a href="{{ route('products.katalog') }}" class="inline-flex min-h-11 items-center gap-2 px-4 text-sm font-bold text-white transition hover:text-[#F5D76E]">
                    Lihat semua produk
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
            </div>
        @endif
    </div>
</section>

{{-- =========================================================
    TENTANG VELLORA
========================================================= --}}
<section id="tentang" class="vellora-section relative overflow-hidden bg-[#0b0b0b] py-16 md:py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="grid items-center gap-10 lg:grid-cols-[.85fr_1.15fr] lg:gap-16">
            <div class="max-w-xl">
                <span class="vellora-badge">TENTANG VELLORA</span>
                <h2 class="mt-5 text-4xl font-black tracking-tight text-white sm:text-5xl">Digital, dengan <span class="vellora-gold-text">standar lebih baik.</span></h2>
                <p class="mt-6 text-base leading-8 text-zinc-400">
                    VELLORA adalah platform digital terkurasi untuk kebutuhan produk digital, pulsa, dan transaksi harian. Kami mengutamakan informasi yang jelas, proses yang praktis, dan pengalaman yang dapat diandalkan.
                </p>
                <a href="{{ route('products.katalog') }}" class="mt-7 inline-flex min-h-11 items-center gap-2 rounded-xl border border-[#D4AF37]/35 px-5 py-3 text-sm font-bold text-[#F5D76E] transition hover:border-[#D4AF37] hover:bg-[#D4AF37]/[0.06]">
                    Kenali pilihan kami
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
            </div>

            <div class="relative grid gap-4 sm:grid-cols-3">
                <span class="pointer-events-none absolute -right-2 -top-3 hidden h-16 w-16 border-r border-t border-[#D4AF37]/20 sm:block" aria-hidden="true"></span>
                @foreach([
                    ['01', 'Trusted Platform', 'Alur dan informasi layanan dirancang agar mudah dipahami.', 'M12 3l7 4v5c0 4.4-2.8 7.8-7 9-4.2-1.2-7-4.6-7-9V7l7-4z'],
                    ['02', 'Quality Products', 'Pilihan ditampilkan dengan detail dan status yang jelas.', 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                    ['03', 'Reliable Information', 'Detail produk dan editorial membantu Anda memilih dengan yakin.', 'M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01'],
                ] as $card)
                    <article class="vellora-feature-card about-feature-card">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-black tracking-[0.18em] text-[#D4AF37]">{{ $card[0] }}</span>
                            <span class="vellora-feature-icon h-11 w-11 rounded-xl">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="{{ $card[3] }}"/></svg>
                            </span>
                        </div>
                        <h3>{{ $card[1] }}</h3>
                        <p>{{ $card[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- =========================================================
    KENAPA VELLORA + STATISTIK NYATA
========================================================= --}}
<section id="kenapa" class="vellora-section relative overflow-hidden bg-[#080808] py-16 md:py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="mx-auto mb-10 max-w-2xl text-center">
            <span class="vellora-badge">WHY VELLORA</span>
            <h2 class="mt-5 text-3xl font-black tracking-tight text-white sm:text-4xl">Pilihan digital, lebih terarah.</h2>
            <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-zinc-400 sm:text-base">Hal-hal penting yang membuat pengalaman Anda terasa sederhana dan dapat diandalkan.</p>
        </div>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach([
                ['Terpercaya', 'Informasi dan alur layanan dirancang dengan mengutamakan rasa yakin.', 'M12 3l7 4v5c0 4.4-2.8 7.8-7 9-4.2-1.2-7-4.6-7-9V7l7-4z'],
                ['Produk Pilihan', 'Katalog ditata per kategori, dengan harga dan status stok.', 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                ['Informasi Jelas', 'Detail produk dan artikel membantu Anda memahami setiap pilihan.', 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['Pengalaman Modern', 'Jelajahi katalog dan hubungi kami dengan langkah yang praktis.', 'M4 6h16M4 12h10M4 18h7'],
            ] as $card)
                <div class="vellora-feature-card">
                    <div class="vellora-feature-icon"><svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="{{ $card[2] }}"/></svg></div>
                    <h3>{{ $card[0] }}</h3>
                    <p>{{ $card[1] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-12 border-t border-[#D4AF37]/20 pt-8 sm:mt-16 sm:pt-10">
            <p class="mb-5 text-center text-[10px] font-bold uppercase tracking-[0.2em] text-zinc-500">VELLORA dalam angka</p>
            <dl class="vellora-stats grid grid-cols-2 lg:grid-cols-4">
                @foreach([
                    ['Produk', $stats['products'] ?? 0, 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                    ['Produk tersedia', $stats['available'] ?? 0, 'M5 12l4 4L19 6'],
                    ['Artikel', $stats['articles'] ?? 0, 'M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01'],
                    ['Ulasan', $stats['reviews'] ?? 0, 'M12 20l-1.4-1.3C5.4 13.8 2 10.7 2 7a5 5 0 019-3 5 5 0 019 3c0 3.7-3.4 6.8-8.6 11.7L12 20z'],
                ] as $stat)
                    <div class="vellora-stat px-4 py-5 text-center sm:px-6 sm:py-6">
                        <dt class="flex items-center justify-center gap-2 text-[10px] font-bold uppercase tracking-[0.14em] text-zinc-500">
                            <svg class="h-4 w-4 text-[#D4AF37]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="{{ $stat[2] }}"/></svg>
                            {{ $stat[0] }}
                        </dt>
                        <dd class="mt-3 text-3xl font-black tracking-tight text-[#F5D76E] sm:text-4xl">{{ number_format($stat[1], 0, ',', '.') }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</section>

{{-- =========================================================
    CARA KERJA
========================================================= --}}
<section id="cara-kerja" class="vellora-section relative overflow-hidden bg-[#0b0b0b] py-16 md:py-20 lg:py-24">
    <div class="relative mx-auto max-w-6xl px-5 sm:px-8 lg:px-12">
        <div class="mx-auto mb-12 max-w-2xl text-center">
            <span class="vellora-badge">HOW IT WORKS</span>
            <h2 class="mt-5 text-3xl font-black tracking-tight text-white sm:text-4xl">Dari penelusuran ke pilihan.</h2>
            <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-zinc-400 sm:text-base">Empat langkah sederhana untuk menemukan informasi dan produk yang Anda butuhkan.</p>
        </div>

        <ol class="vellora-timeline relative grid gap-7 md:grid-cols-4 md:gap-6">
            <span class="vellora-timeline-line" aria-hidden="true"></span>
            @foreach([
                ['01', 'Jelajahi', 'Temukan produk dan informasi yang tersedia.', 'M4 6h16M4 12h16M4 18h16'],
                ['02', 'Pilih', 'Pilih produk sesuai kebutuhan Anda.', 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                ['03', 'Pelajari', 'Lihat detail, harga, stok, dan ulasan produk.', 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['04', 'Hubungi', 'Hubungi VELLORA melalui kontak yang tersedia.', 'M21 11.5a8.4 8.4 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.4 8.4 0 01-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.4 8.4 0 013.8-.9h.5a8.5 8.5 0 018 8v.5z'],
            ] as $step)
                <li class="vr-step relative pl-16 md:pl-0 md:pt-16 md:text-center">
                    <span class="timeline-marker absolute left-0 top-0 flex h-11 w-11 items-center justify-center rounded-full border border-[#D4AF37]/55 bg-[#0b0b0b] text-[10px] font-black tracking-wider text-[#F5D76E] md:left-1/2 md:-translate-x-1/2">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="{{ $step[3] }}"/></svg>
                    </span>
                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#D4AF37]">{{ $step[0] }}</p>
                    <h3 class="mt-2 text-base font-extrabold text-white">{{ $step[1] }}</h3>
                    <p class="mt-2 text-sm leading-6 text-zinc-400">{{ $step[2] }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>

{{-- =========================================================
    ULASAN PELANGGAN
========================================================= --}}
<section id="ulasan" class="vellora-section relative overflow-hidden bg-[#0b0b0d] py-16 md:py-20 lg:py-24">
    <div class="pointer-events-none absolute left-1/2 top-20 h-72 w-[680px] -translate-x-1/2 rounded-full bg-[#D4AF37]/[0.045] blur-[120px]"></div>
    <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="mx-auto mb-10 max-w-2xl text-center">
            <span class="vellora-badge">ULASAN PELANGGAN</span>
            <h2 class="mt-5 text-3xl font-black text-white sm:text-4xl">Apa Kata Mereka</h2>
        </div>

        @if(($latestReviews ?? collect())->isEmpty())
            <div class="grid grid-cols-1">
                @include('partials.empty-state', ['title' => 'Belum ada ulasan', 'text' => 'Ulasan pelanggan akan tampil di sini setelah dikirim dari halaman produk.', 'href' => route('products.katalog'), 'label' => 'Lihat Produk'])
            </div>
        @else
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                @foreach($latestReviews as $review)
                    <article class="vellora-review-card">
                        <div class="text-lg tracking-[0.18em] text-[#F5D76E]" aria-label="Rating {{ $review->rating }} dari 5">{{ str_repeat('★', (int) $review->rating) }}<span class="text-zinc-700">{{ str_repeat('★', 5 - (int) $review->rating) }}</span></div>
                        <p class="mt-6 min-h-[92px] text-sm italic leading-7 text-zinc-300">“{{ \Illuminate\Support\Str::limit($review->comment, 180) }}”</p>
                        <div class="mt-7 border-t border-white/10 pt-5">
                            <div class="text-sm font-extrabold text-white">— {{ $review->name }}</div>
                            @if($review->product)
                                <a href="{{ route('products.show', $review->product->id) }}" class="mt-1 block truncate text-xs text-zinc-500 transition hover:text-[#F5D76E]">{{ $review->product->name }}</a>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </div>
</section>

{{-- =========================================================
    TERAKHIR DILIHAT (localStorage, tampil hanya jika ada riwayat)
========================================================= --}}
<section id="terakhir-dilihat" class="vellora-section relative bg-[#080808] py-12 md:py-16" hidden aria-labelledby="recent-home-title">
    <div class="vr-recent-wrap mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <h2 id="recent-home-title" class="mb-6 text-xl font-black tracking-tight text-white">Terakhir Dilihat</h2>
        <div data-recent-list class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4"></div>
    </div>
</section>

{{-- =========================================================
    ARTIKEL TERBARU
========================================================= --}}
@if(isset($articles) && $articles->isNotEmpty())
<section id="artikel-terbaru" class="vellora-section relative overflow-hidden bg-[#080808] py-16 md:py-20 lg:py-24">
    <div class="editorial-showcase-glow pointer-events-none absolute inset-0" aria-hidden="true"></div>
    <div class="relative z-10 mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="mb-9 flex flex-col gap-4 sm:mb-12 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <span class="vellora-badge">CATATAN VELLORA</span>
                <h2 class="mt-5 text-3xl font-black text-white sm:text-4xl">Artikel Terbaru</h2>
                <p class="mt-3 max-w-xl text-sm leading-7 text-zinc-400 sm:text-base">Wawasan dan informasi terbaru, dipilih untuk menemani keputusan Anda.</p>
            </div>
            <a href="{{ route('articles.index') }}" class="inline-flex w-fit items-center gap-2 text-sm font-bold text-white transition hover:text-[#F5D76E]">
                Lihat semua artikel <span aria-hidden="true">→</span>
            </a>
        </div>
        @php
            $homeArticles = $articles->take(3);
            $featuredArticle = $homeArticles->first();
            $featuredArticleMinutes = max(1, (int) ceil(str_word_count(strip_tags($featuredArticle->content)) / 200));
        @endphp
        <div class="editorial-grid grid gap-5 @if($homeArticles->count() === 1) editorial-single lg:grid-cols-1 @else lg:grid-cols-5 @endif">
            <article class="vellora-article-card editorial-feature group overflow-hidden rounded-[28px] border border-white/10 bg-[#0d0d0d] @if($homeArticles->count() > 1) lg:col-span-3 @else lg:col-span-1 @endif">
                <a href="{{ route('articles.show', $featuredArticle->id) }}" class="editorial-feature-image relative block aspect-[16/9] overflow-hidden bg-[#111111]" aria-label="Baca {{ $featuredArticle->title }}">
                    @if(!empty($featuredArticle->image) && Storage::disk('public')->exists($featuredArticle->image))
                        <img src="{{ asset('storage/' . $featuredArticle->image) }}" alt="{{ $featuredArticle->title }}" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center text-zinc-700">
                            <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M4 5h16v14H4zM8 9h8M8 13h6"/></svg>
                        </div>
                    @endif
                    <span class="absolute left-4 top-4 inline-flex items-center gap-2 rounded-full border border-[#D4AF37]/40 bg-[#080808]/85 px-3 py-1.5 text-[9px] font-bold uppercase tracking-[0.18em] text-[#F5D76E] backdrop-blur-sm sm:left-5 sm:top-5">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#D4AF37]" aria-hidden="true"></span>
                        Featured article
                    </span>
                    <span class="editorial-image-vignette pointer-events-none absolute inset-0" aria-hidden="true"></span>
                </a>
                <div class="p-5 sm:p-7">
                    <p class="flex flex-wrap items-center gap-x-3 gap-y-1 text-[10px] font-semibold uppercase tracking-[0.14em] text-zinc-500">
                        <time datetime="{{ $featuredArticle->created_at?->toDateString() }}">{{ $featuredArticle->created_at?->translatedFormat('d F Y') }}</time>
                        <span class="h-1 w-1 rounded-full bg-[#D4AF37]" aria-hidden="true"></span>
                        {{ $featuredArticleMinutes }} menit baca
                    </p>
                    <h3 class="mt-3 text-xl font-extrabold leading-snug text-white transition group-hover:text-[#F5D76E] sm:text-2xl">{{ $featuredArticle->title }}</h3>
                    <p class="mt-3 line-clamp-3 text-sm leading-7 text-zinc-400">{{ Str::limit(strip_tags($featuredArticle->content), 180) }}</p>
                    <a href="{{ route('articles.show', $featuredArticle->id) }}" class="mt-5 inline-flex min-h-10 items-center gap-2 text-sm font-bold text-[#F5D76E]">
                        Baca artikel <span class="micro-arrow" aria-hidden="true">→</span>
                    </a>
                </div>
            </article>

            @if($homeArticles->count() > 1)
                <div class="editorial-secondary-list grid gap-4 @if($homeArticles->count() === 2) sm:grid-cols-1 editorial-secondary-single @else sm:grid-cols-2 @endif lg:col-span-2 lg:grid-cols-1">
                    @foreach($homeArticles->skip(1) as $article)
                        @php $articleMinutes = max(1, (int) ceil(str_word_count(strip_tags($article->content)) / 200)); @endphp
                        <article class="vellora-article-card editorial-secondary group overflow-hidden rounded-2xl border border-white/10 bg-[#0d0d0d]">
                            <a href="{{ route('articles.show', $article->id) }}" class="flex h-full gap-4 p-3" aria-label="Baca {{ $article->title }}">
                                <div class="relative aspect-square w-24 flex-none overflow-hidden rounded-xl bg-[#111111] sm:w-28 lg:w-24">
                                    @if(!empty($article->image) && Storage::disk('public')->exists($article->image))
                                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
                                    @else
                                        <div class="flex h-full items-center justify-center text-zinc-700">
                                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M4 5h16v14H4zM8 9h8M8 13h6"/></svg>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex min-w-0 flex-1 flex-col justify-center">
                                    <p class="text-[9px] font-semibold uppercase tracking-[0.12em] text-zinc-500">{{ $article->created_at?->translatedFormat('d F Y') }} <span aria-hidden="true">·</span> {{ $articleMinutes }} menit baca</p>
                                    <h3 class="mt-2 line-clamp-2 text-sm font-extrabold leading-5 text-white transition group-hover:text-[#F5D76E]">{{ $article->title }}</h3>
                                    <p class="mt-2 line-clamp-2 text-xs leading-5 text-zinc-500">{{ Str::limit(strip_tags($article->content), 95) }}</p>
                                    <span class="mt-2 text-xs font-bold text-[#D4AF37]">Baca artikel <span class="micro-arrow" aria-hidden="true">→</span></span>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
@endif

{{-- =========================================================
    FAQ
========================================================= --}}
@php
    $faqs = [
        ['Bagaimana cara memesan?', 'Pilih produk di katalog, buka halaman detailnya, lalu tekan tombol pesan via WhatsApp. Nama produk akan terisi otomatis di pesan.'],
        ['Apakah produk masih tersedia?', 'Status stok tampil di kartu produk dan halaman detail. Jika masih ragu, tanyakan langsung lewat WhatsApp.'],
        ['Bagaimana cara melihat detail produk?', 'Tekan tombol “Lihat Detail” pada kartu produk untuk melihat harga, stok, deskripsi, dan ulasan.'],
        ['Bagaimana cara menghubungi VELLORA?', 'Buka halaman Kontak untuk WhatsApp, Instagram, dan TikTok kami.'],
        ['Apakah saya bisa memberikan ulasan?', 'Bisa. Buka halaman detail produk, isi nama, pilih rating, lalu tulis ulasan Anda.'],
    ];
@endphp
<section id="faq" class="vellora-section relative bg-[#0b0b0b] py-16 md:py-20 lg:py-24">
    <div class="relative mx-auto max-w-3xl px-5 sm:px-8">
        <div class="mx-auto mb-10 max-w-2xl text-center">
            <span class="vellora-badge">FAQ</span>
            <h2 class="mt-5 text-3xl font-black tracking-tight text-white sm:text-4xl">Pertanyaan Umum</h2>
        </div>
        <div class="vr-faq divide-y divide-white/10 overflow-hidden rounded-2xl border border-[#D4AF37]/20 bg-[#080808]">
            @foreach($faqs as $i => $faq)
                <div class="faq-item">
                    <h3>
                        <button type="button" id="faq-q-{{ $i }}" class="faq-q flex w-full items-center justify-between gap-4 px-5 py-5 text-left text-sm font-bold text-white transition hover:text-[#F5D76E] sm:px-6 sm:text-base" aria-expanded="false" aria-controls="faq-a-{{ $i }}">
                            <span>{{ $faq[0] }}</span>
                            <span class="faq-icon flex h-8 w-8 flex-none items-center justify-center rounded-full border border-[#D4AF37]/25 text-lg font-normal text-[#F5D76E]" aria-hidden="true"></span>
                        </button>
                    </h3>
                    <div id="faq-a-{{ $i }}" class="faq-a" role="region" aria-labelledby="faq-q-{{ $i }}">
                        <div><p class="px-5 pb-5 text-sm leading-7 text-zinc-400 sm:px-6">{{ $faq[1] }}</p></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- =========================================================
    CTA
========================================================= --}}
<section id="kontak" class="vellora-cta relative overflow-hidden bg-[#050505] py-14 md:py-20">
    <span class="cta-frame pointer-events-none absolute right-0 top-0 h-24 w-24 border-r border-t border-[#D4AF37]/20 sm:right-8 sm:top-8 sm:h-32 sm:w-32" aria-hidden="true"></span>
    <span class="cta-frame pointer-events-none absolute bottom-0 left-0 h-24 w-24 border-b border-l border-[#D4AF37]/20 sm:bottom-8 sm:left-8 sm:h-32 sm:w-32" aria-hidden="true"></span>
    <div class="cta-glow pointer-events-none absolute inset-0" aria-hidden="true"></div>
    <div class="relative mx-auto grid max-w-7xl items-center gap-8 px-5 sm:px-8 lg:grid-cols-[1fr_auto] lg:px-12">
        <div>
            <span class="vellora-badge">HUBUNGI KAMI</span>
            <h2 class="mt-5 text-3xl font-black text-white sm:text-4xl lg:text-5xl">Punya Pertanyaan?</h2>
            <p class="mt-4 max-w-2xl text-sm leading-7 text-zinc-400 sm:text-base">Kami siap membantu Anda dengan cepat dan ramah untuk kebutuhan produk maupun informasi VELLORA.</p>
        </div>
        <a href="{{ route('contact') }}" class="inline-flex min-h-12 w-fit items-center justify-center gap-3 rounded-full bg-gradient-to-r from-[#B8860B] via-[#D4AF37] to-[#F5D76E] px-7 py-3.5 text-sm font-black text-[#080808] shadow-[0_0_24px_rgba(212,175,55,0.16)] transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_0_32px_rgba(212,175,55,0.24)] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#F5D76E]">
            Hubungi VELLORA <span aria-hidden="true">→</span>
        </a>
    </div>
</section>

@push('styles')
<style>
    .vellora-hero {
        min-height: calc(100vh - 76px);
        background-image: url("{{ asset('images/vellora-hero-background.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .vellora-gold-text {
        background: linear-gradient(120deg, #B8860B 0%, #D4AF37 38%, #FFF0A6 52%, #F5D76E 68%, #B8860B 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        filter: drop-shadow(0 0 26px rgba(212,175,55,.18));
    }
    .vellora-badge {
        display:inline-flex; align-items:center; justify-content:center;
        border:1px solid rgba(212,175,55,.62); border-radius:999px;
        padding:.55rem .9rem; color:#F5D76E; background:rgba(212,175,55,.045);
        font-size:.68rem; font-weight:800; letter-spacing:.22em; text-transform:uppercase;
        box-shadow:0 0 24px rgba(212,175,55,.08); backdrop-filter:blur(10px);
    }
    .vellora-circuit {
        background-image:
            linear-gradient(90deg, transparent 0 8%, rgba(212,175,55,.12) 8.1% 8.2%, transparent 8.3% 18%, rgba(212,175,55,.08) 18.1% 18.2%, transparent 18.3% 100%),
            linear-gradient(0deg, transparent 0 14%, rgba(212,175,55,.08) 14.1% 14.2%, transparent 14.3% 30%, rgba(212,175,55,.06) 30.1% 30.2%, transparent 30.3% 100%);
        background-size:520px 360px, 420px 300px;
        mask-image:linear-gradient(to right, black, transparent 32%, transparent 68%, black);
        -webkit-mask-image:linear-gradient(to right, black, transparent 32%, transparent 68%, black);
    }
    .hero-float { z-index:5; }
    .hero-object { transform-style:preserve-3d; }
    /* ===== 4 premium 3D objects (CSS 3D: ekstrusi, bevel, rim light) ===== */
    .h3d { --u:calc(var(--s) / 100); position:absolute; z-index:5; width:var(--s); height:var(--s); perspective:1100px; pointer-events:none; display:none;
        animation:h3dFloat var(--dur) ease-in-out var(--delay) infinite; scale:calc(1 + var(--hv,0) * .045); transition:translate .35s ease-out, scale .35s ease-out; }
    .h3d--va   { --s:clamp(124px,11.8vw,170px); --dur:9s;   --delay:-1s;   --amp:12px; --rot:.8deg;  --tx:14deg;  --ty:-26deg; --spin:h3dSwayY; --sdur:11s; left:2.5vw; top:12%; }
    .h3d--chip { --s:clamp(80px,7.4vw,108px);   --dur:7.2s; --delay:-3.5s; --amp:9px;  --rot:-.8deg; --tx:-18deg; --ty:22deg;  --spin:h3dSwayX; --sdur:8s;  left:7vw;    bottom:14%; }
    .h3d--cube { --s:clamp(136px,10vw,178px);   --dur:8.4s; --delay:-5s;   --amp:10px; --rot:.8deg;  --tx:-22deg; --ty:34deg;  --spin:h3dTurn; --sdur:18s; right:7vw;  top:9%; }
    .h3d--emb  { --s:clamp(140px,12.9vw,188px); --dur:10s;  --delay:-2s;   --amp:13px; --rot:-.8deg; --tx:16deg;  --ty:-26deg; --spin:h3dTilt; --sdur:9s;  right:2.5vw; bottom:14%; }
    @media (min-width:768px)  { .h3d--va, .h3d--emb { display:block; } }
    @media (min-width:1200px) { .h3d--chip, .h3d--cube { display:block; } }
    @media (max-width:1199px) { .h3d--va { --s:clamp(96px,12vw,128px); left:1.5vw; } .h3d--emb { --s:clamp(104px,13vw,140px); right:1.5vw; } }
    @keyframes h3dFloat { 0%,100% { transform:translate3d(0,0,0) rotate(0deg); } 50% { transform:translate3d(0,calc(var(--amp) * -1),0) rotate(var(--rot)); } }
    @keyframes h3dSwayY { from { transform:rotateY(-7deg); } to { transform:rotateY(7deg); } }
    @keyframes h3dSwayX { from { transform:rotateX(-6deg) rotateZ(-1deg); } to { transform:rotateX(6deg) rotateZ(1deg); } }
    @keyframes h3dTurn  { from { transform:rotateY(-16deg) rotateX(-3deg); } to { transform:rotateY(16deg) rotateX(3deg); } }
    @keyframes h3dTilt  { from { transform:rotateZ(-3deg) rotateY(-5deg); } to { transform:rotateZ(3deg) rotateY(5deg); } }
    @keyframes h3dFloor { 0%,100% { transform:scale(1); opacity:1; } 50% { transform:scale(.86); opacity:.7; } }
    @keyframes h3dPulse { 0%,100% { opacity:.55; } 50% { opacity:1; } }
    .h3d-aura { position:absolute; inset:-24%; border-radius:50%; background:radial-gradient(circle, rgba(212,175,55,calc(.10 + var(--hv,0) * .10)), transparent 62%); }
    .h3d-tilt { position:absolute; inset:0; transform-style:preserve-3d; transform:rotateX(calc(var(--tx) + var(--prx,0deg))) rotateY(calc(var(--ty) + var(--pry,0deg) + var(--hv,0) * 4deg)); transition:transform .6s cubic-bezier(.16,1,.3,1); }
    .h3d-spin { position:absolute; inset:0; transform-style:preserve-3d; animation:var(--spin) var(--sdur) ease-in-out var(--delay) infinite alternate; }
    .h3d-floor { position:absolute; left:12%; right:12%; bottom:-22%; height:11%; background:radial-gradient(ellipse, rgba(0,0,0,.75), transparent 70%); animation:h3dFloor var(--dur) ease-in-out var(--delay) infinite; }
    /* ketebalan: lapisan emas gelap bertumpuk di belakang muka */
    .h3d-ext { position:absolute; inset:0; border-radius:var(--r,22%); background:linear-gradient(135deg,#8A6A18,#2a1d05 55%,#0B0B0B); box-shadow:inset 0 0 0 1px rgba(255,223,0,.22); transform:translateZ(calc(var(--z) * var(--u) * -1)); }
    .h3d-ext--die { inset:23%; border-radius:9%; transform:translateZ(calc(var(--u) * (var(--z) + 1.2))); background:linear-gradient(135deg,#5e4312,#1a1204); }
    .h3d-plate { position:absolute; inset:0; border-radius:var(--r,22%); transform:translateZ(calc(var(--u) * .5)); border:calc(var(--u) * 1.5) solid transparent;
        background:linear-gradient(150deg,#0B0B0B 0%,#070707 50%,#030303 100%) padding-box, linear-gradient(135deg,#FFDF00 0%,#8A6A18 30%,#D4AF37 55%,#8A6A18 80%,#FFDF00 100%) border-box;
        box-shadow:inset 0 calc(var(--u) * -14) calc(var(--u) * 20) rgba(0,0,0,.72), inset calc(var(--u) * 4) calc(var(--u) * 5) calc(var(--u) * 10) rgba(212,175,55,.15), inset calc(var(--u) * -2) calc(var(--u) * -2) calc(var(--u) * 4) rgba(255,223,0,.10); }
    .h3d-plate::before { content:""; position:absolute; inset:0; border-radius:inherit; background:linear-gradient(125deg, rgba(255,223,0,calc(.14 + var(--hv,0) * .12)), transparent 38%), linear-gradient(60deg, transparent 62%, rgba(212,175,55,.07) 78%, transparent 90%); }
    .h3d-plate::after { content:""; position:absolute; inset:calc(var(--u) * 5); border-radius:calc(var(--r,22%) * .7); border:1px solid rgba(212,175,55,.18); }
    /* VA: logo emas diekstrusi di atas pelat obsidian */
    .h3d-g { position:absolute; inset:0; display:flex; align-items:center; justify-content:center; transform:translateZ(calc(var(--z) * var(--u))); }
    .h3d-g img { width:78%; height:auto; display:block; }
    .h3d-g--dark img { filter:brightness(.3) sepia(1) saturate(1.6); }
    .h3d-g--top img { filter:drop-shadow(0 calc(var(--u) * 1.5) calc(var(--u) * 2) rgba(0,0,0,.65)) saturate(1.05); }
    /* lapisan SVG (chip, emblem) */
    .h3d-layer { position:absolute; inset:0; width:100%; height:100%; overflow:visible; transform:translateZ(calc(var(--z) * var(--u))); }
    .h3d-layer--top { filter:drop-shadow(0 0 calc(var(--u) * 1.4) rgba(212,175,55,.35)); }
    /* chip */
    .h3d-die { position:absolute; inset:23%; border-radius:9%; transform:translateZ(calc(var(--u) * 5.2)); border:calc(var(--u) * 1) solid transparent;
        background:radial-gradient(circle at 50% 50%, rgba(212,175,55,.2), transparent 55%), linear-gradient(145deg,#0B0B0B,#030303) padding-box, linear-gradient(135deg,#FFDF00,#8A6A18 50%,#D4AF37) border-box;
        box-shadow:inset 0 0 calc(var(--u) * 8) rgba(0,0,0,.8); }
    .h3d-pulse { animation:h3dPulse 3.2s ease-in-out infinite; }
    /* cube: balok obsidian solid, tepi emas berbevel, shading per sisi, inti emas samar */
    .h3d-cf { position:absolute; left:17%; top:17%; width:66%; height:66%; border:calc(var(--u) * 2.4) solid transparent; border-radius:calc(var(--u) * 4);
        background:var(--fc,linear-gradient(145deg,#0B0B0B,#050505)) padding-box, linear-gradient(135deg,#FFDF00 0%,#8A6A18 28%,#D4AF37 50%,#8A6A18 75%,#FFDF00 100%) border-box;
        box-shadow:inset 0 0 calc(var(--u) * 10) rgba(0,0,0,.7); }
    .h3d-cf::before { content:""; position:absolute; inset:calc(var(--u) * 5); border-radius:calc(var(--u) * 2); border:1px solid rgba(212,175,55,.22); box-shadow:inset 0 0 calc(var(--u) * 6) rgba(212,175,55,.10); }
    .h3d-cf::after { content:""; position:absolute; inset:0; border-radius:inherit; background:radial-gradient(circle at 50% 50%, rgba(212,175,55,.16), transparent 58%); }
    .h3d-cf--f { --fc:linear-gradient(145deg,#1b1407,#0B0B0B 48%,#050505); transform:translateZ(calc(var(--s) * .33)); }
    .h3d-cf--b { --fc:linear-gradient(145deg,#0B0B0B,#030303); transform:rotateY(180deg) translateZ(calc(var(--s) * .33)); }
    .h3d-cf--r { --fc:linear-gradient(145deg,#0B0B0B,#030303); transform:rotateY(90deg) translateZ(calc(var(--s) * .33)); }
    .h3d-cf--l { --fc:linear-gradient(145deg,#2a1d07,#120d04 55%,#070707); transform:rotateY(-90deg) translateZ(calc(var(--s) * .33)); }
    .h3d-cf--t { --fc:linear-gradient(145deg,#3d2c0a,#17100a 55%,#0B0B0B); transform:rotateX(90deg) translateZ(calc(var(--s) * .33)); }
    .h3d-cf--d { --fc:linear-gradient(145deg,#070707,#020202); transform:rotateX(-90deg) translateZ(calc(var(--s) * .33)); }
    .h3d-core { position:absolute; left:50%; top:50%; width:calc(var(--u) * 11); height:calc(var(--u) * 11); margin:calc(var(--u) * -5.5) 0 0 calc(var(--u) * -5.5); border-radius:50%; background:radial-gradient(circle,#FFDF00 0 22%,rgba(212,175,55,.5) 46%,transparent 72%); opacity:.7; animation:h3dPulse 3.6s ease-in-out infinite; }
    .h3d-cv { position:absolute; left:50%; top:50%; width:calc(var(--u) * 8); height:calc(var(--u) * 8); margin:calc(var(--u) * -4) 0 0 calc(var(--u) * -4); border-radius:32%; background:radial-gradient(circle at 32% 30%,#FFDF00,#D4AF37 45%,#6b4f0e); box-shadow:0 calc(var(--u) * 1) calc(var(--u) * 2) rgba(0,0,0,.65);
        transform:translate3d(calc(var(--x) * var(--s) * .33), calc(var(--y) * var(--s) * .33), calc(var(--zz) * var(--s) * .33)); }
    @media (prefers-reduced-motion:reduce) { .h3d, .h3d-spin, .h3d-floor, .h3d-core, .h3d-pulse { animation:none !important; } .h3d, .h3d-tilt { transition:none; } }

    .vellora-gold-button { background:linear-gradient(120deg,#B8860B,#D4AF37 45%,#F5D76E); box-shadow:0 0 18px rgba(212,175,55,.16); transition:.3s ease; }
    .vellora-gold-button:hover { transform:translateY(-2px); box-shadow:0 0 26px rgba(212,175,55,.26); }
    .vellora-product-card, .vellora-feature-card, .vellora-review-card, .vellora-article-card { transition:transform .35s ease,border-color .35s ease,box-shadow .35s ease; }
    .vellora-product-card:hover, .vellora-feature-card:hover, .vellora-review-card:hover, .vellora-article-card:hover { transform:translateY(-5px); border-color:rgba(245,215,110,.62); box-shadow:0 24px 70px rgba(0,0,0,.42),0 0 34px rgba(212,175,55,.10); }
    .vellora-product-card { border:1px solid rgba(245,215,110,.20); border-radius:1.5rem; background:#080808; }
    .vellora-feature-card { border:1px solid rgba(245,215,110,.20); border-radius:1.5rem; background:#080808; padding:28px; }
    .vellora-feature-icon { display:flex; width:50px; height:50px; align-items:center; justify-content:center; border-radius:16px; border:1px solid rgba(212,175,55,.3); background:rgba(212,175,55,.07); color:#F5D76E; font-size:28px; box-shadow:0 0 24px rgba(212,175,55,.08); }
    .vellora-feature-card h3 { margin-top:20px; color:#fff; font-size:1.05rem; font-weight:800; }
    .vellora-feature-card p { margin-top:8px; color:#a1a1aa; font-size:.875rem; line-height:1.7; }
    .vellora-review-card { border:1px solid rgba(245,215,110,.20); border-radius:1.5rem; background:#080808; padding:28px; }
    .vellora-article-card { display:block; border:1px solid rgba(245,215,110,.20); border-radius:1.5rem; background:#080808; padding:12px 12px 24px; }
    .product-featured-card { display:grid; grid-template-columns:1fr; }
    .product-featured-image { min-height:240px; }
    .product-featured-card > div { background:linear-gradient(145deg,rgba(212,175,55,.035),transparent 54%); }
    .product-showcase-glow { background:radial-gradient(ellipse 38% 55% at 27% 55%,rgba(212,175,55,.075),transparent 72%),radial-gradient(ellipse 55% 65% at 100% 45%,rgba(212,175,55,.035),transparent 72%),linear-gradient(180deg,rgba(0,0,0,.08),rgba(0,0,0,.35)); }
    .product-showcase-grid { background-image:linear-gradient(rgba(212,175,55,.035) 1px,transparent 1px),linear-gradient(90deg,rgba(212,175,55,.035) 1px,transparent 1px); background-size:64px 64px; opacity:.22; mask-image:linear-gradient(90deg,transparent,black 30%,black 72%,transparent); -webkit-mask-image:linear-gradient(90deg,transparent,black 30%,black 72%,transparent); }
    .product-showcase-single { max-width:980px; margin-inline:auto; }
    .product-image-vignette { background:linear-gradient(180deg,rgba(0,0,0,.08),transparent 38%,rgba(0,0,0,.46)),linear-gradient(125deg,rgba(212,175,55,.085),transparent 32%); }
    .product-featured-card { box-shadow:0 22px 70px rgba(0,0,0,.38),inset 0 1px rgba(255,255,255,.025); }
    .product-supporting-list { align-content:start; }
    .product-supporting-list .vellora-product-card { padding:0; }
    .product-supporting-feature { min-height:140px; }
    .product-featured-card:hover,
    .editorial-feature:hover,
    .editorial-secondary:hover { border-color:rgba(212,175,55,.48); }
    .product-featured-card:hover { box-shadow:0 26px 76px rgba(0,0,0,.48),0 0 28px rgba(212,175,55,.07),inset 0 1px rgba(255,255,255,.035); }
    .product-detail-link { transition:background-color .3s ease,border-color .3s ease,color .3s ease; }
    .product-detail-link:hover { color:#F5D76E; }
    .micro-arrow { display:inline-block; transition:transform .25s ease-out; }
    a:hover .micro-arrow { transform:translateX(4px); }
    .about-feature-card { min-height:225px; border-color:rgba(212,175,55,.18); background:linear-gradient(155deg,rgba(255,255,255,.035),rgba(255,255,255,.012)); padding:20px; }
    .about-feature-card h3 { margin-top:24px; font-size:.95rem; }
    .about-feature-card p { font-size:.8rem; line-height:1.65; }
    .vellora-stats { border-top:1px solid rgba(212,175,55,.12); }
    .vellora-stat { position:relative; }
    .vellora-stat:nth-child(odd) { border-right:1px solid rgba(212,175,55,.12); }
    .vellora-stat:nth-child(n+3) { border-top:1px solid rgba(212,175,55,.12); }
    .vellora-timeline-line { position:absolute; z-index:0; left:22px; top:22px; bottom:22px; width:1px; background:linear-gradient(to bottom,rgba(212,175,55,.55),rgba(212,175,55,.12)); }
    .timeline-marker { z-index:1; }
    .vr-step { min-height:94px; }
    .editorial-feature { padding:0; }
    .editorial-feature-image { min-height:0; }
    .editorial-image-vignette { background:linear-gradient(180deg,rgba(0,0,0,.24),transparent 42%,rgba(0,0,0,.38)),linear-gradient(125deg,rgba(212,175,55,.07),transparent 36%); }
    .editorial-secondary { padding:0; }
    .editorial-secondary > a { min-height:140px; }
    .editorial-single { max-width:1040px; margin-inline:auto; }
    .editorial-single .editorial-feature-image { aspect-ratio:16 / 8.5; }
    .editorial-feature { box-shadow:0 22px 70px rgba(0,0,0,.38),inset 0 1px rgba(255,255,255,.025); }
    .editorial-feature:hover,
    .editorial-secondary:hover { box-shadow:0 26px 76px rgba(0,0,0,.48),0 0 28px rgba(212,175,55,.07),inset 0 1px rgba(255,255,255,.035); }
    .editorial-showcase-glow { background:radial-gradient(ellipse 38% 55% at 78% 34%,rgba(212,175,55,.06),transparent 72%),linear-gradient(90deg,rgba(0,0,0,.25),transparent 38%,rgba(0,0,0,.16)); }
    .editorial-secondary-list { align-content:start; }
    .faq-item { position:relative; transition:background-color .25s ease; }
    .faq-item:hover { background:rgba(255,255,255,.018); }
    .faq-item.open { background:rgba(212,175,55,.035); }
    .faq-item.open::before { position:absolute; inset:0 auto 0 0; width:2px; content:""; background:#D4AF37; }
    @media (max-width:1023px) { .vellora-hero { min-height:calc(100svh - 76px); } }
    @media (min-width:1024px) {
        .product-featured-card { grid-template-columns:1.05fr .95fr; }
        .product-featured-image { min-height:100%; }
        .vellora-stat:nth-child(odd) { border-right:0; }
        .vellora-stat:not(:last-child) { border-right:1px solid rgba(212,175,55,.12); }
        .vellora-stat:nth-child(n+3) { border-top:0; }
        .vellora-timeline-line { left:12.5%; right:12.5%; top:22px; bottom:auto; width:auto; height:1px; background:linear-gradient(to right,rgba(212,175,55,.12),rgba(212,175,55,.58) 50%,rgba(212,175,55,.12)); }
        .vr-step { min-height:0; }
        .editorial-secondary-list { grid-template-columns:1fr; }
        .product-supporting-single { align-content:stretch; grid-auto-rows:minmax(0,1fr); }
        .product-supporting-single .product-supporting-feature { height:100%; }
        .product-supporting-single .product-supporting-feature > a { flex-direction:column; gap:0; padding:12px; }
        .product-supporting-single .product-supporting-feature > a > div:first-child { width:100%; aspect-ratio:16 / 9; align-self:stretch; }
        .editorial-secondary-single { align-content:stretch; grid-auto-rows:minmax(0,1fr); }
        .editorial-secondary-single .editorial-secondary { height:100%; }
        .editorial-secondary-single .editorial-secondary > a { position:relative; display:block; height:100%; min-height:380px; padding:0; }
        .editorial-secondary-single .editorial-secondary > a::after { position:absolute; inset:30% 0 0; content:""; background:linear-gradient(180deg,transparent,rgba(5,5,5,.96)); }
        .editorial-secondary-single .editorial-secondary > a > div:first-child { position:absolute; inset:0; width:100%; height:100%; aspect-ratio:auto; border-radius:0; }
        .editorial-secondary-single .editorial-secondary > a > div:last-child { position:absolute; z-index:1; right:0; bottom:0; left:0; padding:20px; }
    }
    @media (max-width:640px) {
        .vellora-badge { font-size:.58rem; letter-spacing:.16em; }
        .vellora-hero { min-height:calc(100svh - 76px); }
        .about-feature-card { min-height:0; }
        .vellora-stat { padding:18px 10px; }
        .product-featured-card > div { padding:1.25rem; }
        .editorial-single .editorial-feature-image { aspect-ratio:16 / 9; }
    }
    @media (prefers-reduced-motion:reduce) {
        .hero-float,.vellora-gold-button,.vellora-product-card,.vellora-feature-card,.vellora-review-card,.vellora-article-card { animation:none !important; transition:none !important; }
        .vellora-product-card img,.vellora-article-card img { transform:none !important; }
        .micro-arrow { transition:none; }
    }

    /* ===== UPGRADE: scroll & motion effects ===== */
    html { scroll-behavior:smooth; }

    .vellora-hero::before { content:""; position:absolute; inset:0; z-index:0; pointer-events:none; background:radial-gradient(ellipse 60% 55% at 50% 50%, rgba(0,0,0,.34), rgba(0,0,0,0) 70%); }

    /* hero entrance */
    @keyframes vrRise { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:none; filter:none; } }
    .vellora-hero .z-20 > * { animation:vrRise .7s cubic-bezier(.16,1,.3,1) both; }
    .vellora-hero .z-20 > *:nth-child(1) { animation-delay:.10s; }
    .vellora-hero .z-20 > *:nth-child(2) { animation-delay:.28s; }
    .vellora-hero .z-20 > *:nth-child(3) { animation-delay:.46s; }
    .vellora-hero .z-20 > *:nth-child(4) { animation-delay:.62s; }
    .vellora-hero .z-20 > *:nth-child(5) { animation-delay:.78s; }
    .vellora-hero .z-20 { will-change:transform,opacity; }


    /* scroll cue */
    .vr-cue { position:absolute; left:50%; bottom:26px; z-index:20; transform:translateX(-50%); display:flex; flex-direction:column; align-items:center; gap:8px; font-size:9px; letter-spacing:.34em; color:#a1a1aa; text-transform:uppercase; transition:opacity .3s; }
    .vr-cue i { display:block; width:22px; height:36px; border:1.5px solid rgba(245,215,110,.6); border-radius:999px; position:relative; }
    .vr-cue i::after { content:""; position:absolute; left:50%; top:7px; width:3px; height:7px; margin-left:-1.5px; border-radius:3px; background:#F5D76E; animation:vrWheel 1.6s ease-in-out infinite; }
    @keyframes vrWheel { 0% { opacity:0; transform:translateY(0); } 30% { opacity:1; } 100% { opacity:0; transform:translateY(14px); } }

    /* scroll reveal (only active when JS runs) */
    .vr-js [data-vr] { opacity:0; transition:opacity .7s cubic-bezier(.16,1,.3,1), transform .7s cubic-bezier(.16,1,.3,1); transition-delay:var(--vr-d,0ms); will-change:transform,opacity; }
    .vr-js [data-vr="up"]    { transform:translateY(22px); }
    .vr-js [data-vr="left"]  { transform:translateX(-22px); }
    .vr-js [data-vr="right"] { transform:translateX(22px); }
    .vr-js [data-vr="zoom"]  { transform:scale(.97); }
    .vr-js [data-vr].vr-in   { opacity:1; transform:none; }

    /* section divider line that draws itself */
    .vellora-section, .vellora-cta { position:relative; }
    .vellora-section::before, .vellora-cta::before { content:""; position:absolute; top:0; left:50%; height:1px; width:0; transform:translateX(-50%); background:linear-gradient(90deg,transparent,#F5D76E,transparent); box-shadow:0 0 18px rgba(245,215,110,.6); transition:width 1.4s cubic-bezier(.16,1,.3,1); z-index:2; }
    .vellora-section.vr-in::before, .vellora-cta.vr-in::before { width:min(70%,760px); }

    /* headline underline accent */
    .vellora-section h2 { position:relative; }
    .vr-js .vellora-section h2::after { content:""; display:block; height:2px; width:0; margin:16px auto 0; background:linear-gradient(90deg,#B8860B,#F5D76E); border-radius:2px; transition:width 1s .35s cubic-bezier(.16,1,.3,1); }
    #tentang h2::after { margin-left:0; }
    .vr-js .vr-in h2::after, .vr-js h2.vr-in::after { width:72px; }

    /* premium card hover: 3D tilt + cursor spotlight */
    .vellora-product-card, .vellora-feature-card, .vellora-review-card, .vellora-article-card { position:relative; transform-style:preserve-3d; }
    .vr-tilt { transition:transform .15s ease-out, border-color .35s, box-shadow .35s !important; }
    .vr-tilt.vr-tilt-off { transition:transform .6s cubic-bezier(.16,1,.3,1), border-color .35s, box-shadow .35s !important; }
    .vr-tilt::after { content:""; position:absolute; inset:0; border-radius:inherit; pointer-events:none; opacity:0; transition:opacity .3s; background:radial-gradient(420px circle at var(--mx,50%) var(--my,50%), rgba(245,215,110,.09), transparent 45%); }
    .vr-tilt:hover::after { opacity:1; }
    .vellora-product-card:hover, .vellora-feature-card:hover, .vellora-review-card:hover, .vellora-article-card:hover { box-shadow:0 18px 50px rgba(0,0,0,.45); }
    .vellora-feature-icon { transition:transform .5s cubic-bezier(.16,1,.3,1); }
    .vellora-feature-card:hover .vellora-feature-icon { transform:translateY(-4px) rotate(-8deg) scale(1.08); }


    /* FAQ accordion */
    .faq-a { display:grid; grid-template-rows:0fr; transition:grid-template-rows .28s ease; }
    .faq-a > div { overflow:hidden; }
    .faq-item.open .faq-a { grid-template-rows:1fr; }
    .faq-icon::before { content:"+"; }
    .faq-item.open .faq-icon::before { content:"−"; }
    .faq-item.open .faq-icon { border-color:rgba(212,175,55,.65); background:rgba(212,175,55,.08); }
    .faq-q:focus-visible { outline:2px solid #D4AF37; outline-offset:-4px; }
    .cta-glow { background:radial-gradient(ellipse 42% 95% at 72% 50%,rgba(212,175,55,.095),transparent 72%); }
    @media (prefers-reduced-motion:reduce) { .faq-a, .faq-item { transition:none; } }
    /* ===== HERO: mobile (< 768px) — konten dulu, dekorasi seperlunya ===== */
    @media (max-width:767px) {
        .vellora-hero { min-height:0 !important; background-position:50% 60%; }
        .vellora-hero > .relative.z-10 { min-height:0 !important; align-items:flex-start; padding-top:2.25rem !important; padding-bottom:6.5rem !important; }
        .vellora-hero::after { content:""; position:absolute; left:0; right:0; bottom:0; height:42%; z-index:1; pointer-events:none; background:radial-gradient(ellipse 80% 100% at 50% 100%, rgba(212,175,55,.16), transparent 70%); }
        .vr-cue { bottom:14px; }
    }
    /* indikator scroll */
    .vr-cue::before { content:""; width:1px; height:26px; background:linear-gradient(to bottom,transparent,#D4AF37); transform-origin:bottom; animation:vrLine 2.4s ease-in-out infinite; }
    @keyframes vrLine { 0%,100% { opacity:.35; transform:scaleY(.7); } 50% { opacity:.9; transform:scaleY(1); } }
    @media (prefers-reduced-motion:reduce) {
        html { scroll-behavior:auto; }
        .vr-cue::before { animation:none !important; }
        .vr-js [data-vr] { opacity:1 !important; transform:none !important; filter:none !important; transition:none !important; }
        .vellora-hero .z-20 > *, .vr-cue i::after { animation:none !important; }
        .vellora-section::before, .vellora-cta::before { width:min(70%,760px); transition:none; }
        .vr-js .vellora-section h2::after { width:72px; transition:none; }
    }
</style>
@endpush


<script>
(function () {
    var root = document.documentElement;
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var coarse = window.matchMedia('(pointer: coarse)').matches;
    root.classList.add('vr-js');


    /* scroll cue */
    var hero = document.querySelector('.vellora-hero');
    var cue = null;
    if (hero) { cue = document.createElement('div'); cue.className = 'vr-cue'; cue.setAttribute('aria-hidden', 'true'); cue.innerHTML = '<i></i>Scroll'; hero.appendChild(cue); }

    /* auto-tag elements for reveal (no markup edits needed) */
    function tag(sel, type, step) {
        document.querySelectorAll(sel).forEach(function (el, i) {
            if (el.hasAttribute('data-vr')) return;
            el.setAttribute('data-vr', type);
            el.style.setProperty('--vr-d', ((step || 0) * (i % 6)) + 'ms');
        });
    }
    tag('.vellora-section .vellora-badge, .vellora-cta .vellora-badge', 'up', 0);
    tag('.vellora-section h2, .vellora-cta h2', 'up', 0);
    tag('.vellora-section .mx-auto.mb-12 > p, .vellora-cta p', 'up', 0);
    tag('.vellora-product-card', 'up', 110);
    tag('.vellora-review-card', 'zoom', 140);
    tag('.vellora-article-card', 'up', 120);
    tag('#tentang .grid > div:first-child', 'left', 0);
    tag('#tentang .vellora-feature-card', 'right', 130);
    tag('#kenapa .vellora-feature-card', 'up', 90);
    tag('#cara-kerja .vr-step', 'up', 100);
    tag('#faq .vr-faq', 'up', 0);
    tag('.vellora-cta a[href]', 'zoom', 0);
    tag('#produk-unggulan .mt-12, #artikel-terbaru .mt-12', 'up', 0);

    var items = document.querySelectorAll('[data-vr]');
    var sections = document.querySelectorAll('.vellora-section, .vellora-cta');
    if ('IntersectionObserver' in window && !reduce) {
        var io = new IntersectionObserver(function (es) {
            es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('vr-in'); io.unobserve(e.target); } });
        }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
        items.forEach(function (el) { io.observe(el); });
        sections.forEach(function (el) { io.observe(el); });
    } else {
        items.forEach(function (el) { el.classList.add('vr-in'); });
        sections.forEach(function (el) { el.classList.add('vr-in'); });
    }
    /* section h2 underline follows its own reveal */
    document.querySelectorAll('.vellora-section h2, .vellora-cta h2').forEach(function (h) {
        var o = new MutationObserver(function () { if (h.classList.contains('vr-in')) h.parentElement.classList.add('vr-in'); });
        o.observe(h, { attributes: true, attributeFilter: ['class'] });
    });

    /* scroll-linked motion: progress, hero parallax, drifting glows */
    var floats = document.querySelectorAll('.hero-float');
    var content = document.querySelector('.vellora-hero .z-20');
    var glows = document.querySelectorAll('.vellora-section-glow, #ulasan > .blur-\\[120px\\], .vellora-cta > .blur-\\[120px\\]');
    var px = 0, py = 0, cx = -9999, cy = -9999, req = function () {};
    function frame() {
        var y = window.scrollY || window.pageYOffset;
        if (reduce) return;
        if (hero) {
            var h = hero.offsetHeight || 1, p = Math.min(Math.max(y / h, 0), 1);
            if (content) { content.style.translate = '0 ' + (y * 0.10) + 'px'; content.style.opacity = String(1 - p * 0.55); }
            floats.forEach(function (f) {
                var w = f.offsetWidth; if (!w) return;
                var d = parseFloat(f.dataset.depth) || 1;
                f.style.translate = (px * 10 * d) + 'px ' + (y * 0.1 * d + py * 7 * d) + 'px';
                f.style.setProperty('--prx', (-py * 4 * d) + 'deg'); f.style.setProperty('--pry', (px * 5 * d) + 'deg');
                var dx = cx - (f.offsetLeft + w / 2), dy = cy - (f.offsetTop + f.offsetHeight / 2);
                f.style.setProperty('--hv', Math.max(0, 1 - Math.sqrt(dx * dx + dy * dy) / (w * 0.95)).toFixed(2));
            });
            if (cue) cue.style.opacity = String(Math.max(0, 1 - p * 5));
        }
        glows.forEach(function (g) {
            var r = g.parentElement.getBoundingClientRect();
            g.style.translate = '0 ' + ((r.top + r.height / 2 - window.innerHeight / 2) * -0.12) + 'px';
        });
    }
    document.addEventListener('DOMContentLoaded', function () {
        if (window.velloraSchedule) req = window.velloraSchedule(frame);
        window.addEventListener('resize', req);
        frame();
    });
    var box = document.querySelector('.vellora-hero > .relative.z-10');
    if (box && !coarse && !reduce) {
        box.addEventListener('pointermove', function (e) {
            var r = box.getBoundingClientRect();
            cx = e.clientX - r.left; cy = e.clientY - r.top;
            px = (cx / r.width - 0.5) * 2; py = (cy / r.height - 0.5) * 2; req();
        }, { passive: true });
        box.addEventListener('pointerleave', function () { px = 0; py = 0; cx = cy = -9999; req(); });
    }

    /* card tilt + spotlight (mouse only) */
    if (!coarse && !reduce) {
        document.querySelectorAll('.vellora-product-card, .vellora-feature-card, .vellora-review-card, .vellora-article-card').forEach(function (c) {
            c.classList.add('vr-tilt');
            c.addEventListener('mousemove', function (e) {
                var r = c.getBoundingClientRect(), x = (e.clientX - r.left) / r.width, y = (e.clientY - r.top) / r.height;
                c.classList.remove('vr-tilt-off');
                c.style.setProperty('--mx', (x * 100) + '%'); c.style.setProperty('--my', (y * 100) + '%');
                c.style.transform = 'perspective(900px) rotateX(' + ((0.5 - y) * 3) + 'deg) rotateY(' + ((x - 0.5) * 4) + 'deg) translateY(-4px)';
            });
            c.addEventListener('mouseleave', function () { c.classList.add('vr-tilt-off'); c.style.transform = ''; });
        });
    }
    /* FAQ accordion (aksesibel: tombol + aria-expanded, keyboard native) */
    document.querySelectorAll('.faq-q').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item = btn.closest('.faq-item'), open = !item.classList.contains('open');
            document.querySelectorAll('#faq .faq-item.open').forEach(function (other) {
                if (other === item) return;
                other.classList.remove('open');
                var otherButton = other.querySelector('.faq-q');
                if (otherButton) otherButton.setAttribute('aria-expanded', 'false');
            });
            item.classList.toggle('open', open);
            btn.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
    });

    /* Terakhir dilihat */
    document.addEventListener('DOMContentLoaded', function () {
        var sec = document.getElementById('terakhir-dilihat');
        if (!sec || !window.velloraRecent) return;
        if (window.velloraRecent.render(sec.querySelector('[data-recent-list]'), null, 4) > 0) sec.hidden = false;
    });
})();
</script>

@endsection
