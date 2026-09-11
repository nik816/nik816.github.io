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

    {{-- circuit background --}}
    <div class="vellora-circuit pointer-events-none absolute inset-0 opacity-70" aria-hidden="true"></div>
    <div class="vellora-grid pointer-events-none absolute inset-0" aria-hidden="true"></div>

    {{-- golden energy trails --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <svg class="vellora-trails absolute left-1/2 top-[53%] h-[620px] w-[1300px] -translate-x-1/2 -translate-y-1/2" viewBox="0 0 1300 620" fill="none">
            <defs>
                <linearGradient id="heroGoldTrail" x1="0" y1="0" x2="1300" y2="620" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#D4AF37" stop-opacity="0"/>
                    <stop offset=".28" stop-color="#D4AF37" stop-opacity=".18"/>
                    <stop offset=".5" stop-color="#F5D76E" stop-opacity=".95"/>
                    <stop offset=".72" stop-color="#D4AF37" stop-opacity=".18"/>
                    <stop offset="1" stop-color="#D4AF37" stop-opacity="0"/>
                </linearGradient>
                <filter id="trailGlow" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur stdDeviation="6" result="blur"/>
                    <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                </filter>
            </defs>
            <path class="trail-path trail-one" d="M-90 430 C170 130 430 130 640 330 C850 530 1060 470 1390 150" stroke="url(#heroGoldTrail)" stroke-width="2" filter="url(#trailGlow)"/>
            <path class="trail-path trail-two" d="M-80 170 C210 500 430 500 650 300 C850 115 1090 160 1380 450" stroke="url(#heroGoldTrail)" stroke-width="1.2" filter="url(#trailGlow)"/>
            <path class="trail-path trail-three" d="M-50 510 C260 330 440 380 660 450 C880 520 1090 350 1360 230" stroke="url(#heroGoldTrail)" stroke-width=".9" opacity=".65"/>
        </svg>
    </div>

    <div class="relative z-10 mx-auto flex min-h-[calc(100vh-76px)] max-w-7xl items-center justify-center px-5 py-24 sm:px-8 lg:px-12">
        {{-- left floating object --}}
        <div class="hero-float hero-float-left pointer-events-none absolute left-2 top-[53%] hidden -translate-y-1/2 lg:block xl:left-8" aria-hidden="true">
            <div class="hero-object-glow absolute -inset-10 rounded-[48px] bg-[#D4AF37]/[0.12] blur-3xl"></div>
            <div class="hero-object hero-object-va relative flex h-[250px] w-[250px] items-center justify-center overflow-hidden rounded-[42px] border border-[#F5D76E]/70 bg-gradient-to-br from-[#4b4b4b] via-[#171717] to-[#050505] shadow-[0_0_55px_rgba(212,175,55,.28),inset_0_0_30px_rgba(255,255,255,.08)]">
                <div class="absolute inset-2 rounded-[36px] border border-white/10"></div>
                <div class="absolute -left-12 top-4 h-32 w-56 rotate-[-35deg] bg-white/10 blur-2xl"></div>
                <span class="vellora-logo-3d vellora-logo-3d--hero relative z-10" aria-hidden="true">
                    <img src="{{ asset('images/vellora-va-navbar.png') }}" alt="" class="h-full w-full object-contain">
                </span>
                <div class="absolute bottom-4 left-1/2 h-px w-24 -translate-x-1/2 bg-gradient-to-r from-transparent via-[#F5D76E]/70 to-transparent"></div>
            </div>
        </div>

        {{-- right floating object --}}
        <div class="hero-float hero-float-right pointer-events-none absolute right-2 top-[49%] hidden -translate-y-1/2 lg:block xl:right-8" aria-hidden="true">
            <div class="hero-object-glow absolute -inset-10 rounded-[48px] bg-[#D4AF37]/[0.10] blur-3xl"></div>
            <div class="hero-object hero-object-emblem relative flex h-[235px] w-[235px] items-center justify-center overflow-hidden rounded-[40px] border border-[#F5D76E]/65 bg-gradient-to-br from-[#5a5a5a] via-[#1b1b1b] to-[#050505] shadow-[0_0_55px_rgba(212,175,55,.24),inset_0_0_32px_rgba(255,255,255,.08)]">
                <div class="absolute inset-2 rounded-[34px] border border-white/10"></div>
                <div class="absolute -right-14 top-0 h-40 w-64 rotate-[32deg] bg-white/10 blur-3xl"></div>
                <div class="vellora-emblem relative z-10 flex h-28 w-28 items-center justify-center">
                    <span class="absolute h-20 w-20 rotate-45 rounded-[18px] border-[3px] border-[#F5D76E] shadow-[0_0_22px_rgba(245,215,110,.3)]"></span>
                    <span class="absolute h-14 w-14 rotate-45 rounded-[10px] border-2 border-[#D4AF37]"></span>
                    <span class="relative text-5xl font-black text-[#F5D76E] drop-shadow-[0_0_12px_rgba(245,215,110,.35)]">V</span>
                </div>
                <div class="absolute bottom-4 left-1/2 h-px w-20 -translate-x-1/2 bg-gradient-to-r from-transparent via-[#F5D76E]/70 to-transparent"></div>
            </div>
        </div>

        {{-- center content --}}
        <div class="relative z-20 mx-auto w-full max-w-4xl text-center">
            <div class="mb-7 inline-flex items-center gap-3 rounded-full border border-[#D4AF37]/80 bg-black/40 px-5 py-2 text-[10px] font-bold uppercase tracking-[0.28em] text-[#F5D76E] shadow-[0_0_25px_rgba(212,175,55,.16)] backdrop-blur-md sm:text-xs">
                <span class="h-2 w-2 rounded-full bg-[#F5D76E] shadow-[0_0_12px_rgba(245,215,110,.9)]"></span>
                PLATFORM JUAL BELI TERPERCAYA
                <span class="h-2 w-2 rounded-full bg-[#F5D76E] shadow-[0_0_12px_rgba(245,215,110,.9)]"></span>
            </div>

            <h1 class="text-[clamp(3rem,7vw,6.8rem)] font-black leading-[.92] tracking-[-0.055em] drop-shadow-[0_8px_35px_rgba(0,0,0,.55)]">
                <span class="block text-white">Discover Something</span>
                <span class="vellora-gold-text block">Better</span>
            </h1>

            <p class="mx-auto mt-8 max-w-2xl text-base leading-7 text-zinc-300 sm:text-lg sm:leading-8">
                Temukan produk dan informasi terbaik dari <span class="font-semibold text-white">VELLORA</span> — cepat, aman, dan terpercaya.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
                <a href="{{ route('products.katalog') }}" class="vellora-gold-button inline-flex min-h-12 w-full items-center justify-center gap-2 rounded-full px-8 py-3 text-sm font-extrabold text-[#080808] sm:w-auto">
                    Lihat Produk
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
                <a href="#tentang" class="inline-flex min-h-12 w-full items-center justify-center rounded-full border border-[#D4AF37]/75 bg-black/35 px-8 py-3 text-sm font-bold text-white backdrop-blur-md transition hover:-translate-y-0.5 hover:bg-[#D4AF37]/10 hover:text-[#F5D76E] sm:w-auto">
                    Jelajahi Vellora
                </a>
            </div>

            <div class="mx-auto mt-12 flex max-w-md items-center justify-center gap-4 text-[9px] uppercase tracking-[0.34em] text-zinc-500">
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
<section id="produk-unggulan" class="vellora-section relative overflow-hidden bg-[#0b0b0d] py-28 md:py-36 lg:py-40">
    <div class="vellora-section-glow pointer-events-none absolute left-1/2 top-0 h-64 w-[720px] -translate-x-1/2 rounded-full bg-[#D4AF37]/[0.055] blur-[120px]"></div>
    <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="mx-auto mb-12 max-w-2xl text-center">
            <span class="vellora-badge">PRODUK UNGGULAN</span>
            <h2 class="mt-5 text-3xl font-black tracking-tight text-white sm:text-4xl">Pilihan Terbaik Untuk Anda</h2>
        </div>

        @if($products->isEmpty())
            <div class="mx-auto max-w-xl rounded-3xl border border-white/10 bg-white/[0.025] p-12 text-center text-zinc-400">Belum ada produk yang ditemukan.</div>
        @else
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($products->take(6) as $product)
                    @php
                        $approvedReviews = $product->relationLoaded('reviews') ? $product->reviews : collect();
                        $productReviewCount = $approvedReviews->count();
                        $productAverageRating = $productReviewCount ? round((float) $approvedReviews->avg('rating'), 1) : 0;
                    @endphp
                    <article class="vellora-product-card group overflow-hidden rounded-[28px] border border-[#D4AF37]/20 bg-gradient-to-b from-white/[0.055] to-white/[0.018] shadow-[0_20px_70px_rgba(0,0,0,.28)]">
                        <a href="{{ route('products.show', $product->id) }}" class="block">
                            <div class="relative aspect-[4/3] overflow-hidden bg-[#121214]">
                                @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
                                @else
                                    <div class="flex h-full items-center justify-center text-zinc-600">
                                        <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                @endif
                                <span class="absolute left-4 top-4 rounded-full border border-white/10 bg-black/65 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.12em] text-white backdrop-blur-md">{{ $product->category }}</span>
                                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                            </div>
                        </a>

                        <div class="p-6">
                            <h3 class="line-clamp-1 text-lg font-extrabold text-white">{{ $product->name }}</h3>
                            <div class="mt-2 text-2xl font-black text-[#F5D76E]">Rp {{ number_format($product->price, 0, ',', '.') }}</div>

                            <div class="mt-3 flex items-center justify-between gap-3 text-xs">
                                @if($productReviewCount > 0)
                                    <span class="text-[#F5D76E]">★★★★★ <span class="ml-1 text-zinc-300">{{ number_format($productAverageRating, 1) }}</span></span>
                                    <span class="text-zinc-500">{{ $productReviewCount }} ulasan</span>
                                @else
                                    <span class="text-zinc-500">Belum ada ulasan</span>
                                @endif
                            </div>

                            <a href="{{ route('products.show', $product->id) }}" class="mt-5 inline-flex w-full items-center justify-center rounded-xl border border-[#D4AF37]/65 bg-[#D4AF37]/[0.06] px-5 py-3 text-sm font-bold text-[#F5D76E] transition hover:bg-[#D4AF37] hover:text-[#080808]">
                                Lihat Detail
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('products.katalog') }}" class="inline-flex items-center gap-2 text-sm font-bold text-white transition hover:text-[#F5D76E]">
                    Lihat Semua Produk
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
            </div>
        @endif
    </div>
</section>

{{-- =========================================================
    TENTANG VELLORA
========================================================= --}}
<section id="tentang" class="vellora-section relative overflow-hidden bg-[#080808] py-28 md:py-36 lg:py-40">
    <div class="vellora-circuit pointer-events-none absolute inset-0 opacity-30" aria-hidden="true"></div>
    <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="grid items-center gap-12 lg:grid-cols-[.9fr_1.1fr] lg:gap-20">
            <div>
                <span class="vellora-badge">TENTANG VELLORA</span>
                <h2 class="mt-5 text-4xl font-black tracking-tight text-white sm:text-5xl">Tentang <span class="vellora-gold-text">VELLORA</span></h2>
                <p class="mt-6 max-w-xl text-base leading-8 text-zinc-400 sm:text-lg">
VELLORA adalah platform digital terkurasi yang dirancang untuk memenuhi kebutuhan produk digital, pulsa, dan transaksi harian Anda. Kami mengutamakan kecepatan proses, keamanan transaksi, dan kenyamanan terbaik di setiap detik.                </p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div class="vellora-feature-card sm:row-span-2">
                    <div class="vellora-feature-icon">ϟ</div>
                    <h3>Proses Cepat</h3>
                    <p>Proses pesanan dilakukan dengan cepat agar kebutuhan digital Anda segera terpenuhi.</p>
                </div>
                <div class="vellora-feature-card">
                    <div class="vellora-feature-icon">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M12 3l7 4v5c0 4.4-2.8 7.8-7 9-4.2-1.2-7-4.6-7-9V7l7-4z"/></svg>
                    </div>
                    <h3>Aman &amp; Terpercaya</h3>
                    <p>Pelayanan dirancang dengan mengutamakan rasa aman dan kepercayaan pelanggan.</p>
                </div>
                <div class="vellora-feature-card">
                    <div class="vellora-feature-icon">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2m8-8a4 4 0 100-8 4 4 0 000 8zm6-2a4 4 0 010 8m0-8a4 4 0 000-8"/></svg>
                    </div>
                    <h3>Dipercaya Banyak Pelanggan</h3>
                    <p>VELLORA terus menjaga pelayanan yang ramah, responsif, dan konsisten.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================
    ULASAN PELANGGAN
========================================================= --}}
<section id="ulasan" class="vellora-section relative overflow-hidden bg-[#0b0b0d] py-28 md:py-36 lg:py-40">
    <div class="pointer-events-none absolute left-1/2 top-20 h-72 w-[680px] -translate-x-1/2 rounded-full bg-[#D4AF37]/[0.045] blur-[120px]"></div>
    <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="mx-auto mb-12 max-w-2xl text-center">
            <span class="vellora-badge">ULASAN PELANGGAN</span>
            <h2 class="mt-5 text-3xl font-black text-white sm:text-4xl">Apa Kata Mereka</h2>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            @foreach([
                ['name' => 'Budi Santoso', 'text' => 'Pelayanan sangat cepat, saldo selalu masuk tanpa kendala. Mantap!'],
                ['name' => 'Siti Rahma', 'text' => 'Harganya bersaing dan adminnya ramah banget. Recommended!'],
                ['name' => 'Dimas Prasetyo', 'text' => 'Udah langganan beli pulsa di sini karena prosesnya super kilat.'],
            ] as $review)
                <article class="vellora-review-card">
                    <div class="text-lg tracking-[0.18em] text-[#F5D76E]">★★★★★</div>
                    <p class="mt-6 min-h-[92px] text-sm italic leading-7 text-zinc-300">“{{ $review['text'] }}”</p>
                    <div class="mt-7 border-t border-white/10 pt-5 text-sm font-extrabold text-white">— {{ $review['name'] }}</div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- =========================================================
    ARTIKEL TERBARU
========================================================= --}}
@if(isset($articles) && $articles->isNotEmpty())
<section id="artikel-terbaru" class="vellora-section bg-[#080808] py-28 md:py-36 lg:py-40">
    <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
        <div class="mx-auto mb-12 max-w-2xl text-center">
            <span class="vellora-badge">ARTIKEL</span>
            <h2 class="mt-5 text-3xl font-black text-white sm:text-4xl">Artikel Terbaru</h2>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            @foreach($articles as $article)
                <a href="{{ route('articles.show', $article->id) }}" class="vellora-article-card group">
                    <div class="aspect-[16/10] overflow-hidden rounded-2xl bg-[#111114]">
                        @if(!empty($article->image) && Storage::disk('public')->exists($article->image))
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
                        @else
                            <div class="flex h-full items-center justify-center text-zinc-700"><svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M4 5h16v14H4zM8 9h8M8 13h6"/></svg></div>
                        @endif
                    </div>
                    <p class="mt-5 text-[10px] font-bold uppercase tracking-[0.18em] text-zinc-500">{{ $article->created_at?->translatedFormat('d F Y') }}</p>
                    <h3 class="mt-2 line-clamp-2 text-lg font-extrabold text-white transition group-hover:text-[#F5D76E]">{{ $article->title }}</h3>
                    <p class="mt-2 line-clamp-2 text-sm leading-6 text-zinc-500">{{ Str::limit(strip_tags($article->content), 110) }}</p>
                </a>
            @endforeach
        </div>
        <div class="mt-12 text-center"><a href="{{ route('articles.index') }}" class="text-sm font-bold text-white hover:text-[#F5D76E]">Lihat Semua Artikel →</a></div>
    </div>
</section>
@endif

{{-- =========================================================
    CTA
========================================================= --}}
<section id="kontak" class="vellora-cta relative overflow-hidden bg-[#0b0b0d] py-20 text-center md:py-28">
    <div class="pointer-events-none absolute left-1/2 top-1/2 h-80 w-[700px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#D4AF37]/[0.07] blur-[120px]"></div>
    <div class="relative mx-auto max-w-3xl px-5">
        <span class="vellora-badge">HUBUNGI KAMI</span>
        <h2 class="mt-5 text-4xl font-black text-white sm:text-5xl">Punya Pertanyaan?</h2>
        <p class="mx-auto mt-5 max-w-xl text-sm leading-7 text-zinc-400 sm:text-base">Kami siap membantu Anda dengan cepat dan ramah untuk kebutuhan produk maupun informasi VELLORA.</p>
        <a href="{{ route('contact') }}" class="mt-9 inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-[#B8860B] via-[#D4AF37] to-[#F5D76E] px-8 py-3.5 text-sm font-black text-[#080808] shadow-[0_0_28px_rgba(212,175,55,0.22)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_0_42px_rgba(212,175,55,0.38)]">Hubungi Sekarang <span>→</span></a>
    </div>
</section>

@push('styles')
<style>
    .vellora-hero { min-height: calc(100vh - 76px); }
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
    .vellora-grid {
        background-image: linear-gradient(rgba(212,175,55,.10) 1px, transparent 1px), linear-gradient(90deg, rgba(212,175,55,.10) 1px, transparent 1px);
        background-size:72px 72px;
        mask-image:linear-gradient(to bottom, black 0%, rgba(0,0,0,.7) 45%, transparent 100%);
        -webkit-mask-image:linear-gradient(to bottom, black 0%, rgba(0,0,0,.7) 45%, transparent 100%);
        opacity:.18;
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
    .hero-float-left { animation: velloraFloatLeft 7s ease-in-out infinite; }
    .hero-float-right { animation: velloraFloatRight 8s ease-in-out infinite; }
    @keyframes velloraFloatLeft { 0%,100% { transform:translateY(-50%) rotate(-7deg); } 50% { transform:translateY(calc(-50% - 18px)) rotate(-3deg); } }
    @keyframes velloraFloatRight { 0%,100% { transform:translateY(-50%) rotate(7deg); } 50% { transform:translateY(calc(-50% - 15px)) rotate(3deg); } }
    .trail-path { stroke-dasharray:260 1100; animation: velloraTrail 15s linear infinite; }
    .trail-two { animation-duration:19s; animation-delay:-6s; }
    .trail-three { animation-duration:22s; animation-delay:-10s; }
    @keyframes velloraTrail { from { stroke-dashoffset:1250; } to { stroke-dashoffset:-1250; } }
    .vellora-gold-button { background:linear-gradient(120deg,#B8860B,#D4AF37 45%,#F5D76E); box-shadow:0 0 28px rgba(212,175,55,.25); transition:.3s ease; }
    .vellora-gold-button:hover { transform:translateY(-2px); box-shadow:0 0 42px rgba(212,175,55,.42); }
    .vellora-product-card, .vellora-feature-card, .vellora-review-card, .vellora-article-card { transition:transform .35s ease,border-color .35s ease,box-shadow .35s ease; }
    .vellora-product-card:hover, .vellora-feature-card:hover, .vellora-review-card:hover, .vellora-article-card:hover { transform:translateY(-5px); border-color:rgba(245,215,110,.62); box-shadow:0 24px 70px rgba(0,0,0,.42),0 0 34px rgba(212,175,55,.10); }
    .vellora-product-card { border:1px solid rgba(245,215,110,.20); border-radius:1.5rem; background:#080808; }
    .vellora-feature-card { border:1px solid rgba(245,215,110,.20); border-radius:1.5rem; background:#080808; padding:28px; }
    .vellora-feature-icon { display:flex; width:50px; height:50px; align-items:center; justify-content:center; border-radius:16px; border:1px solid rgba(212,175,55,.3); background:rgba(212,175,55,.07); color:#F5D76E; font-size:28px; box-shadow:0 0 24px rgba(212,175,55,.08); }
    .vellora-feature-card h3 { margin-top:20px; color:#fff; font-size:1.05rem; font-weight:800; }
    .vellora-feature-card p { margin-top:8px; color:#a1a1aa; font-size:.875rem; line-height:1.7; }
    .vellora-review-card { border:1px solid rgba(245,215,110,.20); border-radius:1.5rem; background:#080808; padding:28px; }
    .vellora-article-card { display:block; border:1px solid rgba(245,215,110,.20); border-radius:1.5rem; background:#080808; padding:12px 12px 24px; }
    @media (max-width:1023px) { .vellora-hero { min-height:calc(100svh - 76px); } }
    @media (max-width:640px) {
        .vellora-badge { font-size:.58rem; letter-spacing:.16em; }
        .vellora-hero { min-height:calc(100svh - 76px); }
    }
    @media (prefers-reduced-motion:reduce) {
        .hero-float,.trail-path,.vellora-gold-button,.vellora-product-card,.vellora-feature-card,.vellora-review-card,.vellora-article-card { animation:none !important; transition:none !important; }
    }
</style>
@endpush

@endsection
