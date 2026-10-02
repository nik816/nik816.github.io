<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'VELLORA — Discover Something Better')</title>

    {{-- Favicon --}}
    <link
        rel="icon"
        type="image/png"
        href="{{ asset('images/vellora-icon.png') }}"
    >

    <link
        rel="apple-touch-icon"
        href="{{ asset('images/vellora-icon.png') }}"
    >

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: [
                            'Inter',
                            'ui-sans-serif',
                            'system-ui',
                            'sans-serif'
                        ]
                    },

                    colors: {
                        vellora: {
                            bg: '#080808',
                            bg2: '#0d0d0d',
                            surface: '#111111',
                            elevated: '#161616',
                            muted: '#a1a1aa',
                            gold: '#fbbf24',
                            'gold-light': '#fcd34d',
                            'gold-muted': '#d4a72c'
                        }
                    }
                }
            }
        }
    </script>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >

    <style>

        /* =========================================================
           GLOBAL
        ========================================================= */

        html,
        body {
            background: #080808;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family:
                'Inter',
                ui-sans-serif,
                system-ui,
                sans-serif;

            overflow-x: hidden;
        }

        ::selection {
            background: #fbbf24;
            color: #080808;
        }

        img {
            max-width: 100%;
        }

        a {
            -webkit-tap-highlight-color: transparent;
        }


        /* =========================================================
           PAGE FADE IN
        ========================================================= */

        .fade-in {
            animation:
                fadeIn
                .7s
                cubic-bezier(.22, 1, .36, 1)
                both;
        }

        @keyframes fadeIn {

            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* =========================================================
           HERO GLOW
        ========================================================= */

        .hero-glow-1 {

            background:
                radial-gradient(
                    circle,
                    rgba(251, 191, 36, 0.35) 0%,
                    transparent 70%
                );

            animation:
                heroFloat1
                18s
                ease-in-out
                infinite;
        }


        .hero-glow-2 {

            background:
                radial-gradient(
                    circle,
                    rgba(252, 211, 77, 0.30) 0%,
                    transparent 70%
                );

            animation:
                heroFloat2
                22s
                ease-in-out
                infinite;
        }


        .hero-glow-3 {

            background:
                radial-gradient(
                    circle,
                    rgba(251, 191, 36, 0.25) 0%,
                    transparent 70%
                );

            animation:
                heroFloat3
                26s
                ease-in-out
                infinite;
        }


        .hero-glow-violet {

            background:
                radial-gradient(
                    circle,
                    rgba(139, 92, 246, 0.08) 0%,
                    transparent 70%
                );

            animation:
                heroFloat2
                30s
                ease-in-out
                infinite
                reverse;
        }


        @keyframes heroFloat1 {

            0%,
            100% {
                transform:
                    translate(-50%, -50%)
                    scale(1);
            }

            50% {
                transform:
                    translate(-45%, -55%)
                    scale(1.12);
            }

        }


        @keyframes heroFloat2 {

            0%,
            100% {
                transform:
                    translate(0, 0)
                    scale(1);
            }

            50% {
                transform:
                    translate(6%, -6%)
                    scale(1.18);
            }

        }


        @keyframes heroFloat3 {

            0%,
            100% {
                transform:
                    translate(0, 0)
                    scale(1);
            }

            50% {
                transform:
                    translate(-6%, 6%)
                    scale(1.12);
            }

        }


        /* =========================================================
           GOLDEN LIGHT TRAIL
        ========================================================= */

        .light-trail-1,
        .light-trail-2 {

            stroke-dasharray:
                220 900;

            animation:
                trailFlow 14s linear infinite,
                trailDrift 20s ease-in-out infinite;
        }


        .light-trail-2 {

            animation-duration:
                19s,
                24s;

            animation-delay:
                -6s,
                -3s;
        }


        @keyframes trailFlow {

            from {
                stroke-dashoffset: 1100;
            }

            to {
                stroke-dashoffset: -1100;
            }

        }


        @keyframes trailDrift {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-14px);
            }

        }


        /* =========================================================
           NAVBAR
        ========================================================= */

        .navbar {

            transition:
                background-color .3s ease,
                border-color .3s ease,
                box-shadow .3s ease,
                backdrop-filter .3s ease;
        }


        /* =========================================================
           POLISHED 3D GOLD LOGO
        ========================================================= */

        .vellora-logo-3d {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transform-style: preserve-3d;
            isolation: isolate;
        }

        .vellora-logo-3d img {
            display: block;
            object-fit: contain;
            transform: translateZ(18px);
            filter:
                drop-shadow(0 1px 0 rgba(255,255,255,.30))
                drop-shadow(0 3px 2px rgba(83,55,0,.65))
                drop-shadow(0 0 10px rgba(245,215,110,.22));
        }

        .vellora-logo-3d::before {
            content: '';
            position: absolute;
            inset: 10%;
            border-radius: 28%;
            background:
                radial-gradient(
                    circle,
                    rgba(245,215,110,.20),
                    transparent 68%
                );
            filter: blur(12px);
            z-index: -2;
        }

        .vellora-logo-3d::after {
            content: '';
            position: absolute;
            width: 58%;
            height: 24%;
            top: 12%;
            left: 18%;
            border-radius: 999px;
            background:
                linear-gradient(
                    105deg,
                    transparent 0%,
                    rgba(255,255,255,.52) 48%,
                    transparent 72%
                );
            transform: rotate(-18deg);
            filter: blur(3px);
            opacity: .55;
            pointer-events: none;
            mix-blend-mode: screen;
        }

        .vellora-logo-3d--nav {
            width: 34px;
            height: 34px;
            perspective: 500px;
        }

        .vellora-logo-3d--hero {
            width: 150px;
            height: 150px;
            perspective: 700px;
        }

        .vellora-logo-3d--hero::after {
            width: 62%;
            height: 20%;
            top: 15%;
            left: 17%;
        }


        /* =========================================================
           BRAND
        ========================================================= */

        .brand-link {

            transition:
                opacity .2s ease;
        }


        .brand-link:hover {
            opacity: .95;
        }


        .brand-icon {

            width: 34px;
            height: 34px;

            object-fit: contain;

            flex-shrink: 0;

            transition:
                transform .3s ease,
                filter .3s ease;
        }


        .brand-link:hover .brand-icon {

            transform:
                scale(1.06);

            filter:
                drop-shadow(
                    0 0 8px
                    rgba(251, 191, 36, .25)
                );
        }


        .brand-name {

            font-size: 18px;

            font-weight: 800;

            letter-spacing:
                -.025em;

            color: #ffffff;

            transition:
                color .2s ease;
        }


        .brand-link:hover .brand-name {

            color:
                #fbbf24;
        }


        /* =========================================================
           FOOTER BRAND
        ========================================================= */

        .footer-brand-icon {

            width: 42px;
            height: 42px;

            object-fit: contain;

            flex-shrink: 0;

            transition:
                transform .3s ease;
        }


        .footer-brand-link:hover .footer-brand-icon {

            transform:
                scale(1.05);
        }


        /* =========================================================
           BUTTON
        ========================================================= */

        .btn-gold {

            transition:
                transform .2s ease,
                background-color .2s ease,
                box-shadow .2s ease;
        }


        .btn-gold:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 30px
                rgba(251, 191, 36, .18);
        }


        /* =========================================================
           FOCUS
        ========================================================= */

        a:focus-visible,
        button:focus-visible {

            outline:
                2px solid #fbbf24;

            outline-offset:
                3px;
        }


        /* =========================================================
           MOBILE MENU
        ========================================================= */

        .mobile-menu {

            transition:
                opacity .25s ease,
                transform .25s ease;
        }


        .mobile-menu.hidden-menu {

            opacity:
                0;

            transform:
                translateY(-8px);

            pointer-events:
                none;
        }



        /* =========================================================
           MOBILE
        ========================================================= */

        @media (max-width: 640px) {

            .brand-icon {

                width: 30px;
                height: 30px;
            }


            .brand-name {

                font-size: 17px;
            }


            .footer-brand-icon {

                width: 38px;
                height: 38px;
            }

        }


        /* =========================================================
           REDUCED MOTION
        ========================================================= */

        @media (prefers-reduced-motion: reduce) {

            html {
                scroll-behavior: auto;
            }


            *,
            *::before,
            *::after {

                animation-duration:
                    .01ms !important;

                animation-iteration-count:
                    1 !important;

                transition-duration:
                    .01ms !important;
            }


            .fade-in,
            .hero-glow-1,
            .hero-glow-2,
            .hero-glow-3,
            .hero-glow-violet,
            .light-trail-1,
            .light-trail-2 {

                animation:
                    none !important;
            }


            }

    </style>


    @stack('styles')

</head>


<body class="bg-vellora-bg text-white antialiased">


    {{-- =========================================================
         NAVBAR
    ========================================================== --}}

    <nav
        id="mainNavbar"
        class="
            navbar
            fixed
            top-0
            left-0
            right-0
            z-50
            bg-vellora-bg
            border-b
            border-transparent
        "
    >

        <div
            class="
                container
                mx-auto
                px-5
                lg:px-8
            "
        >

            <div
                class="
                    flex
                    items-center
                    justify-between
                    h-16
                    md:h-[76px]
                "
            >


                {{-- =================================================
                     BRAND
                ================================================== --}}

                <a
                    href="{{ route('home') }}"
                    class="
                        brand-link
                        flex
                        items-center
                        gap-2.5
                        shrink-0
                        ml-1
                    "
                    aria-label="VELLORA"
                >

                    <span
                        class="
                            vellora-logo-3d
                            vellora-logo-3d--nav
                        "
                        aria-hidden="true"
                    >

                        <img
                            src="{{ asset('images/vellora-icon.png') }}"
                            alt=""
                            class="brand-icon"
                            onerror="this.style.display='none';"
                        >

                    </span>


                    <span class="brand-name">
                        VELLORA
                    </span>

                </a>


                {{-- =================================================
                     DESKTOP MENU
                ================================================== --}}

                <div
                    class="
                        hidden
                        md:flex
                        items-center
                        gap-8
                    "
                >

                    <a
                        href="{{ route('home') }}"
                        class="
                            vl-nav-link
                            text-sm
                            font-semibold
                            transition-colors
                            duration-200
                            hover:text-vellora-gold
                            {{ request()->routeIs('home') ? 'text-white vl-active' : 'text-white/70' }}
                        "
                    >
                        Home
                    </a>


                    <a
                        href="{{ route('products.katalog') }}"
                        class="
                            vl-nav-link
                            text-sm
                            font-semibold
                            transition-colors
                            duration-200
                            hover:text-vellora-gold
                            {{ request()->routeIs('products.*') ? 'text-white vl-active' : 'text-white/70' }}
                        "
                    >
                        Produk
                    </a>


                    <a
                        href="{{ route('home') }}#tentang"
                        class="
                            vl-nav-link
                            text-sm
                            font-semibold
                            text-white/70
                            hover:text-vellora-gold
                            transition-colors
                            duration-200
                        "
                    >
                        Tentang
                    </a>


                    <a
                        href="{{ route('articles.index') }}"
                        class="
                            vl-nav-link
                            text-sm
                            font-semibold
                            transition-colors
                            duration-200
                            hover:text-vellora-gold
                            {{ request()->routeIs('articles.*') ? 'text-white vl-active' : 'text-white/70' }}
                        "
                    >
                        Artikel
                    </a>


                    <a
                        href="{{ route('contact') }}"
                        class="
                            vl-nav-link
                            text-sm
                            font-semibold
                            transition-colors
                            duration-200
                            hover:text-vellora-gold
                            {{ request()->routeIs('contact') ? 'text-white vl-active' : 'text-white/70' }}
                        "
                    >
                        Kontak
                    </a>

                </div>


                {{-- =================================================
                     MOBILE BUTTON
                ================================================== --}}

                <button
                    id="mobileMenuButton"
                    type="button"
                    class="
                        md:hidden
                        w-10
                        h-10
                        rounded-xl
                        border
                        border-white/10
                        bg-white/[0.03]
                        flex
                        items-center
                        justify-center
                        text-white
                        hover:border-vellora-gold/30
                        hover:text-vellora-gold
                        transition
                    "
                    aria-label="Buka menu"
                    aria-expanded="false"
                >

                    <svg
                        id="menuOpenIcon"
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />

                    </svg>


                    <svg
                        id="menuCloseIcon"
                        class="w-5 h-5 hidden"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />

                    </svg>

                </button>

            </div>


            {{-- =================================================
                 MOBILE MENU
            ================================================== --}}

            <div
                id="mobileMenu"
                class="
                    mobile-menu
                    hidden-menu
                    md:hidden
                    border-t
                    border-white/[0.08]
                    py-4
                "
            >

                <div class="flex flex-col gap-1">


                    <a
                        href="{{ route('home') }}"
                        class="
                            px-4
                            py-3
                            rounded-xl
                            text-sm
                            font-semibold
                            text-white/80
                            hover:bg-white/[0.04]
                            hover:text-vellora-gold
                            transition
                        "
                    >
                        Home
                    </a>


                    <a
                        href="{{ route('products.katalog') }}"
                        class="
                            px-4
                            py-3
                            rounded-xl
                            text-sm
                            font-semibold
                            text-white/80
                            hover:bg-white/[0.04]
                            hover:text-vellora-gold
                            transition
                        "
                    >
                        Produk
                    </a>


                    <a
                        href="{{ route('home') }}#tentang"
                        class="
                            px-4
                            py-3
                            rounded-xl
                            text-sm
                            font-semibold
                            text-white/80
                            hover:bg-white/[0.04]
                            hover:text-vellora-gold
                            transition
                        "
                    >
                        Tentang
                    </a>


                    <a
                        href="{{ route('articles.index') }}"
                        class="
                            px-4
                            py-3
                            rounded-xl
                            text-sm
                            font-semibold
                            text-white/80
                            hover:bg-white/[0.04]
                            hover:text-vellora-gold
                            transition
                        "
                    >
                        Artikel
                    </a>


                    <a
                        href="{{ route('contact') }}"
                        class="
                            px-4
                            py-3
                            rounded-xl
                            text-sm
                            font-semibold
                            text-white/80
                            hover:bg-white/[0.04]
                            hover:text-vellora-gold
                            transition
                        "
                    >
                        Kontak
                    </a>

                </div>

            </div>

        </div>

    </nav>


    {{-- =========================================================
         MAIN CONTENT
    ========================================================== --}}

    <main class="min-h-screen pt-16 md:pt-[76px]">


        {{-- =========================================================
             SESSION SUCCESS
        ========================================================== --}}

        @if(session('success'))

            <div
                class="
                    container
                    mx-auto
                    px-4
                    pt-5
                "
            >

                <div
                    class="
                        max-w-4xl
                        mx-auto
                        bg-vellora-gold/10
                        border
                        border-vellora-gold/20
                        text-vellora-gold-light
                        rounded-2xl
                        px-5
                        py-4
                        text-sm
                        font-medium
                    "
                >
                    {{ session('success') }}
                </div>

            </div>

        @endif


        @yield('content')

    </main>


    {{-- =========================================================
         FOOTER
    ========================================================== --}}

    <footer
        class="
            bg-vellora-bg
            border-t
            border-[#D4AF37]/20
            pt-14
            pb-8
        "
    >

        <div
            class="
                container
                mx-auto
                px-5
                lg:px-8
            "
        >

            <div
                class="
                    grid
                    grid-cols-1
                    md:grid-cols-3
                    gap-10
                    pb-10
                "
            >


                {{-- =================================================
                     BRAND
                ================================================== --}}

                <div>

                    <a
                        href="{{ route('home') }}"
                        class="
                            footer-brand-link
                            inline-flex
                            items-center
                            gap-3
                            group
                        "
                        aria-label="VELLORA"
                    >

                        <img
                            src="{{ asset('images/vellora-icon.png') }}"
                            alt=""
                            class="footer-brand-icon"
                            onerror="this.style.display='none';"
                        >

                        <span
                            class="
                                text-xl
                                font-extrabold
                                tracking-tight
                                text-white
                                group-hover:text-vellora-gold
                                transition-colors
                            "
                        >
                            VELLORA
                        </span>

                    </a>

                    <p class="mt-3 text-[10px] font-bold uppercase tracking-[0.22em] text-[#D4AF37]">
                        Discover Something Better
                    </p>

                    <p
                        class="
                            text-vellora-muted
                            text-sm
                            leading-relaxed
                            max-w-sm
                            mt-5
                        "
                    >
                        Pusat jual beli kebutuhan digital terpercaya —
                        cepat, aman, dan terpercaya setiap hari.
                    </p>

                </div>


                {{-- =================================================
                     NAVIGASI
                ================================================== --}}

                <div>

                    <h3
                        class="
                            text-sm
                            font-bold
                            text-white
                            mb-4
                        "
                    >
                        Navigasi
                    </h3>


                    <div
                        class="
                            flex
                            flex-col
                            gap-3
                        "
                    >

                        <a
                            href="{{ route('home') }}"
                            class="
                                text-sm
                                text-vellora-muted
                                hover:text-vellora-gold
                                transition
                            "
                        >
                            Home
                        </a>


                        <a
                            href="{{ route('products.katalog') }}"
                            class="
                                text-sm
                                text-vellora-muted
                                hover:text-vellora-gold
                                transition
                            "
                        >
                            Produk
                        </a>

                        <a
                            href="{{ route('home') }}#tentang"
                            class="
                                text-sm
                                text-vellora-muted
                                hover:text-vellora-gold
                                transition
                            "
                        >
                            Tentang
                        </a>


                        <a
                            href="{{ route('articles.index') }}"
                            class="
                                text-sm
                                text-vellora-muted
                                hover:text-vellora-gold
                                transition
                            "
                        >
                            Artikel
                        </a>


                        <a
                            href="{{ route('contact') }}"
                            class="
                                text-sm
                                text-vellora-muted
                                hover:text-vellora-gold
                                transition
                            "
                        >
                            Kontak
                        </a>

                    </div>

                </div>


                {{-- =================================================
                     KONTAK
                ================================================== --}}

                <div>

                    <h3
                        class="
                            text-sm
                            font-bold
                            text-white
                            mb-4
                        "
                    >
                        Hubungi Kami
                    </h3>


                    <div
                        class="
                            flex
                            flex-col
                            gap-3
                        "
                    >

                        <a
                            href="https://wa.me/6285848658854"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="
                                text-sm
                                text-vellora-muted
                                hover:text-vellora-gold
                                transition
                            "
                        >
                            WhatsApp
                        </a>


                        <a
                            href="https://www.instagram.com/n_advisori_?igsi=MW44Mzl2MzlvbXFreQ=="
                            target="_blank"
                            rel="noopener noreferrer"
                            class="
                                text-sm
                                text-vellora-muted
                                hover:text-vellora-gold
                                transition
                            "
                        >
                            Instagram
                        </a>


                        <a
                            href="https://www.tiktok.com/@ur.nko04"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="
                                text-sm
                                text-vellora-muted
                                hover:text-vellora-gold
                                transition
                            "
                        >
                            TikTok
                        </a>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 COPYRIGHT
            ================================================== --}}

            <div
                class="
                    border-t
                    border-[#D4AF37]/15
                    pt-6
                    flex
                    flex-col
                    md:flex-row
                    items-center
                    justify-between
                    gap-3
                "
            >

                <p
                    class="
                        text-xs
                        text-vellora-muted
                    "
                >
                    © {{ date('Y') }} VELLORA. All rights reserved.
                </p>


                <a
                    href="{{ route('home') }}#tentang"
                    class="
                        text-xs
                        text-vellora-muted
                        hover:text-vellora-gold
                        transition
                    "
                >
                    Terms of Service
                </a>

            </div>

        </div>

    </footer>


 <!-- =========================================================
     VELLORA — 3D TUBE / NEON CUSTOM CURSOR (THREE.JS / WEBGL)
     DARK-GOLD LUXURY • ULTRA PERFORMANCE • ZERO DEPENDENCIES
     ========================================================= -->

<!-- Three.js CDN (Stable & Lightweight) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<style>
    /* CSS ISOLATION: Hanya menargetkan canvas kursor */
    #vellora-3d-cursor {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        pointer-events: none !important;
        z-index: 999999 !important;
        display: block;
        background: transparent;
        contain: strict;
    }

    /* Menonaktifkan pada touch device / coarse pointer & reduced motion */
    @media (pointer: coarse), (prefers-reduced-motion: reduce) {
        #vellora-3d-cursor {
            display: none !important;
        }
    }
</style>

<canvas id="vellora-3d-cursor" aria-hidden="true"></canvas>

<script>
/**
 * SENIOR THREE.JS / WEBGL CUSTOM CURSOR ENGINE
 * Theme: Dark-Gold Luxury (#0A0A0A, #D4AF37, #FFDF00, #FFFFFF)
 * Features:
 *  - 3D Spline CatmullRomCurve3 Tube
 *  - Multi-layer glow (Outer Gold Body, Inner Bright Gold, White-Hot Core)
 *  - HUD Square Bracket Crosshair follow cursor (LineSegments + Core)
 *  - Velocity-driven Particle Sparks with Gravity & Pooling
 *  - Interactive element hover detection (a, button, input, [role="button"])
 *  - Single RAF, Single WebGLRenderer, Single Scene, Auto-Dispose (Zero Memory Leak)
 */
(function () {
    'use strict';

    // 1. Guard check: Coarse pointer / Touch screen / Reduced motion
    if (window.matchMedia('(pointer: coarse)').matches ||
        window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    // 2. Guard check: Three.js availability & WebGL support
    if (typeof THREE === 'undefined') {
        console.warn('Three.js belum dimuat. Website tetap berjalan normal.');
        return;
    }

    var canvas = document.getElementById('vellora-3d-cursor');
    if (!canvas) return;

    // Mencegah duplicate cursor / duplicate loop
    if (window.__VELLORA_3D_CURSOR_INITIALIZED__) {
        return;
    }
    window.__VELLORA_3D_CURSOR_INITIALIZED__ = true;

    // =========================================================
    // CONFIGURATION
    // =========================================================
    var CONFIG = {
        MAX_TRAIL: 16,
        MAX_SPARKS: 36,          // 30–40 sparks aktif maksimum
        LERP: 0.42,              // Interpolasi cepat & responsif (0.35 - 0.50)
        TRAIL_LIFE: 340,         // Milidetik umur trail
        SPARK_LIFE: 540,         // Milidetik umur sparks
        SPARK_THRESHOLD: 1.1,    // Ambang responsif: percikan langsung aktif saat kursor bergerak
        TUBE_RADIUS: 6.8,        // +23% lebih tebal dan berbobot (sebelumnya 5.5)
        HOVER_SCALE: 1.35,       // Pembesaran saat hover elemen interaktif
        COLORS: {
            BG: 0x0A0A0A,
            LUXURY_GOLD: 0xD4AF37, // Outer gold body
            BRIGHT_GOLD: 0xFFDF00, // Inner luminous neon
            WHITE: 0xFFFFFF        // Hot white core
        }
    };

    // =========================================================
    // THREE.JS SCENE SETUP
    // =========================================================
    var width = window.innerWidth;
    var height = window.innerHeight;
    var dpr = Math.min(window.devicePixelRatio || 1, 2);

    var scene = new THREE.Scene();

    // Kamera ortografik 1:1 terhadap koordinat piksel layar (0,0 di kiri-atas)
    var camera = new THREE.OrthographicCamera(0, width, 0, height, -1000, 1000);
    camera.position.z = 500;

    var renderer;
    try {
        renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            alpha: true,
            antialias: true,
            powerPreference: 'high-performance',
            premultipliedAlpha: false
        });
        renderer.setPixelRatio(dpr);
        renderer.setSize(width, height);
        renderer.setClearColor(0x000000, 0);
    } catch (e) {
        console.warn('WebGL tidak didukung atau terhambat:', e);
        return;
    }

    // =========================================================
    // LIGHTS
    // =========================================================
    var ambientLight = new THREE.AmbientLight(0xffffff, 0.4);
    scene.add(ambientLight);

    var cursorLight = new THREE.PointLight(CONFIG.COLORS.BRIGHT_GOLD, 2.4, 250);
    cursorLight.position.set(0, 0, 60);
    scene.add(cursorLight);

    // =========================================================
    // SHADERS & MATERIALS (3 LAYERS: GOLD + BRIGHT + WHITE HOT)
    // =========================================================
    var tubeVertexShader = [
        'varying vec2 vUv;',
        'varying vec3 vNormal;',
        'void main() {',
        '    vUv = uv;',
        '    vNormal = normalize(normalMatrix * normal);',
        '    gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);',
        '}'
    ].join('\n');

    var tubeFragmentShader = [
        'uniform vec3 uColorOuter;',
        'uniform vec3 uColorInner;',
        'uniform vec3 uColorCore;',
        'uniform float uHover;',
        'varying vec2 vUv;',
        'varying vec3 vNormal;',
        'void main() {',
        '    float NdotV = max(dot(normalize(vNormal), vec3(0.0, 0.0, 1.0)), 0.0);',
        '    float core = pow(NdotV, 2.2);',
        '    float tail = pow(vUv.x, 0.65);',
        '    vec3 col = mix(uColorOuter, uColorInner, pow(NdotV, 1.1));',
        '    col = mix(col, uColorCore, core * 0.92);',
        '    col += uColorInner * (uHover * 0.35);',
        '    float alpha = clamp((0.98 * tail + core * 0.35), 0.0, 1.0);',
        '    gl_FragColor = vec4(col, alpha);',
        '}'
    ].join('\n');

    var tubeMaterial = new THREE.ShaderMaterial({
        vertexShader: tubeVertexShader,
        fragmentShader: tubeFragmentShader,
        uniforms: {
            uColorOuter: { value: new THREE.Color(CONFIG.COLORS.LUXURY_GOLD) },
            uColorInner: { value: new THREE.Color(CONFIG.COLORS.BRIGHT_GOLD) },
            uColorCore:  { value: new THREE.Color(CONFIG.COLORS.WHITE) },
            uHover:      { value: 0.0 }
        },
        transparent: true,
        blending: THREE.NormalBlending,
        side: THREE.DoubleSide,
        depthTest: false
    });

    var glowMaterial = new THREE.ShaderMaterial({
        vertexShader: tubeVertexShader,
        fragmentShader: [
            'uniform vec3 uGlowColor;',
            'uniform float uHover;',
            'varying vec2 vUv;',
            'varying vec3 vNormal;',
            'void main() {',
            '    float NdotV = max(dot(normalize(vNormal), vec3(0.0, 0.0, 1.0)), 0.0);',
            '    float rim = 1.0 - NdotV;',
            '    float tail = pow(vUv.x, 0.8);',
            '    float alpha = (pow(rim, 1.8) * 0.55 + 0.15) * tail * (1.0 + uHover * 0.4);',
            '    gl_FragColor = vec4(uGlowColor * 1.3, clamp(alpha, 0.0, 0.85));',
            '}'
        ].join('\n'),
        uniforms: {
            uGlowColor: { value: new THREE.Color(CONFIG.COLORS.BRIGHT_GOLD) },
            uHover:     { value: 0.0 }
        },
        transparent: true,
        blending: THREE.AdditiveBlending,
        side: THREE.FrontSide,
        depthTest: false
    });

    var coreMaterial = new THREE.MeshBasicMaterial({
        color: CONFIG.COLORS.WHITE,
        transparent: true,
        opacity: 0.95,
        blending: THREE.AdditiveBlending,
        depthTest: false
    });

    var tubeMesh = null;
    var tubeGlowMesh = null;
    var tubeCoreMesh = null;

    // =========================================================
    // SQUARE / CROSSHAIR HUD
    // =========================================================
    var hudGroup = new THREE.Group();
    hudGroup.position.set(-1000, -1000, 10);
    scene.add(hudGroup);

    // Frame persegi sudut: ┌  ┐  └  ┘
    var s = 9.0;
    var c = 4.5;
    var squareVerts = new Float32Array([
        -s, s - c, 0,  -s, s, 0,      -s, s, 0,      -s + c, s, 0,
         s - c, s, 0,   s, s, 0,       s, s, 0,       s, s - c, 0,
         s, -s + c, 0,  s, -s, 0,      s, -s, 0,      s - c, -s, 0,
        -s + c, -s, 0, -s, -s, 0,     -s, -s, 0,     -s, -s + c, 0
    ]);
    var squareGeo = new THREE.BufferGeometry();
    squareGeo.setAttribute('position', new THREE.BufferAttribute(squareVerts, 3));
    var squareMat = new THREE.LineBasicMaterial({
        color: CONFIG.COLORS.BRIGHT_GOLD,
        transparent: true,
        opacity: 0.88,
        blending: THREE.AdditiveBlending,
        depthTest: false
    });
    var squareLines = new THREE.LineSegments(squareGeo, squareMat);
    hudGroup.add(squareLines);

    // Crosshair ticks '+'
    var td = 4.0;
    var tl = 2.5;
    var crossVerts = new Float32Array([
         0,  td, 0,   0,  td + tl, 0,
         0, -td, 0,   0, -(td + tl), 0,
        -td,  0, 0, -(td + tl),  0, 0,
         td,  0, 0,  td + tl,   0, 0
    ]);
    var crossGeo = new THREE.BufferGeometry();
    crossGeo.setAttribute('position', new THREE.BufferAttribute(crossVerts, 3));
    var crossMat = new THREE.LineBasicMaterial({
        color: CONFIG.COLORS.LUXURY_GOLD,
        transparent: true,
        opacity: 0.92,
        blending: THREE.AdditiveBlending,
        depthTest: false
    });
    var crossLines = new THREE.LineSegments(crossGeo, crossMat);
    hudGroup.add(crossLines);

    // Central white-hot core
    var centerDotGeo = new THREE.CircleGeometry(1.9, 16);
    var centerDotMat = new THREE.MeshBasicMaterial({
        color: CONFIG.COLORS.WHITE,
        transparent: true,
        opacity: 1.0,
        blending: THREE.AdditiveBlending,
        depthTest: false
    });
    var centerDot = new THREE.Mesh(centerDotGeo, centerDotMat);
    centerDot.position.z = 1;
    hudGroup.add(centerDot);

    // =========================================================
    // PARTICLE SPARKS SYSTEM
    // =========================================================
    var sparks = [];
    var sparkPos = new Float32Array(CONFIG.MAX_SPARKS * 3);
    var sparkCol = new Float32Array(CONFIG.MAX_SPARKS * 3);
    var sparkSizes = new Float32Array(CONFIG.MAX_SPARKS);
    var sparkAlphas = new Float32Array(CONFIG.MAX_SPARKS);

    var sparksGeo = new THREE.BufferGeometry();
    sparksGeo.setAttribute('position', new THREE.BufferAttribute(sparkPos, 3));
    sparksGeo.setAttribute('color',    new THREE.BufferAttribute(sparkCol, 3));
    sparksGeo.setAttribute('size',     new THREE.BufferAttribute(sparkSizes, 1));
    sparksGeo.setAttribute('alpha',    new THREE.BufferAttribute(sparkAlphas, 1));

    var sparksMat = new THREE.ShaderMaterial({
        vertexShader: [
            'attribute float size;',
            'attribute float alpha;',
            'varying vec3 vColor;',
            'varying float vAlpha;',
            'void main() {',
            '    vColor = color;',
            '    vAlpha = alpha;',
            '    vec4 mv = modelViewMatrix * vec4(position, 1.0);',
            '    gl_PointSize = size;',
            '    gl_Position = projectionMatrix * mv;',
            '}'
        ].join('\n'),
        fragmentShader: [
            'varying vec3 vColor;',
            'varying float vAlpha;',
            'void main() {',
            '    vec2 p = gl_PointCoord - vec2(0.5);',
            '    float ax = abs(p.x);',
            '    float ay = abs(p.y);',
            '    float rayH = max(1.0 - ay * 7.5, 0.0) * max(1.0 - ax * 2.2, 0.0);',
            '    float rayV = max(1.0 - ax * 7.5, 0.0) * max(1.0 - ay * 2.2, 0.0);',
            '    float crossRays = max(rayH, rayV);',
            '    float diamond = max(1.0 - (ax + ay) * 2.1, 0.0);',
            '    float r = length(p);',
            '    float nucleus = max(1.0 - r * 3.8, 0.0);',
            '    float starIntensity = max(diamond * 0.85, crossRays);',
            '    if (starIntensity <= 0.015 && nucleus <= 0.015) discard;',
            '    vec3 finalColor = mix(vColor, vec3(1.0), nucleus * 0.9 + starIntensity * 0.3);',
            '    float finalAlpha = vAlpha * clamp(starIntensity * 0.95 + nucleus * 0.55, 0.0, 1.0);',
            '    gl_FragColor = vec4(finalColor * 1.3, finalAlpha);',
            '}'
        ].join('\n'),
        transparent: true,
        blending: THREE.AdditiveBlending,
        depthTest: false,
        vertexColors: true
    });

    var sparksMesh = new THREE.Points(sparksGeo, sparksMat);
    scene.add(sparksMesh);

    // =========================================================
    // POINTER TRACKING & LERP
    // =========================================================
    var targetMouse = new THREE.Vector2(-1000, -1000);
    var currentMouse = new THREE.Vector2(-1000, -1000);
    var previousMouse = new THREE.Vector2(-1000, -1000);
    var mouseSpeed = 0;
    var isHovering = false;
    var hoverProgress = 0;
    var isVisible = false;
    var trail = [];

    window.addEventListener('mousemove', function (e) {
        isVisible = true;
        targetMouse.x = e.clientX;
        targetMouse.y = e.clientY;

        if (currentMouse.x < -500) {
            currentMouse.copy(targetMouse);
            previousMouse.copy(targetMouse);
        }

        // Deteksi elemen interaktif secara aman tanpa memodifikasi DOM
        var el = e.target;
        var interactive = el && el.closest && el.closest('a, button, input, textarea, select, [role="button"], [data-cursor], [data-cursor-hover]');
        isHovering = Boolean(interactive);
    }, { passive: true });

    document.addEventListener('mouseleave', function () {
        isVisible = false;
        trail = [];
    }, { passive: true });

    document.addEventListener('mouseenter', function (e) {
        isVisible = true;
        targetMouse.x = e.clientX;
        targetMouse.y = e.clientY;
        currentMouse.copy(targetMouse);
        previousMouse.copy(targetMouse);
        trail = [];
    }, { passive: true });

    window.addEventListener('resize', function () {
        width = window.innerWidth;
        height = window.innerHeight;
        dpr = Math.min(window.devicePixelRatio || 1, 2);

        camera.right = width;
        camera.bottom = height;
        camera.updateProjectionMatrix();

        renderer.setPixelRatio(dpr);
        renderer.setSize(width, height);
    }, { passive: true });

    document.addEventListener('visibilitychange', function () {
        if (document.hidden) {
            isVisible = false;
            trail = [];
        }
    });

    // =========================================================
    // CORE FUNCTIONS
    // =========================================================
    function updateMouse() {
        previousMouse.copy(currentMouse);
        currentMouse.lerp(targetMouse, CONFIG.LERP);

        var dx = currentMouse.x - previousMouse.x;
        var dy = currentMouse.y - previousMouse.y;
        mouseSpeed = Math.sqrt(dx * dx + dy * dy);

        var targetHover = isHovering ? 1.0 : 0.0;
        hoverProgress += (targetHover - hoverProgress) * 0.16;
    }

    function updateTrail(time) {
        if (!isVisible) {
            if (trail.length > 0) trail.pop();
            return;
        }

        var last = trail[0];
        var cur = new THREE.Vector3(currentMouse.x, currentMouse.y, 0);

        if (!last || cur.distanceTo(last.pos) > 1.2) {
            trail.unshift({ pos: cur, time: time });
        }

        if (trail.length > CONFIG.MAX_TRAIL) {
            trail.length = CONFIG.MAX_TRAIL;
        }

        while (trail.length > 0 && time - trail[trail.length - 1].time > CONFIG.TRAIL_LIFE) {
            trail.pop();
        }
    }

    function updateTube() {
        if (trail.length < 3 || !isVisible) {
            if (tubeMesh) tubeMesh.visible = false;
            if (tubeGlowMesh) tubeGlowMesh.visible = false;
            if (tubeCoreMesh) tubeCoreMesh.visible = false;
            return;
        }

        var points = [];
        for (var i = trail.length - 1; i >= 0; i--) {
            var p = trail[i].pos;
            var zWave = Math.sin((trail.length - 1 - i) * 0.45) * 4.0;
            points.push(new THREE.Vector3(p.x, p.y, zWave));
        }

        // Validasi titik unik untuk spline
        var cleanPoints = [points[0]];
        for (var j = 1; j < points.length; j++) {
            if (points[j].distanceTo(cleanPoints[cleanPoints.length - 1]) > 0.5) {
                cleanPoints.push(points[j]);
            }
        }
        if (cleanPoints.length < 3) return;

        var curve = new THREE.CatmullRomCurve3(cleanPoints, false, 'centripetal', 0.5);
        var hoverScale = 1.0 + hoverProgress * (CONFIG.HOVER_SCALE - 1.0);
        var baseR = CONFIG.TUBE_RADIUS * hoverScale;

        // Cleanup memori GPU sebelumnya secara efisien
        if (tubeMesh && tubeMesh.geometry) tubeMesh.geometry.dispose();
        if (tubeGlowMesh && tubeGlowMesh.geometry) tubeGlowMesh.geometry.dispose();
        if (tubeCoreMesh && tubeCoreMesh.geometry) tubeCoreMesh.geometry.dispose();

        // Layer 1: Solid Luxury Gold Body
        var mainGeo = new THREE.TubeGeometry(curve, 24, baseR, 8, false);
        if (!tubeMesh) {
            tubeMesh = new THREE.Mesh(mainGeo, tubeMaterial);
            scene.add(tubeMesh);
        } else {
            tubeMesh.geometry = mainGeo;
            tubeMesh.visible = true;
        }

        // Layer 2: Outer Bright Gold Additive Glow
        var glowGeo = new THREE.TubeGeometry(curve, 20, baseR * 1.62, 6, false);
        if (!tubeGlowMesh) {
            tubeGlowMesh = new THREE.Mesh(glowGeo, glowMaterial);
            scene.add(tubeGlowMesh);
        } else {
            tubeGlowMesh.geometry = glowGeo;
            tubeGlowMesh.visible = true;
        }

        // Layer 3: Hot White Core Filament - Diperbesar agar perpaduan putih + emas lebih terlihat
        var coreGeo = new THREE.TubeGeometry(curve, 18, baseR * 0.44, 5, false);
        if (!tubeCoreMesh) {
            tubeCoreMesh = new THREE.Mesh(coreGeo, coreMaterial);
            scene.add(tubeCoreMesh);
        } else {
            tubeCoreMesh.geometry = coreGeo;
            tubeCoreMesh.visible = true;
        }

        tubeMaterial.uniforms.uHover.value = hoverProgress;
        glowMaterial.uniforms.uHover.value = hoverProgress;

        cursorLight.position.set(currentMouse.x, currentMouse.y, 45);
        cursorLight.intensity = 2.2 + hoverProgress * 1.5;
    }

    function updateCrosshair(time) {
        if (!isVisible) {
            hudGroup.visible = false;
            return;
        }
        hudGroup.visible = true;
        hudGroup.position.set(currentMouse.x, currentMouse.y, 10);
        squareLines.rotation.z = time * 0.0008;

        var scale = 1.0 + hoverProgress * 0.28;
        hudGroup.scale.set(scale, scale, 1);
    }

    var goldC = new THREE.Color(CONFIG.COLORS.BRIGHT_GOLD);
    var luxuryC = new THREE.Color(CONFIG.COLORS.LUXURY_GOLD);
    var whiteC = new THREE.Color(CONFIG.COLORS.WHITE);

    function spawnSparks(time) {
        if (!isVisible || mouseSpeed < CONFIG.SPARK_THRESHOLD || sparks.length >= CONFIG.MAX_SPARKS) return;

        // Jumlah partikel membesar proporsional dengan akselerasi gerakan mouse (1-4 partikel per frame)
        var count = 1;
        if (mouseSpeed > 8.0) {
            count = 4;
        } else if (mouseSpeed > 4.5) {
            count = 3;
        } else if (mouseSpeed > 2.8) {
            count = 2;
        }
        count = Math.min(count, CONFIG.MAX_SPARKS - sparks.length);

        var dx = currentMouse.x - previousMouse.x;
        var dy = currentMouse.y - previousMouse.y;
        var motionAngle = Math.atan2(dy, dx);

        for (var i = 0; i < count; i++) {
            var spreadAngle = motionAngle + (Math.random() - 0.5) * Math.PI * 1.4;
            var vel = 1.2 + Math.random() * (Math.min(mouseSpeed, 14.0) * 0.28 + 2.5);

            var colorRoll = Math.random();
            var chosenColor = goldC;
            if (colorRoll > 0.60) {
                chosenColor = whiteC;
            } else if (colorRoll < 0.20) {
                chosenColor = luxuryC;
            }

            sparks.push({
                x: currentMouse.x + (Math.random() - 0.5) * 4.0,
                y: currentMouse.y + (Math.random() - 0.5) * 4.0,
                z: 5,
                vx: Math.cos(spreadAngle) * vel,
                vy: Math.sin(spreadAngle) * vel,
                vz: (Math.random() - 0.5) * 3.0,
                drift: (Math.random() - 0.5) * 0.12,
                grav: 0.025 + Math.random() * 0.045,
                size: 6.5 + Math.random() * 6.5, // 6.5px - 13px diamond star sparkle
                born: time,
                life: CONFIG.SPARK_LIFE * (0.75 + Math.random() * 0.5),
                col: chosenColor
            });
        }
    }

    function updateSparks(delta, time) {
        for (var i = sparks.length - 1; i >= 0; i--) {
            var s = sparks[i];
            var age = time - s.born;
            if (age >= s.life) {
                sparks.splice(i, 1);
                continue;
            }
            s.x += s.vx * delta * 0.06;
            s.y += s.vy * delta * 0.06;
            s.z += s.vz * delta * 0.06;

            s.vx += Math.sin(age * 0.015) * s.drift * delta * 0.06;
            s.vy += s.grav * delta * 0.06;

            s.vx *= 0.980;
            s.vy *= 0.980;
        }

        var max = CONFIG.MAX_SPARKS;
        for (var k = 0; k < max; k++) {
            var k3 = k * 3;
            if (k < sparks.length) {
                var sp = sparks[k];
                var prog = (time - sp.born) / sp.life;
                var alpha = Math.pow(1.0 - prog, 1.8);

                sparkPos[k3] = sp.x;
                sparkPos[k3 + 1] = sp.y;
                sparkPos[k3 + 2] = sp.z;

                sparkCol[k3] = sp.col.r;
                sparkCol[k3 + 1] = sp.col.g;
                sparkCol[k3 + 2] = sp.col.b;

                sparkSizes[k] = sp.size * (1.0 - prog * 0.4);
                sparkAlphas[k] = alpha;
            } else {
                sparkPos[k3] = -9999;
                sparkPos[k3 + 1] = -9999;
                sparkPos[k3 + 2] = -9999;
                sparkSizes[k] = 0;
                sparkAlphas[k] = 0;
            }
        }

        sparksGeo.attributes.position.needsUpdate = true;
        sparksGeo.attributes.color.needsUpdate = true;
        sparksGeo.attributes.size.needsUpdate = true;
        sparksGeo.attributes.alpha.needsUpdate = true;
    }

    // =========================================================
    // SINGLE ANIMATION LOOP (60+ FPS)
    // =========================================================
    var lastTime = performance.now();

    function animate(now) {
        requestAnimationFrame(animate);

        var delta = Math.min(now - lastTime, 32);
        lastTime = now;

        updateMouse();
        updateTrail(now);
        updateTube();
        updateCrosshair(now);
        spawnSparks(now);
        updateSparks(delta, now);

        renderer.render(scene, camera);
    }

    requestAnimationFrame(animate);
})();
</script>

@stack('scripts')

<style>
    /* VELLORA UX layer: progress, back-to-top, navbar scroll state, focus, toast */
    .vl-progress{position:fixed;top:0;left:0;height:2px;width:100%;z-index:9998;transform-origin:0 50%;transform:scaleX(0);background:linear-gradient(90deg,#D4AF37,#FFDF00);pointer-events:none}
    .vl-top{position:fixed;right:20px;bottom:20px;z-index:60;width:42px;height:42px;display:flex;align-items:center;justify-content:center;border-radius:999px;border:1px solid rgba(212,175,55,.4);background:rgba(8,8,8,.85);color:#D4AF37;opacity:0;transform:translateY(8px);pointer-events:none;transition:opacity .25s,transform .25s,border-color .25s;cursor:pointer}
    .vl-top.on{opacity:1;transform:none;pointer-events:auto}
    .vl-top:hover{border-color:#D4AF37}
    /* NAVBAR premium: kaca hitam, garis emas tipis */
    #mainNavbar{background:rgba(3,3,3,.55)!important;-webkit-backdrop-filter:blur(6px);backdrop-filter:blur(6px);border-bottom:1px solid rgba(212,175,55,.2)!important;box-shadow:0 10px 30px rgba(0,0,0,.35);transition:background-color .3s,border-color .3s}
    #mainNavbar.vl-scrolled{background:rgba(3,3,3,.86)!important;border-bottom-color:rgba(212,175,55,.3)!important}
    @media (min-width:641px){.brand-icon,.vellora-logo-3d--nav{width:38px;height:38px}.brand-name{font-size:20px}}
    .vl-nav-link{position:relative;padding:6px 2px;letter-spacing:.02em;transition:color .2s,text-shadow .2s}
    .vl-nav-link:hover{text-shadow:0 0 16px rgba(212,175,55,.55)}
    .vl-nav-link::after{content:"";position:absolute;left:0;right:0;bottom:-3px;height:1px;background:linear-gradient(90deg,transparent,#D4AF37,transparent);transform:scaleX(0);transition:transform .3s ease}
    .vl-nav-link:hover::after,.vl-nav-link.vl-active::after{transform:scaleX(1)}
    #mobileMenu{position:absolute;left:12px;right:12px;top:calc(100% + 8px);padding:10px!important;border:1px solid rgba(212,175,55,.3)!important;border-radius:18px;background:rgba(5,5,5,.94);-webkit-backdrop-filter:blur(14px);backdrop-filter:blur(14px);box-shadow:0 20px 50px rgba(0,0,0,.6);transition:opacity .25s ease,transform .25s ease,visibility .25s}
    #mobileMenu.hidden-menu{opacity:0;transform:translateY(-8px);visibility:hidden;pointer-events:none}
    #mobileMenu a{min-height:44px;display:flex;align-items:center}
    #mobileMenu a.is-active{color:#FFDF00;background:rgba(212,175,55,.08);box-shadow:inset 2px 0 0 #D4AF37}
    #mobileMenuButton{transition:border-color .2s,color .2s}
    .vr-adapt{display:flex;flex-wrap:wrap;justify-content:center;gap:1.5rem}
    .vr-adapt>*{flex:1 1 280px;max-width:380px}
    a:focus-visible,button:focus-visible,input:focus-visible,select:focus-visible,textarea:focus-visible{outline:2px solid #D4AF37;outline-offset:3px}
    .vl-toast{position:fixed;left:50%;bottom:28px;z-index:9997;transform:translate(-50%,12px);padding:10px 18px;border-radius:999px;background:#111;border:1px solid rgba(212,175,55,.45);color:#fff;font-size:13px;opacity:0;pointer-events:none;transition:opacity .25s,transform .25s}
    .vl-toast.on{opacity:1;transform:translate(-50%,0)}
    @media (prefers-reduced-motion:reduce){.vl-top,.vl-toast,#mainNavbar,#mobileMenu,.vl-nav-link,.vl-nav-link::after{transition:none}}
</style>
<script>
(function () {
    if (window.__VL_UX__) return; window.__VL_UX__ = true;
    var bar = document.createElement('div'); bar.className = 'vl-progress'; bar.setAttribute('aria-hidden','true');
    var top = document.createElement('button'); top.type='button'; top.className='vl-top'; top.setAttribute('aria-label','Kembali ke atas'); top.innerHTML='<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/></svg>';
    var toast = document.createElement('div'); toast.className='vl-toast'; toast.setAttribute('role','status');
    document.body.appendChild(bar); document.body.appendChild(top); document.body.appendChild(toast);
    var nav = document.getElementById('mainNavbar'), tick = false, tt, subs = [];
    function frame(){ tick=false; var y=window.pageYOffset, m=document.documentElement.scrollHeight-window.innerHeight;
        bar.style.transform='scaleX('+(m>0?Math.min(y/m,1):0)+')'; top.classList.toggle('on', y>600); if(nav) nav.classList.toggle('vl-scrolled', y>24); for(var k=0;k<subs.length;k++) subs[k](); }
    window.velloraSchedule = function(fn){ subs.push(fn); return function(){ if(!tick){ tick=true; requestAnimationFrame(frame);} }; };
    window.addEventListener('scroll', function(){ if(!tick){ tick=true; requestAnimationFrame(frame);} }, {passive:true});
    window.addEventListener('resize', frame); frame();
    top.addEventListener('click', function(){ window.scrollTo({top:0,behavior:window.matchMedia('(prefers-reduced-motion: reduce)').matches?'auto':'smooth'}); });
    /* Menu mobile: buka/tutup, aria, Esc, klik luar, tandai halaman aktif */
    (function () {
        var mb = document.getElementById('mobileMenuButton'), mm = document.getElementById('mobileMenu'); if (!mb || !mm) return;
        var oi = document.getElementById('menuOpenIcon'), ci = document.getElementById('menuCloseIcon');
        mb.setAttribute('aria-controls', 'mobileMenu'); mb.setAttribute('aria-expanded', 'false'); mb.setAttribute('aria-label', 'Buka menu');
        function setMenu(o) { mm.classList.toggle('hidden-menu', !o); mb.setAttribute('aria-expanded', o ? 'true' : 'false'); mb.setAttribute('aria-label', o ? 'Tutup menu' : 'Buka menu'); if (oi) oi.classList.toggle('hidden', o); if (ci) ci.classList.toggle('hidden', !o); }
        mb.addEventListener('click', function () { setMenu(mm.classList.contains('hidden-menu')); });
        mm.addEventListener('click', function (e) { if (e.target.closest('a')) setMenu(false); });
        document.addEventListener('click', function (e) { if (!mm.classList.contains('hidden-menu') && !mm.contains(e.target) && !mb.contains(e.target)) setMenu(false); });
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !mm.classList.contains('hidden-menu')) { setMenu(false); mb.focus(); } });
        window.addEventListener('resize', function () { if (window.innerWidth >= 768) setMenu(false); });
        var brand = document.querySelector('.brand-link'), homePath = brand ? new URL(brand.href).pathname : '/', path = location.pathname;
        mm.querySelectorAll('a').forEach(function (a) {
            if (a.hash) return;
            var on = a.pathname === homePath ? path === homePath : (path === a.pathname || path.indexOf(a.pathname + '/') === 0);
            if (on) { a.classList.add('is-active'); a.setAttribute('aria-current', 'page'); }
        });
    })();
    /* Terakhir dilihat (localStorage, tanpa data sensitif) */
    var RK = 'vellora_recent_v1';
    function rRead(){ try { var a = JSON.parse(localStorage.getItem(RK) || '[]'); return Array.isArray(a) ? a : []; } catch (e) { return []; } }
    function safeUrl(u){ try { return new URL(u, location.href).origin === location.origin ? u : null; } catch (e) { return null; } }
    window.velloraRecent = {
        save: function (p) { try { var a = rRead().filter(function (x) { return x && x.id !== p.id; }); a.unshift(p); localStorage.setItem(RK, JSON.stringify(a.slice(0, 6))); } catch (e) {} },
        render: function (box, excludeId, max) {
            if (!box) return 0; box.textContent = '';
            var items = rRead().filter(function (x) { return x && x.id !== excludeId && safeUrl(x.url); }).slice(0, max || 4);
            items.forEach(function (x) {
                var a = document.createElement('a'); a.href = x.url;
                a.className = 'flex items-center gap-3 rounded-2xl border border-white/10 bg-white/[0.02] p-3 transition hover:border-[#D4AF37]/40';
                var im = safeUrl(x.image);
                if (im) { var i = document.createElement('img'); i.src = im; i.alt = ''; i.loading = 'lazy'; i.className = 'h-14 w-14 flex-none rounded-xl bg-[#111] object-cover'; a.appendChild(i); }
                var d = document.createElement('div'); d.className = 'min-w-0';
                var n = document.createElement('p'); n.className = 'truncate text-sm font-bold text-white'; n.textContent = String(x.name || '');
                var pr = document.createElement('p'); pr.className = 'text-xs text-zinc-400'; pr.textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(Number(x.price) || 0);
                d.appendChild(n); d.appendChild(pr); a.appendChild(d); box.appendChild(a);
            });
            return items.length;
        }
    };
    /* Loading state form POST + cegah kirim ganda */
    document.addEventListener('submit', function (e) {
        var f = e.target; if (!f || (f.method || '').toLowerCase() !== 'post' || e.defaultPrevented) return;
        var b = f.querySelector('[type="submit"]'); if (!b || b.disabled) return;
        setTimeout(function () { b.dataset.vlHtml = b.innerHTML; b.disabled = true; b.setAttribute('aria-busy', 'true'); b.textContent = 'Memproses…'; }, 0);
    });
    window.addEventListener('pageshow', function (e) { if (!e.persisted) return; document.querySelectorAll('[data-vl-html]').forEach(function (b) { b.innerHTML = b.dataset.vlHtml; b.disabled = false; b.removeAttribute('aria-busy'); }); });
    /* Fallback gambar rusak (satu listener global) */
    var FB = 'data:image/svg+xml;utf8,' + encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 90"><rect width="120" height="90" fill="#111"/><path d="M45 32l15 28 15-28" stroke="#D4AF37" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>');
    document.addEventListener('error', function (e) { var t = e.target; if (t && t.tagName === 'IMG' && !t.dataset.vlFb) { t.dataset.vlFb = '1'; t.src = FB; } }, true);
    window.velloraToast = function(msg){ toast.textContent=msg; toast.classList.add('on'); clearTimeout(tt); tt=setTimeout(function(){toast.classList.remove('on');},2200); };
    document.addEventListener('click', function(e){ var b=e.target.closest('[data-copy]'); if(!b) return; var v=b.getAttribute('data-copy');
        (navigator.clipboard?navigator.clipboard.writeText(v):Promise.reject()).then(function(){window.velloraToast('Nomor disalin: '+v);}).catch(function(){window.velloraToast('Gagal menyalin, salin manual: '+v);}); });
})();
</script>
</body>
</html>
