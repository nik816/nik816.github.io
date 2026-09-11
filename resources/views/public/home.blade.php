@extends('layouts.public')

@section('title', 'VELLORA — Discover Something Better')

@section('content')

    {{-- =========================================================
        HERO SECTION
    ========================================================== --}}

    <header
        class="relative isolate min-h-[calc(100vh-64px)] overflow-hidden bg-[#080808] text-white"
    >

        {{-- Background gradient --}}
        <div
            class="absolute inset-0 bg-gradient-to-b from-[#080808] via-[#0d0d0d] to-[#080808]"
        ></div>

        {{-- Center glow --}}
        <div
            class="pointer-events-none absolute left-1/2 top-1/2
                   h-[520px] w-[520px]
                   -translate-x-1/2 -translate-y-1/2
                   rounded-full
                   bg-[#D4AF37]/10
                   blur-[130px]"
        ></div>

        {{-- Left glow --}}
        <div
            class="pointer-events-none absolute -left-40 top-1/3
                   h-[420px] w-[420px]
                   rounded-full
                   bg-[#D4AF37]/[0.045]
                   blur-[120px]"
        ></div>

        {{-- Right glow --}}
        <div
            class="pointer-events-none absolute -right-40 top-1/4
                   h-[420px] w-[420px]
                   rounded-full
                   bg-[#D4AF37]/[0.04]
                   blur-[120px]"
        ></div>


        {{-- Subtle grid --}}
        <div
            class="pointer-events-none absolute inset-0 opacity-[0.025]"
            style="
                background-image:
                    linear-gradient(
                        rgba(212,175,55,.45) 1px,
                        transparent 1px
                    ),
                    linear-gradient(
                        90deg,
                        rgba(212,175,55,.45) 1px,
                        transparent 1px
                    );
                background-size: 70px 70px;
                mask-image: linear-gradient(
                    to bottom,
                    black,
                    transparent 90%
                );
                -webkit-mask-image: linear-gradient(
                    to bottom,
                    black,
                    transparent 90%
                );
            "
        ></div>


        {{-- =====================================================
            GOLDEN LIGHT TRAILS
        ====================================================== --}}

        <div
            class="pointer-events-none absolute inset-0 overflow-hidden"
            aria-hidden="true"
        >

            <svg
                class="absolute left-1/2 top-1/2
                       h-[700px] w-[1200px]
                       -translate-x-1/2 -translate-y-1/2
                       opacity-40"
                viewBox="0 0 1200 700"
                fill="none"
            >

                <defs>

                    <linearGradient
                        id="velloraHeroGold"
                        x1="0"
                        y1="0"
                        x2="1200"
                        y2="700"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop
                            offset="0"
                            stop-color="#D4AF37"
                            stop-opacity="0"
                        />

                        <stop
                            offset="0.45"
                            stop-color="#D4AF37"
                            stop-opacity="0.08"
                        />

                        <stop
                            offset="0.55"
                            stop-color="#F5D76E"
                            stop-opacity="0.8"
                        />

                        <stop
                            offset="1"
                            stop-color="#D4AF37"
                            stop-opacity="0"
                        />
                    </linearGradient>

                    <filter
                        id="velloraTrailGlow"
                        x="-50%"
                        y="-50%"
                        width="200%"
                        height="200%"
                    >
                        <feGaussianBlur
                            stdDeviation="7"
                            result="blur"
                        />

                        <feMerge>
                            <feMergeNode in="blur"/>
                            <feMergeNode in="SourceGraphic"/>
                        </feMerge>

                    </filter>

                </defs>


                {{-- Trail 1 --}}
                <path
                    class="vellora-light-trail-1"
                    d="
                        M-80 500
                        C180 180 420 110 610 280
                        C780 430 920 520 1280 170
                    "
                    stroke="url(#velloraHeroGold)"
                    stroke-width="1.5"
                    filter="url(#velloraTrailGlow)"
                />

                {{-- Trail 2 --}}
                <path
                    class="vellora-light-trail-2"
                    d="
                        M-100 220
                        C170 560 410 580 610 390
                        C820 190 1010 170 1300 480
                    "
                    stroke="url(#velloraHeroGold)"
                    stroke-width="1"
                    filter="url(#velloraTrailGlow)"
                />

            </svg>

        </div>


        {{-- =====================================================
            ORBITAL RINGS
        ====================================================== --}}

        <div
            class="pointer-events-none absolute inset-0 overflow-hidden"
            aria-hidden="true"
        >

            <div
                class="absolute left-1/2 top-1/2
                       h-[620px] w-[1050px]
                       -translate-x-1/2 -translate-y-1/2
                       rotate-[-8deg]
                       rounded-[50%]
                       border border-[#D4AF37]/[0.07]"
            ></div>

            <div
                class="absolute left-1/2 top-1/2
                       h-[500px] w-[900px]
                       -translate-x-1/2 -translate-y-1/2
                       rotate-[8deg]
                       rounded-[50%]
                       border border-[#D4AF37]/[0.045]"
            ></div>

        </div>


        {{-- =====================================================
            MAIN HERO CONTAINER
        ====================================================== --}}

        <div
            class="relative z-10 mx-auto
                   flex min-h-[calc(100vh-64px)]
                   max-w-7xl
                   items-center
                   justify-center
                   px-6 py-24
                   sm:px-8
                   lg:px-12"
        >


            {{-- =================================================
                LEFT FLOATING BADGES
            ================================================== --}}

            <div
                class="pointer-events-none absolute
                       left-2 top-1/2
                       hidden
                       -translate-y-1/2
                       lg:block
                       xl:left-8"
                aria-hidden="true"
            >

                <div
                    class="vellora-floating-badge
                           mb-10
                           flex h-16 w-16
                           items-center justify-center
                           rounded-2xl
                           border border-[#D4AF37]/20
                           bg-white/[0.025]
                           backdrop-blur-md
                           shadow-[0_0_40px_rgba(212,175,55,0.07)]"
                >

                    <svg
                        class="h-7 w-7 text-[#D4AF37]/75"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="
                                M12 3
                                l2.7 5.5
                                6.1.9
                                -4.4 4.3
                                1 6.1
                                -5.4-2.9
                                -5.4 2.9
                                1-6.1
                                -4.4-4.3
                                6.1-.9
                                L12 3z
                            "
                        />
                    </svg>

                </div>


                <div
                    class="vellora-floating-badge
                           ml-9
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           border border-[#D4AF37]/15
                           bg-white/[0.018]
                           backdrop-blur-md"
                >

                    <svg
                        class="h-5 w-5 text-[#D4AF37]/55"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.2"
                    >
                        <circle
                            cx="12"
                            cy="12"
                            r="8"
                        />

                        <path
                            stroke-linecap="round"
                            d="M12 7v5l3.5 2"
                        />

                    </svg>

                </div>

            </div>


            {{-- =================================================
                RIGHT FLOATING BADGES
            ================================================== --}}

            <div
                class="pointer-events-none absolute
                       right-2 top-1/2
                       hidden
                       -translate-y-1/2
                       lg:block
                       xl:right-8"
                aria-hidden="true"
            >

                <div
                    class="vellora-floating-badge
                           mb-10
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           border border-[#D4AF37]/15
                           bg-white/[0.018]
                           backdrop-blur-md"
                >

                    <svg
                        class="h-5 w-5 text-[#D4AF37]/55"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.2"
                    >

                        <path
                            stroke-linecap="round"
                            d="
                                M12 3v18
                                M3 12h18
                                M5.6 5.6l12.8 12.8
                                M18.4 5.6L5.6 18.4
                            "
                        />

                    </svg>

                </div>


                <div
                    class="vellora-floating-badge
                           -ml-7
                           flex h-16 w-16
                           items-center justify-center
                           rounded-2xl
                           border border-[#D4AF37]/20
                           bg-white/[0.025]
                           backdrop-blur-md
                           shadow-[0_0_40px_rgba(212,175,55,0.07)]"
                >

                    <svg
                        class="h-7 w-7 text-[#D4AF37]/70"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.2"
                    >

                        <circle
                            cx="12"
                            cy="12"
                            r="8.5"
                        />

                        <circle
                            cx="12"
                            cy="12"
                            r="3"
                        />

                        <path
                            stroke-linecap="round"
                            d="
                                M12 2.5v2
                                M12 19.5v2
                                M2.5 12h2
                                M19.5 12h2
                            "
                        />

                    </svg>

                </div>

            </div>


            {{-- =================================================
                CENTER CONTENT
            ================================================== --}}

            <div
                class="relative z-20
                       mx-auto
                       max-w-4xl
                       text-center
                       fade-in"
            >

                {{-- Badge --}}
                <div
                    class="mb-7
                           inline-flex
                           items-center
                           gap-3
                           rounded-full
                           border border-[#D4AF37]/30
                           bg-[#D4AF37]/[0.055]
                           px-5 py-2.5
                           shadow-[0_0_30px_rgba(212,175,55,0.06)]"
                >

                    <span
                        class="h-1.5 w-1.5
                               rounded-full
                               bg-[#D4AF37]
                               shadow-[0_0_12px_rgba(212,175,55,0.85)]"
                    ></span>

                    <span
                        class="text-[10px]
                               font-semibold
                               uppercase
                               tracking-[0.25em]
                               text-[#D4AF37]"
                    >
                        PLATFORM JUAL BELI TERPERCAYA
                    </span>

                </div>


                {{-- Main title --}}
                <h1
                    class="text-balance
                           text-5xl
                           font-black
                           leading-[0.96]
                           tracking-[-0.045em]
                           text-white
                           sm:text-6xl
                           md:text-7xl
                           lg:text-[88px]"
                >

                    Discover Something

                    <span
                        class="mt-2 block
                               bg-gradient-to-r
                               from-[#B8860B]
                               via-[#D4AF37]
                               to-[#F5D76E]
                               bg-clip-text
                               text-transparent
                               drop-shadow-[0_0_28px_rgba(212,175,55,0.18)]"
                    >
                        Better
                    </span>

                </h1>


                {{-- Description --}}
                <p
                    class="mx-auto
                           mt-8
                           max-w-2xl
                           text-base
                           leading-7
                           text-zinc-400
                           sm:text-lg
                           sm:leading-8"
                >
                    Temukan produk dan informasi terbaik dari
                    <span class="font-medium text-zinc-200">
                        VELLORA
                    </span>
                    —
                    cepat, aman, dan terpercaya.
                </p>


                {{-- CTA --}}
                <div
                    class="mt-10
                           flex
                           flex-col
                           items-center
                           justify-center
                           gap-3
                           sm:flex-row"
                >

                    <a
                        href="{{ route('products.katalog') }}"
                        class="group
                               inline-flex
                               min-h-12
                               w-full
                               items-center
                               justify-center
                               gap-2
                               rounded-xl
                               bg-gradient-to-r
                               from-[#B8860B]
                               via-[#D4AF37]
                               to-[#F5D76E]
                               px-7 py-3
                               text-sm
                               font-bold
                               text-[#080808]
                               shadow-[0_8px_30px_rgba(212,175,55,0.18)]
                               transition-all
                               duration-300
                               hover:-translate-y-0.5
                               hover:shadow-[0_12px_42px_rgba(212,175,55,0.28)]
                               sm:w-auto"
                    >

                        Lihat Produk

                        <svg
                            class="h-4 w-4
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-6-6 6 6-6 6"
                            />
                        </svg>

                    </a>


                    <a
                        href="#tentang"
                        class="inline-flex
                               min-h-12
                               w-full
                               items-center
                               justify-center
                               rounded-xl
                               border border-white/10
                               bg-white/[0.02]
                               px-7 py-3
                               text-sm
                               font-semibold
                               text-zinc-200
                               backdrop-blur-sm
                               transition-all
                               duration-300
                               hover:border-[#D4AF37]/30
                               hover:bg-[#D4AF37]/[0.05]
                               hover:text-[#D4AF37]
                               sm:w-auto"
                    >
                        Jelajahi Vellora
                    </a>

                </div>


                {{-- Micro label --}}
                <div
                    class="mt-12
                           flex
                           items-center
                           justify-center
                           gap-4
                           text-[9px]
                           uppercase
                           tracking-[0.28em]
                           text-zinc-600"
                >

                    <span
                        class="h-px w-10 bg-white/10"
                    ></span>

                    <span>
                        LUXURY DIGITAL PLATFORM
                    </span>

                    <span
                        class="h-px w-10 bg-white/10"
                    ></span>

                </div>

            </div>

        </div>


        {{-- Bottom fade --}}
        <div
            class="pointer-events-none
                   absolute
                   inset-x-0
                   bottom-0
                   h-32
                   bg-gradient-to-t
                   from-[#080808]
                   to-transparent"
        ></div>

    </header>


    {{-- =========================================================
        PRODUK UNGGULAN
    ========================================================== --}}

    <section
        class="bg-vellora-bg2 py-16 md:py-24 reveal"
    >

        <div class="container mx-auto px-4">

            <div
                class="mx-auto mb-12 max-w-xl text-center"
            >

                <p
                    class="mb-3
                           text-xs
                           font-bold
                           uppercase
                           tracking-[0.2em]
                           text-vellora-gold"
                >
                    Produk Unggulan
                </p>

                <h2
                    class="text-2xl
                           font-extrabold
                           tracking-tight
                           text-white
                           md:text-3xl"
                >
                    Pilihan Terbaik Untuk Anda
                </h2>

            </div>


            @if($products->isEmpty())

                <div
                    class="mx-auto
                           max-w-xl
                           rounded-3xl
                           border
                           border-white/[0.10]
                           bg-vellora-surface
                           p-8
                           py-16
                           text-center"
                >

                    <p
                        class="text-sm
                               font-semibold
                               text-vellora-muted"
                    >
                        Belum ada produk yang ditemukan.
                    </p>

                </div>

            @else

                <div
                    class="grid
                           grid-cols-1
                           gap-6
                           sm:grid-cols-2
                           md:grid-cols-3
                           md:gap-8"
                >

                    @foreach($products->take(6) as $product)

                        <div
                            class="group
                                   flex
                                   flex-col
                                   justify-between
                                   overflow-hidden
                                   rounded-3xl
                                   border
                                   border-white/[0.10]
                                   bg-vellora-surface
                                   transition-all
                                   duration-300
                                   hover:-translate-y-1
                                   hover:border-vellora-gold/30"
                        >

                            <div
                                class="relative
                                       flex
                                       aspect-[4/3]
                                       w-full
                                       items-center
                                       justify-center
                                       overflow-hidden
                                       border-b
                                       border-white/[0.10]
                                       bg-vellora-elevated"
                            >

                                @if(!empty($product->image) && Storage::disk('public')->exists($product->image))

                                    <img
                                        src="{{ asset('storage/' . $product->image) }}"
                                        alt="{{ $product->name }}"
                                        class="h-full
                                               w-full
                                               object-cover
                                               transition-transform
                                               duration-500
                                               group-hover:scale-105"
                                    >

                                @else

                                    <div
                                        class="flex
                                               flex-col
                                               items-center
                                               justify-center
                                               text-vellora-muted"
                                    >

                                        <svg
                                            class="h-10 w-10"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                        >

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="
                                                    M4 16l4.586-4.586a2
                                                    2 0 012.828 0L16
                                                    16m-2-2l1.586-1.586a2
                                                    2 0 012.828 0L20
                                                    14M6 20h12a2
                                                    2 0 002-2V6a2
                                                    2 0 00-2-2H6a2
                                                    2 0 00-2 2v12a2
                                                    2 0 002 2z
                                                "
                                            />

                                        </svg>

                                    </div>

                                @endif


                                <span
                                    class="absolute
                                           left-3
                                           top-3
                                           rounded-full
                                           bg-black/70
                                           px-3
                                           py-1
                                           text-xs
                                           font-bold
                                           text-white
                                           shadow-sm
                                           backdrop-blur-md"
                                >
                                    {{ $product->category }}
                                </span>

                            </div>


                            <div class="p-6">

                                <h3
                                    class="mb-1.5
                                           line-clamp-1
                                           text-base
                                           font-bold
                                           leading-snug
                                           text-white"
                                >
                                    {{ $product->name }}
                                </h3>

                                <div
                                    class="text-xl
                                           font-black
                                           text-vellora-gold"
                                >
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </div>

                            </div>


                            <div
                                class="px-6 pb-6 pt-0"
                            >

                                <a
                                    href="{{ route('products.show', $product->id) }}"
                                    class="block
                                           w-full
                                           rounded-xl
                                           bg-vellora-gold
                                           py-2.5
                                           text-center
                                           text-sm
                                           font-bold
                                           text-black
                                           transition-colors
                                           hover:bg-vellora-gold-light"
                                >
                                    Lihat Detail
                                </a>

                            </div>

                        </div>

                    @endforeach

                </div>


                <div
                    class="mt-12 text-center"
                >

                    <a
                        href="{{ route('products.katalog') }}"
                        class="inline-flex
                               items-center
                               gap-1.5
                               text-sm
                               font-bold
                               text-white
                               transition-colors
                               hover:text-vellora-gold"
                    >

                        Lihat Semua Produk

                        <svg
                            class="h-4 w-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />

                        </svg>

                    </a>

                </div>

            @endif

        </div>

    </section>


    {{-- =========================================================
        TENTANG VELLORA
    ========================================================== --}}

    <section
        id="tentang"
        class="bg-vellora-bg py-16 md:py-24 reveal"
    >

        <div
            class="container
                   mx-auto
                   max-w-6xl
                   px-4"
        >

            <div
                class="grid
                       grid-cols-1
                       items-center
                       gap-12
                       md:grid-cols-2"
            >

                <div>

                    <p
                        class="mb-3
                               text-xs
                               font-bold
                               uppercase
                               tracking-[0.2em]
                               text-vellora-gold"
                    >
                        Tentang Kami
                    </p>

                    <h2
                        class="mb-5
                               text-2xl
                               font-extrabold
                               tracking-tight
                               text-white
                               md:text-3xl"
                    >
                        Tentang VELLORA
                    </h2>

                    <p
                        class="text-sm
                               leading-relaxed
                               text-vellora-muted
                               md:text-base"
                    >
                        VELLORA hadir sebagai platform jual beli fleksibel
                        yang siap menyediakan segala macam barang kebutuhan
                        digital, pulsa, dan saldo Anda dengan cepat, aman,
                        dan terpercaya setiap hari.
                    </p>

                </div>


                <div
                    class="grid grid-cols-2 gap-4"
                >

                    {{-- Proses Cepat --}}
                    <div
                        class="rounded-2xl
                               border
                               border-white/[0.10]
                               bg-vellora-surface
                               p-6"
                    >

                        <div
                            class="mb-4
                                   flex
                                   h-10
                                   w-10
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-vellora-gold/10
                                   text-vellora-gold"
                        >

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                />

                            </svg>

                        </div>

                        <p
                            class="mb-1
                                   text-sm
                                   font-bold
                                   text-white"
                        >
                            Proses Cepat
                        </p>

                        <p
                            class="text-xs
                                   leading-relaxed
                                   text-vellora-muted"
                        >
                            Transaksi diproses dalam hitungan menit.
                        </p>

                    </div>


                    {{-- Aman --}}
                    <div
                        class="rounded-2xl
                               border
                               border-white/[0.10]
                               bg-vellora-surface
                               p-6"
                    >

                        <div
                            class="mb-4
                                   flex
                                   h-10
                                   w-10
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-vellora-gold/10
                                   text-vellora-gold"
                        >

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="
                                        M9 12l2 2 4-4
                                        m6 2a9 9 0
                                        11-18 0 9 9 0
                                        0118 0z
                                    "
                                />

                            </svg>

                        </div>

                        <p
                            class="mb-1
                                   text-sm
                                   font-bold
                                   text-white"
                        >
                            Aman &amp; Terpercaya
                        </p>

                        <p
                            class="text-xs
                                   leading-relaxed
                                   text-vellora-muted"
                        >
                            Data dan transaksi Anda selalu terlindungi.
                        </p>

                    </div>


                    {{-- Pelanggan --}}
                    <div
                        class="col-span-2
                               rounded-2xl
                               border
                               border-white/[0.10]
                               bg-vellora-surface
                               p-6"
                    >

                        <div
                            class="mb-4
                                   flex
                                   h-10
                                   w-10
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-vellora-gold/10
                                   text-vellora-gold"
                        >

                            <svg
                                class="h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="
                                        M17 20h5v-2a4
                                        4 0 00-3-3.87
                                        M9 20H4v-2a4
                                        4 0 013-3.87
                                        m9-6.13a4 4 0
                                        11-8 0 4 4 0
                                        018 0z
                                    "
                                />

                            </svg>

                        </div>

                        <p
                            class="mb-1
                                   text-sm
                                   font-bold
                                   text-white"
                        >
                            Dipercaya Banyak Pelanggan
                        </p>

                        <p
                            class="text-xs
                                   leading-relaxed
                                   text-vellora-muted"
                        >
                            Pelayanan ramah dan responsif setiap hari.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        ULASAN PELANGGAN
    ========================================================== --}}

    <section
        id="ulasan"
        class="bg-vellora-bg2 py-16 md:py-24 reveal"
    >

        <div
            class="container
                   mx-auto
                   max-w-5xl
                   px-4"
        >

            <div
                class="mb-12 text-center"
            >

                <p
                    class="mb-3
                           text-xs
                           font-bold
                           uppercase
                           tracking-[0.2em]
                           text-vellora-gold"
                >
                    Ulasan
                </p>

                <h2
                    class="text-2xl
                           font-extrabold
                           tracking-tight
                           text-white
                           md:text-3xl"
                >
                    Ulasan Pelanggan
                </h2>

                <p
                    class="mx-auto
                           mt-3
                           max-w-xl
                           text-sm
                           leading-relaxed
                           text-vellora-muted"
                >
                    Pengalaman pelanggan menjadi bagian penting
                    dari perjalanan VELLORA.
                </p>

            </div>


            <div
                class="grid
                       grid-cols-1
                       gap-6
                       md:grid-cols-3"
            >

                {{-- Ulasan 1 --}}
                <div
                    class="rounded-3xl
                           border
                           border-white/[0.10]
                           bg-vellora-surface
                           p-6
                           transition-all
                           duration-300
                           hover:-translate-y-1
                           hover:border-vellora-gold/30"
                >

                    <div
                        class="mb-4
                               text-sm
                               tracking-[0.15em]
                               text-vellora-gold"
                    >
                        ★★★★★
                    </div>

                    <p
                        class="mb-5
                               text-sm
                               italic
                               leading-relaxed
                               text-vellora-muted"
                    >
                        "Pelayanan sangat cepat, saldo langsung masuk
                        tanpa kendala. Mantap!"
                    </p>

                    <div
                        class="text-xs
                               font-bold
                               text-white"
                    >
                        — Budi Santoso
                    </div>

                </div>


                {{-- Ulasan 2 --}}
                <div
                    class="rounded-3xl
                           border
                           border-white/[0.10]
                           bg-vellora-surface
                           p-6
                           transition-all
                           duration-300
                           hover:-translate-y-1
                           hover:border-vellora-gold/30"
                >

                    <div
                        class="mb-4
                               text-sm
                               tracking-[0.15em]
                               text-vellora-gold"
                    >
                        ★★★★★
                    </div>

                    <p
                        class="mb-5
                               text-sm
                               italic
                               leading-relaxed
                               text-vellora-muted"
                    >
                        "Harganya bersaing dan adminnya ramah banget.
                        Recommended!"
                    </p>

                    <div
                        class="text-xs
                               font-bold
                               text-white"
                    >
                        — Siti Rahma
                    </div>

                </div>


                {{-- Ulasan 3 --}}
                <div
                    class="rounded-3xl
                           border
                           border-white/[0.10]
                           bg-vellora-surface
                           p-6
                           transition-all
                           duration-300
                           hover:-translate-y-1
                           hover:border-vellora-gold/30"
                >

                    <div
                        class="mb-4
                               text-sm
                               tracking-[0.15em]
                               text-vellora-gold"
                    >
                        ★★★★★
                    </div>

                    <p
                        class="mb-5
                               text-sm
                               italic
                               leading-relaxed
                               text-vellora-muted"
                    >
                        "Udah langganan beli pulsa di sini karena
                        prosesnya super kilat."
                    </p>

                    <div
                        class="text-xs
                               font-bold
                               text-white"
                    >
                        — Dimas Prasetyo
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        ARTIKEL TERBARU
    ========================================================== --}}

    @if(isset($articles) && $articles->isNotEmpty())

        <section
            class="bg-vellora-bg py-16 md:py-24 reveal"
        >

            <div class="container mx-auto px-4">

                <div
                    class="mx-auto mb-12 max-w-xl text-center"
                >

                    <p
                        class="mb-3
                               text-xs
                               font-bold
                               uppercase
                               tracking-[0.2em]
                               text-vellora-gold"
                    >
                        Artikel
                    </p>

                    <h2
                        class="text-2xl
                               font-extrabold
                               tracking-tight
                               text-white
                               md:text-3xl"
                    >
                        Artikel Terbaru
                    </h2>

                </div>


                <div
                    class="grid
                           grid-cols-1
                           gap-6
                           sm:grid-cols-2
                           md:grid-cols-3
                           md:gap-8"
                >

                    @foreach($articles as $article)

                        <a
                            href="{{ route('articles.show', $article->id) }}"
                            class="group
                                   flex
                                   flex-col
                                   overflow-hidden
                                   rounded-3xl
                                   border
                                   border-white/[0.10]
                                   bg-vellora-surface
                                   transition-all
                                   duration-300
                                   hover:-translate-y-1
                                   hover:border-vellora-gold/30"
                        >

                            <div
                                class="flex
                                       aspect-[16/10]
                                       w-full
                                       items-center
                                       justify-center
                                       overflow-hidden
                                       border-b
                                       border-white/[0.10]
                                       bg-vellora-elevated"
                            >

                                @if(!empty($article->image) && Storage::disk('public')->exists($article->image))

                                    <img
                                        src="{{ asset('storage/' . $article->image) }}"
                                        alt="{{ $article->title }}"
                                        class="h-full
                                               w-full
                                               object-cover
                                               transition-transform
                                               duration-500
                                               group-hover:scale-105"
                                    >

                                @else

                                    <svg
                                        class="h-10 w-10 text-vellora-muted"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="
                                                M19 20H5a2 2
                                                0 01-2-2V6a2
                                                2 0 012-2h10l6
                                                6v8a2 2 0
                                                01-2 2z
                                            "
                                        />

                                    </svg>

                                @endif

                            </div>


                            <div
                                class="flex
                                       flex-1
                                       flex-col
                                       p-6"
                            >

                                <p
                                    class="mb-2
                                           text-xs
                                           font-semibold
                                           uppercase
                                           tracking-wider
                                           text-vellora-muted"
                                >
                                    {{ $article->created_at?->translatedFormat('d F Y') }}
                                </p>


                                <h3
                                    class="mb-2
                                           line-clamp-2
                                           text-base
                                           font-bold
                                           leading-snug
                                           text-white"
                                >
                                    {{ $article->title }}
                                </h3>


                                <p
                                    class="mb-4
                                           line-clamp-2
                                           text-xs
                                           leading-relaxed
                                           text-vellora-muted"
                                >
                                    {{ Str::limit(strip_tags($article->content), 110) }}
                                </p>


                                <span
                                    class="mt-auto
                                           inline-flex
                                           items-center
                                           gap-1
                                           text-xs
                                           font-bold
                                           text-vellora-gold
                                           transition-all
                                           group-hover:gap-1.5"
                                >

                                    Baca Selengkapnya

                                    <svg
                                        class="h-3.5 w-3.5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 5l7 7-7 7"
                                        />

                                    </svg>

                                </span>

                            </div>

                        </a>

                    @endforeach

                </div>


                <div
                    class="mt-12 text-center"
                >

                    <a
                        href="{{ route('articles.index') }}"
                        class="inline-flex
                               items-center
                               gap-1.5
                               text-sm
                               font-bold
                               text-white
                               transition-colors
                               hover:text-vellora-gold"
                    >

                        Lihat Semua Artikel

                        <svg
                            class="h-4 w-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />

                        </svg>

                    </a>

                </div>

            </div>

        </section>

    @endif


    {{-- =========================================================
        CONTACT CTA
    ========================================================== --}}

    <section
        id="kontak"
        class="bg-vellora-bg
               py-16
               text-center
               text-white
               reveal
               md:py-24"
    >

        <div
            class="container
                   mx-auto
                   max-w-2xl
                   px-4"
        >

            <p
                class="mb-3
                       text-xs
                       font-bold
                       uppercase
                       tracking-[0.2em]
                       text-vellora-gold"
            >
                Hubungi Kami
            </p>


            <h2
                class="mb-4
                       text-2xl
                       font-extrabold
                       tracking-tight
                       md:text-3xl"
            >
                Punya Pertanyaan?
            </h2>


            <p
                class="mx-auto
                       mb-8
                       max-w-md
                       text-sm
                       leading-relaxed
                       text-vellora-muted"
            >
                Tim kami siap membantu Anda kapan saja lewat
                platform di bawah ini.
            </p>


            <a
                href="{{ route('contact') }}"
                class="inline-flex
                       items-center
                       gap-2
                       rounded-xl
                       bg-vellora-gold
                       px-8
                       py-3.5
                       font-bold
                       text-black
                       shadow-lg
                       shadow-vellora-gold/20
                       transition-colors
                       hover:bg-vellora-gold-light"
            >

                Hubungi Sekarang

                <svg
                    class="h-4 w-4"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 5l7 7-7 7"
                    />

                </svg>

            </a>

        </div>

    </section>


{{-- =========================================================
    HERO / PAGE ANIMATIONS
========================================================= --}}

<style>

    .vellora-floating-badge {
        animation:
            velloraHeroFloat
            6s
            ease-in-out
            infinite;
    }

    .vellora-floating-badge:nth-child(2) {
        animation-delay: -2.5s;
    }


    @keyframes velloraHeroFloat {

        0%,
        100% {
            transform:
                translateY(0)
                rotate(0deg);
        }

        50% {
            transform:
                translateY(-10px)
                rotate(1deg);
        }

    }


    .vellora-light-trail-1,
    .vellora-light-trail-2 {

        stroke-dasharray:
            220 900;

        animation:
            velloraTrailFlow
            14s
            linear
            infinite,

            velloraTrailDrift
            20s
            ease-in-out
            infinite;

    }


    .vellora-light-trail-2 {

        animation-duration:
            19s,
            24s;

        animation-delay:
            -6s,
            -3s;

    }


    @keyframes velloraTrailFlow {

        from {
            stroke-dashoffset: 1100;
        }

        to {
            stroke-dashoffset: -1100;
        }

    }


    @keyframes velloraTrailDrift {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-14px);
        }

    }


    @media (prefers-reduced-motion: reduce) {

        .vellora-floating-badge,
        .vellora-light-trail-1,
        .vellora-light-trail-2 {
            animation: none;
        }

    }

</style>

@endsection