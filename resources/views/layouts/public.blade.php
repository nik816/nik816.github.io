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
           PREMIUM SCROLL REVEAL
           
           Efek:
           - mulai dari bawah
           - sedikit mengecil
           - blur
           - kemudian naik
           - membesar normal
           - blur hilang
        ========================================================= */

        .reveal {

            opacity: 0;

            transform:
                translateY(55px)
                scale(0.97);

            filter:
                blur(6px);

            transition:
                opacity .8s cubic-bezier(.22, 1, .36, 1),
                transform .8s cubic-bezier(.22, 1, .36, 1),
                filter .8s cubic-bezier(.22, 1, .36, 1);

            will-change:
                opacity,
                transform,
                filter;
        }


        .reveal.is-visible {

            opacity: 1;

            transform:
                translateY(0)
                scale(1);

            filter:
                blur(0);
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


        .navbar.scrolled {

            background:
                rgba(8, 8, 8, .92);

            border-color:
                rgba(255, 255, 255, .08);

            box-shadow:
                0 10px 40px rgba(0, 0, 0, .28);

            backdrop-filter:
                blur(16px);

            -webkit-backdrop-filter:
                blur(16px);
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
            background: radial-gradient(circle, rgba(245,215,110,.20), transparent 68%);
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
            background: linear-gradient(105deg, transparent 0%, rgba(255,255,255,.52) 48%, transparent 72%);
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


            .reveal {

                transform:
                    translateY(45px)
                    scale(.98);

                filter:
                    blur(5px);
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


            .reveal {

                opacity:
                    1;

                transform:
                    none;

                filter:
                    none;

                transition:
                    none;
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
                    h-[76px]
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

                    <span class="vellora-logo-3d vellora-logo-3d--nav" aria-hidden="true">
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
                            text-sm
                            font-semibold
                            transition-colors
                            duration-200
                            hover:text-vellora-gold
                            {{ request()->routeIs('home') ? 'text-white' : 'text-white/70' }}
                        "
                    >
                        Home
                    </a>


                    <a
                        href="{{ route('products.katalog') }}"
                        class="
                            text-sm
                            font-semibold
                            transition-colors
                            duration-200
                            hover:text-vellora-gold
                            {{ request()->routeIs('products.*') ? 'text-white' : 'text-white/70' }}
                        "
                    >
                        Produk
                    </a>


                    <a
                        href="{{ route('home') }}#tentang"
                        class="
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
                            text-sm
                            font-semibold
                            transition-colors
                            duration-200
                            hover:text-vellora-gold
                            {{ request()->routeIs('articles.*') ? 'text-white' : 'text-white/70' }}
                        "
                    >
                        Artikel
                    </a>


                    <a
                        href="{{ route('contact') }}"
                        class="
                            text-sm
                            font-semibold
                            transition-colors
                            duration-200
                            hover:text-vellora-gold
                            {{ request()->routeIs('contact') ? 'text-white' : 'text-white/70' }}
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

    <main class="min-h-screen pt-[76px]">


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
            border-white/[0.08]
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
                            alt="VA"
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
                    border-white/[0.08]
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


    {{-- =========================================================
     JAVASCRIPT
========================================================== --}}

<script>

    document.addEventListener(
        'DOMContentLoaded',
        function () {

            /* =================================================
               NAVBAR SCROLL EFFECT
            ================================================== */

            const navbar =
                document.getElementById('mainNavbar');

            function handleNavbarScroll() {

                if (!navbar) return;

                if (window.scrollY > 20) {

                    navbar.classList.add('scrolled');

                } else {

                    navbar.classList.remove('scrolled');

                }
            }

            handleNavbarScroll();

            window.addEventListener(
                'scroll',
                handleNavbarScroll,
                { passive: true }
            );


            /* =================================================
               MOBILE MENU
            ================================================== */

            const mobileButton =
                document.getElementById('mobileMenuButton');

            const mobileMenu =
                document.getElementById('mobileMenu');

            const menuOpenIcon =
                document.getElementById('menuOpenIcon');

            const menuCloseIcon =
                document.getElementById('menuCloseIcon');

            if (
                mobileButton &&
                mobileMenu &&
                menuOpenIcon &&
                menuCloseIcon
            ) {

                mobileButton.addEventListener(
                    'click',
                    function () {

                        const isOpen =
                            mobileButton.getAttribute(
                                'aria-expanded'
                            ) === 'true';

                        if (isOpen) {

                            mobileMenu.classList.add(
                                'hidden-menu'
                            );

                            menuOpenIcon.classList.remove(
                                'hidden'
                            );

                            menuCloseIcon.classList.add(
                                'hidden'
                            );

                            mobileButton.setAttribute(
                                'aria-expanded',
                                'false'
                            );

                        } else {

                            mobileMenu.classList.remove(
                                'hidden-menu'
                            );

                            menuOpenIcon.classList.add(
                                'hidden'
                            );

                            menuCloseIcon.classList.remove(
                                'hidden'
                            );

                            mobileButton.setAttribute(
                                'aria-expanded',
                                'true'
                            );
                        }
                    }
                );


                mobileMenu
                    .querySelectorAll('a')
                    .forEach(function (link) {

                        link.addEventListener(
                            'click',
                            function () {

                                mobileMenu.classList.add(
                                    'hidden-menu'
                                );

                                menuOpenIcon.classList.remove(
                                    'hidden'
                                );

                                menuCloseIcon.classList.add(
                                    'hidden'
                                );

                                mobileButton.setAttribute(
                                    'aria-expanded',
                                    'false'
                                );

                            }
                        );

                    });

            }


            /* =================================================
               SCROLL REVEAL
               MUNCUL SETIAP KALI MASUK LAYAR
            ================================================== */

            const revealElements =
                document.querySelectorAll('.reveal');


            if (!revealElements.length) {
                return;
            }


            const reducedMotion =
                window.matchMedia &&
                window.matchMedia(
                    '(prefers-reduced-motion: reduce)'
                ).matches;


            if (reducedMotion) {

                revealElements.forEach(
                    function (element) {

                        element.classList.add(
                            'is-visible'
                        );

                    }
                );

                return;
            }


            /* =================================================
               FALLBACK BROWSER LAMA
            ================================================== */

            if (
                !('IntersectionObserver' in window)
            ) {

                revealElements.forEach(
                    function (element) {

                        element.classList.add(
                            'is-visible'
                        );

                    }
                );

                return;
            }


            /* =================================================
               INTERSECTION OBSERVER
               
               TIDAK ADA observer.unobserve()
               supaya efek bisa berulang.
            ================================================== */

            const revealObserver =
                new IntersectionObserver(
                    function (entries) {

                        entries.forEach(
                            function (entry) {

                                if (
                                    entry.isIntersecting
                                ) {

                                    /*
                                     * Masuk layar:
                                     * tampilkan efek reveal
                                     */
                                    entry.target.classList.add(
                                        'is-visible'
                                    );

                                } else {

                                    /*
                                     * Keluar layar:
                                     * reset supaya nanti
                                     * bisa muncul lagi.
                                     */
                                    entry.target.classList.remove(
                                        'is-visible'
                                    );

                                }

                            }
                        );

                    },
                    {
                        threshold: 0.12,

                        rootMargin:
                            '0px 0px -80px 0px'
                    }
                );


            revealElements.forEach(
                function (element) {

                    revealObserver.observe(
                        element
                    );

                }
            );

        }
    );

</script>


@stack('scripts')

</body>

</html>

    {{-- =========================================================
     VELLORA 3D MULTI NEON TUBE CURSOR
     - Banyak tube 3D
     - Setiap tube warna berbeda
     - Glow + particles
     - Hilang saat cursor diam
========================================================= --}}

<style>
    #vellora-3d-cursor {
        position: fixed;
        inset: 0;
        width: 100vw;
        height: 100vh;
        z-index: 999999;
        pointer-events: none;
        display: block;
    }

    @media (pointer: coarse) {
        #vellora-3d-cursor {
            display: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #vellora-3d-cursor {
            display: none;
        }
    }
</style>

<canvas id="vellora-3d-cursor"></canvas>

<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js"></script>

<script>
(() => {
    'use strict';

    const canvas =
        document.getElementById('vellora-3d-cursor');

    if (!canvas) return;

    if (typeof THREE === 'undefined') {
        console.warn(
            'Vellora 3D Cursor: Three.js gagal dimuat.'
        );
        return;
    }

    /* =========================================================
       SCENE
    ========================================================= */

    const scene = new THREE.Scene();

    const camera =
        new THREE.OrthographicCamera(
            window.innerWidth / -2,
            window.innerWidth / 2,
            window.innerHeight / 2,
            window.innerHeight / -2,
            -1000,
            1000
        );

    camera.position.z = 500;

    const renderer =
        new THREE.WebGLRenderer({
            canvas: canvas,
            alpha: true,
            antialias: true,
            powerPreference: 'high-performance'
        });

    renderer.setPixelRatio(
        Math.min(window.devicePixelRatio || 1, 2)
    );

    renderer.setSize(
        window.innerWidth,
        window.innerHeight
    );

    renderer.setClearColor(0x000000, 0);

    /* =========================================================
       WARNA
       SETIAP TUBE BERBEDA
    ========================================================= */

    const tubeColors = [
        0xffffff, // White
        0xff3df2, // Pink
        0x9b5cff, // Purple
        0x4da6ff, // Blue
        0xffee32, // Yellow
        0xffb52e, // Orange
        0xff6b35, // Orange Red
        0x63f3ff, // Cyan
        0xff82e8  // Light Pink
    ];

    /* =========================================================
       KONFIGURASI
    ========================================================= */

    const TUBE_COUNT = 9;
    const HISTORY_SIZE = 26;

    /*
     * Berapa lama setelah cursor berhenti
     * sebelum efek mulai menghilang.
     */
    const IDLE_DELAY = 80;

    /*
     * Durasi fade out.
     */
    const FADE_DURATION = 420;

    const history = [];

    let mouse = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2
    };

    let smoothMouse = {
        x: mouse.x,
        y: mouse.y
    };

    let mouseActive = false;

    let lastMouseMove = 0;

    let effectOpacity = 0;

    /* =========================================================
       TUBE DATA
    ========================================================= */

    const tubes = [];

    for (let i = 0; i < TUBE_COUNT; i++) {

        const material =
            new THREE.MeshBasicMaterial({
                color: tubeColors[i],
                transparent: true,
                opacity: 0,
                blending: THREE.AdditiveBlending,
                depthWrite: false
            });

        const glowMaterial =
            new THREE.MeshBasicMaterial({
                color: tubeColors[i],
                transparent: true,
                opacity: 0,
                blending: THREE.AdditiveBlending,
                depthWrite: false
            });

        const tube =
            new THREE.Mesh(
                new THREE.BufferGeometry(),
                material
            );

        const glow =
            new THREE.Mesh(
                new THREE.BufferGeometry(),
                glowMaterial
            );

        scene.add(glow);
        scene.add(tube);

        tubes.push({

            tube,
            glow,

            material,
            glowMaterial,

            /*
             * Posisi masing-masing tube
             * dibuat sedikit berbeda.
             */
            offsetX: (i - 4) * 4.5,

            offsetY:
                Math.sin(i * 1.7) * 6,

            /*
             * Ukuran tube.
             */
            radius:
                0.65 +
                (i % 3) * 0.12,

            /*
             * Ukuran glow.
             */
            glowRadius:
                2.1 +
                (i % 3) * 0.5,

            /*
             * Kedalaman 3D.
             */
            depth:
                (i - 4) * 1.8,

            speed:
                0.75 +
                (i % 4) * 0.08,

            phase:
                i * 0.8
        });
    }

    /* =========================================================
       PARTICLES
    ========================================================= */

    const particleCount = 70;

    const particlePositions =
        new Float32Array(
            particleCount * 3
        );

    const particleColors =
        new Float32Array(
            particleCount * 3
        );

    const particleData = [];

    for (let i = 0; i < particleCount; i++) {

        particlePositions[i * 3] =
            -9999;

        particlePositions[i * 3 + 1] =
            -9999;

        particlePositions[i * 3 + 2] =
            0;

        const color =
            new THREE.Color(
                tubeColors[
                    Math.floor(
                        Math.random() *
                        tubeColors.length
                    )
                ]
            );

        particleColors[i * 3] =
            color.r;

        particleColors[i * 3 + 1] =
            color.g;

        particleColors[i * 3 + 2] =
            color.b;

        particleData.push({

            life: 0,

            maxLife:
                0.4 +
                Math.random() * 0.7,

            vx: 0,
            vy: 0,

            size:
                1 +
                Math.random() * 2
        });
    }

    const particleGeometry =
        new THREE.BufferGeometry();

    particleGeometry.setAttribute(
        'position',
        new THREE.BufferAttribute(
            particlePositions,
            3
        )
    );

    particleGeometry.setAttribute(
        'color',
        new THREE.BufferAttribute(
            particleColors,
            3
        )
    );

    const particleMaterial =
        new THREE.PointsMaterial({

            size: 2.8,

            vertexColors: true,

            transparent: true,

            opacity: 0,

            blending:
                THREE.AdditiveBlending,

            depthWrite: false,

            sizeAttenuation: false
        });

    const particles =
        new THREE.Points(
            particleGeometry,
            particleMaterial
        );

    scene.add(particles);

    let particleIndex = 0;

    /* =========================================================
       POINTER MOVE
    ========================================================= */

    window.addEventListener(
        'pointermove',
        (event) => {

            /*
             * Hanya mouse.
             */
            if (
                event.pointerType &&
                event.pointerType !== 'mouse'
            ) {
                return;
            }

            mouse.x =
                event.clientX;

            mouse.y =
                event.clientY;

            mouseActive = true;

            /*
             * Catat kapan cursor terakhir bergerak.
             */
            lastMouseMove =
                performance.now();

            /*
             * Efek langsung muncul lagi.
             */
            effectOpacity = 1;

            /*
             * Simpan posisi cursor.
             */
            history.unshift({

                x: mouse.x,

                y: mouse.y,

                time: performance.now()
            });

            if (
                history.length >
                HISTORY_SIZE
            ) {
                history.pop();
            }

            /*
             * Particle.
             */
            for (let i = 0; i < 2; i++) {

                spawnParticle(
                    mouse.x,
                    mouse.y
                );
            }
        },
        {
            passive: true
        }
    );

    /* =========================================================
       SPAWN PARTICLE
    ========================================================= */

    function spawnParticle(x, y) {

        const index =
            particleIndex;

        particleIndex =
            (particleIndex + 1) %
            particleCount;

        const p =
            particleData[index];

        particlePositions[
            index * 3
        ] =
            x -
            window.innerWidth / 2;

        particlePositions[
            index * 3 + 1
        ] =
            -(
                y -
                window.innerHeight / 2
            );

        particlePositions[
            index * 3 + 2
        ] =
            10 +
            Math.random() * 15;

        p.life =
            p.maxLife;

        p.vx =
            (Math.random() - 0.5) *
            35;

        p.vy =
            (Math.random() - 0.5) *
            35;
    }

    /* =========================================================
       SCREEN → WORLD
    ========================================================= */

    function screenPoint(
        x,
        y,
        z = 0
    ) {

        return new THREE.Vector3(

            x -
            window.innerWidth / 2,

            -(
                y -
                window.innerHeight / 2
            ),

            z
        );
    }

    /* =========================================================
       BUILD TUBE
    ========================================================= */

    function buildTube(
        points,
        radius
    ) {

        if (
            points.length <
            3
        ) {
            return null;
        }

        const curve =
            new THREE.CatmullRomCurve3(
                points,
                false,
                'catmullrom',
                0.45
            );

        return new THREE.TubeGeometry(

            curve,

            Math.max(
                12,
                points.length * 2
            ),

            radius,

            6,

            false
        );
    }

    /* =========================================================
       UPDATE EFFECT OPACITY
    ========================================================= */

    function updateEffectOpacity(time) {

        if (!mouseActive) {

            effectOpacity = 0;

            return;
        }

        const idleTime =
            time -
            lastMouseMove;

        /*
         * Cursor masih bergerak.
         */
        if (
            idleTime <=
            IDLE_DELAY
        ) {

            effectOpacity = 1;

            return;
        }

        /*
         * Cursor berhenti.
         */
        const fadeProgress =
            Math.min(
                1,
                (
                    idleTime -
                    IDLE_DELAY
                ) /
                FADE_DURATION
            );

        /*
         * Smooth fade.
         */
        const smoothFade =
            1 -
            (
                fadeProgress *
                fadeProgress *
                (
                    3 -
                    2 *
                    fadeProgress
                )
            );

        effectOpacity =
            Math.max(
                0,
                smoothFade
            );

        /*
         * Sudah benar-benar hilang.
         */
        if (
            effectOpacity <= 0.001
        ) {

            effectOpacity = 0;

            mouseActive = false;
        }
    }

    /* =========================================================
       UPDATE TUBES
    ========================================================= */

    function updateTubes(time) {

        updateEffectOpacity(time);

        if (
            !mouseActive ||
            history.length < 3
        ) {

            for (
                let i = 0;
                i < tubes.length;
                i++
            ) {

                tubes[i]
                    .material
                    .opacity = 0;

                tubes[i]
                    .glowMaterial
                    .opacity = 0;
            }

            return;
        }

        /*
         * Smooth cursor.
         */
        smoothMouse.x +=
            (
                mouse.x -
                smoothMouse.x
            ) * 0.28;

        smoothMouse.y +=
            (
                mouse.y -
                smoothMouse.y
            ) * 0.28;

        for (
            let i = 0;
            i < tubes.length;
            i++
        ) {

            const data =
                tubes[i];

            const points = [];

            const wave =
                Math.sin(
                    time *
                    0.004 *
                    data.speed +
                    data.phase
                );

            const wave2 =
                Math.cos(
                    time *
                    0.003 +
                    data.phase
                );

            /*
             * Setiap tube punya jalur
             * masing-masing.
             */

            for (
                let j = 0;
                j < history.length;
                j++
            ) {

                const h =
                    history[j];

                const progress =
                    j /
                    history.length;

                /*
                 * Semakin ke belakang
                 * semakin menyebar.
                 */
                const spread =
                    data.offsetX *
                    (
                        1 -
                        progress
                    );

                const waveAmount =
                    wave *
                    5 *
                    (
                        1 -
                        progress
                    );

                const x =
                    h.x +
                    spread +
                    waveAmount;

                const y =
                    h.y +

                    data.offsetY *
                    (
                        1 -
                        progress
                    ) +

                    wave2 *
                    3 *
                    (
                        1 -
                        progress
                    );

                /*
                 * Z depth.
                 */
                const z =
                    data.depth +

                    Math.sin(
                        progress * 8 +
                        data.phase
                    ) * 8;

                points.push(
                    screenPoint(
                        x,
                        y,
                        z
                    )
                );
            }

            const coreGeometry =
                buildTube(
                    points,
                    data.radius
                );

            const glowGeometry =
                buildTube(
                    points,
                    data.glowRadius
                );

            if (
                coreGeometry
            ) {

                /*
                 * Buang geometry lama.
                 */
                data.tube
                    .geometry
                    .dispose();

                data.glow
                    .geometry
                    .dispose();

                /*
                 * Geometry baru.
                 */
                data.tube.geometry =
                    coreGeometry;

                data.glow.geometry =
                    glowGeometry;

                /*
                 * Rotasi kecil agar
                 * terasa lebih 3D.
                 */
                data.tube.rotation.z =
                    Math.sin(
                        time *
                        0.001 +
                        data.phase
                    ) * 0.015;

                data.glow.rotation.z =
                    data.tube.rotation.z;

                /*
                 * Core tube.
                 */
                data.material.opacity =
                    (
                        0.75 +
                        Math.sin(
                            time *
                            0.003 +
                            data.phase
                        ) * 0.15
                    ) *
                    effectOpacity;

                /*
                 * Glow.
                 */
                data.glowMaterial.opacity =
                    (
                        0.14 +
                        Math.sin(
                            time *
                            0.002 +
                            data.phase
                        ) * 0.05
                    ) *
                    effectOpacity;
            }
        }
    }

    /* =========================================================
       UPDATE PARTICLES
    ========================================================= */

    function updateParticles(delta) {

        /*
         * Particle opacity mengikuti
         * opacity efek utama.
         */
        particleMaterial.opacity =
            0.95 *
            effectOpacity;

        for (
            let i = 0;
            i < particleCount;
            i++
        ) {

            const p =
                particleData[i];

            if (
                p.life <= 0
            ) {
                continue;
            }

            p.life -= delta;

            particlePositions[
                i * 3
            ] +=
                p.vx *
                delta;

            particlePositions[
                i * 3 + 1
            ] +=
                p.vy *
                delta;

            p.vx *= 0.96;
            p.vy *= 0.96;

            if (
                p.life <= 0
            ) {

                particlePositions[
                    i * 3
                ] = -9999;

                particlePositions[
                    i * 3 + 1
                ] = -9999;
            }
        }

        particleGeometry
            .attributes
            .position
            .needsUpdate = true;
    }

    /* =========================================================
       RESIZE
    ========================================================= */

    window.addEventListener(
        'resize',
        () => {

            camera.left =
                window.innerWidth / -2;

            camera.right =
                window.innerWidth / 2;

            camera.top =
                window.innerHeight / 2;

            camera.bottom =
                window.innerHeight / -2;

            camera.updateProjectionMatrix();

            renderer.setSize(
                window.innerWidth,
                window.innerHeight
            );

            renderer.setPixelRatio(
                Math.min(
                    window.devicePixelRatio || 1,
                    2
                )
            );
        }
    );

    /* =========================================================
       ANIMATION
    ========================================================= */

    let previousTime =
        performance.now();

    function animate(time) {

        requestAnimationFrame(
            animate
        );

        const delta =
            Math.min(
                (
                    time -
                    previousTime
                ) / 1000,
                0.033
            );

        previousTime =
            time;

        updateTubes(time);

        updateParticles(delta);

        renderer.render(
            scene,
            camera
        );
    }

    animate(
        performance.now()
    );

})();
</script>

    {{-- =========================================================
     VELLORA 3D MULTI NEON TUBE CURSOR
     - Banyak tube 3D
     - Setiap tube warna berbeda
     - Glow + particles
     - Hilang saat cursor diam
========================================================= --}}

<style>
    #vellora-3d-cursor {
        position: fixed;
        inset: 0;
        width: 100vw;
        height: 100vh;
        z-index: 999999;
        pointer-events: none;
        display: block;
    }

    @media (pointer: coarse) {
        #vellora-3d-cursor {
            display: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #vellora-3d-cursor {
            display: none;
        }
    }
</style>

<canvas id="vellora-3d-cursor"></canvas>

<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js"></script>

<script>
(() => {
    'use strict';

    const canvas =
        document.getElementById('vellora-3d-cursor');

    if (!canvas) return;

    if (typeof THREE === 'undefined') {
        console.warn(
            'Vellora 3D Cursor: Three.js gagal dimuat.'
        );
        return;
    }

    /* =========================================================
       SCENE
    ========================================================= */

    const scene = new THREE.Scene();

    const camera =
        new THREE.OrthographicCamera(
            window.innerWidth / -2,
            window.innerWidth / 2,
            window.innerHeight / 2,
            window.innerHeight / -2,
            -1000,
            1000
        );

    camera.position.z = 500;

    const renderer =
        new THREE.WebGLRenderer({
            canvas: canvas,
            alpha: true,
            antialias: true,
            powerPreference: 'high-performance'
        });

    renderer.setPixelRatio(
        Math.min(window.devicePixelRatio || 1, 2)
    );

    renderer.setSize(
        window.innerWidth,
        window.innerHeight
    );

    renderer.setClearColor(0x000000, 0);

    /* =========================================================
       WARNA
       SETIAP TUBE BERBEDA
    ========================================================= */

    const tubeColors = [
        0xffffff, // White
        0xff3df2, // Pink
        0x9b5cff, // Purple
        0x4da6ff, // Blue
        0xffee32, // Yellow
        0xffb52e, // Orange
        0xff6b35, // Orange Red
        0x63f3ff, // Cyan
        0xff82e8  // Light Pink
    ];

    /* =========================================================
       KONFIGURASI
    ========================================================= */

    const TUBE_COUNT = 9;
    const HISTORY_SIZE = 26;

    /*
     * Berapa lama setelah cursor berhenti
     * sebelum efek mulai menghilang.
     */
    const IDLE_DELAY = 80;

    /*
     * Durasi fade out.
     */
    const FADE_DURATION = 420;

    const history = [];

    let mouse = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2
    };

    let smoothMouse = {
        x: mouse.x,
        y: mouse.y
    };

    let mouseActive = false;

    let lastMouseMove = 0;

    let effectOpacity = 0;

    /* =========================================================
       TUBE DATA
    ========================================================= */

    const tubes = [];

    for (let i = 0; i < TUBE_COUNT; i++) {

        const material =
            new THREE.MeshBasicMaterial({
                color: tubeColors[i],
                transparent: true,
                opacity: 0,
                blending: THREE.AdditiveBlending,
                depthWrite: false
            });

        const glowMaterial =
            new THREE.MeshBasicMaterial({
                color: tubeColors[i],
                transparent: true,
                opacity: 0,
                blending: THREE.AdditiveBlending,
                depthWrite: false
            });

        const tube =
            new THREE.Mesh(
                new THREE.BufferGeometry(),
                material
            );

        const glow =
            new THREE.Mesh(
                new THREE.BufferGeometry(),
                glowMaterial
            );

        scene.add(glow);
        scene.add(tube);

        tubes.push({

            tube,
            glow,

            material,
            glowMaterial,

            /*
             * Posisi masing-masing tube
             * dibuat sedikit berbeda.
             */
            offsetX: (i - 4) * 4.5,

            offsetY:
                Math.sin(i * 1.7) * 6,

            /*
             * Ukuran tube.
             */
            radius:
                0.65 +
                (i % 3) * 0.12,

            /*
             * Ukuran glow.
             */
            glowRadius:
                2.1 +
                (i % 3) * 0.5,

            /*
             * Kedalaman 3D.
             */
            depth:
                (i - 4) * 1.8,

            speed:
                0.75 +
                (i % 4) * 0.08,

            phase:
                i * 0.8
        });
    }

    /* =========================================================
       PARTICLES
    ========================================================= */

    const particleCount = 70;

    const particlePositions =
        new Float32Array(
            particleCount * 3
        );

    const particleColors =
        new Float32Array(
            particleCount * 3
        );

    const particleData = [];

    for (let i = 0; i < particleCount; i++) {

        particlePositions[i * 3] =
            -9999;

        particlePositions[i * 3 + 1] =
            -9999;

        particlePositions[i * 3 + 2] =
            0;

        const color =
            new THREE.Color(
                tubeColors[
                    Math.floor(
                        Math.random() *
                        tubeColors.length
                    )
                ]
            );

        particleColors[i * 3] =
            color.r;

        particleColors[i * 3 + 1] =
            color.g;

        particleColors[i * 3 + 2] =
            color.b;

        particleData.push({

            life: 0,

            maxLife:
                0.4 +
                Math.random() * 0.7,

            vx: 0,
            vy: 0,

            size:
                1 +
                Math.random() * 2
        });
    }

    const particleGeometry =
        new THREE.BufferGeometry();

    particleGeometry.setAttribute(
        'position',
        new THREE.BufferAttribute(
            particlePositions,
            3
        )
    );

    particleGeometry.setAttribute(
        'color',
        new THREE.BufferAttribute(
            particleColors,
            3
        )
    );

    const particleMaterial =
        new THREE.PointsMaterial({

            size: 2.8,

            vertexColors: true,

            transparent: true,

            opacity: 0,

            blending:
                THREE.AdditiveBlending,

            depthWrite: false,

            sizeAttenuation: false
        });

    const particles =
        new THREE.Points(
            particleGeometry,
            particleMaterial
        );

    scene.add(particles);

    let particleIndex = 0;

    /* =========================================================
       POINTER MOVE
    ========================================================= */

    window.addEventListener(
        'pointermove',
        (event) => {

            /*
             * Hanya mouse.
             */
            if (
                event.pointerType &&
                event.pointerType !== 'mouse'
            ) {
                return;
            }

            mouse.x =
                event.clientX;

            mouse.y =
                event.clientY;

            mouseActive = true;

            /*
             * Catat kapan cursor terakhir bergerak.
             */
            lastMouseMove =
                performance.now();

            /*
             * Efek langsung muncul lagi.
             */
            effectOpacity = 1;

            /*
             * Simpan posisi cursor.
             */
            history.unshift({

                x: mouse.x,

                y: mouse.y,

                time: performance.now()
            });

            if (
                history.length >
                HISTORY_SIZE
            ) {
                history.pop();
            }

            /*
             * Particle.
             */
            for (let i = 0; i < 2; i++) {

                spawnParticle(
                    mouse.x,
                    mouse.y
                );
            }
        },
        {
            passive: true
        }
    );

    /* =========================================================
       SPAWN PARTICLE
    ========================================================= */

    function spawnParticle(x, y) {

        const index =
            particleIndex;

        particleIndex =
            (particleIndex + 1) %
            particleCount;

        const p =
            particleData[index];

        particlePositions[
            index * 3
        ] =
            x -
            window.innerWidth / 2;

        particlePositions[
            index * 3 + 1
        ] =
            -(
                y -
                window.innerHeight / 2
            );

        particlePositions[
            index * 3 + 2
        ] =
            10 +
            Math.random() * 15;

        p.life =
            p.maxLife;

        p.vx =
            (Math.random() - 0.5) *
            35;

        p.vy =
            (Math.random() - 0.5) *
            35;
    }

    /* =========================================================
       SCREEN → WORLD
    ========================================================= */

    function screenPoint(
        x,
        y,
        z = 0
    ) {

        return new THREE.Vector3(

            x -
            window.innerWidth / 2,

            -(
                y -
                window.innerHeight / 2
            ),

            z
        );
    }

    /* =========================================================
       BUILD TUBE
    ========================================================= */

    function buildTube(
        points,
        radius
    ) {

        if (
            points.length <
            3
        ) {
            return null;
        }

        const curve =
            new THREE.CatmullRomCurve3(
                points,
                false,
                'catmullrom',
                0.45
            );

        return new THREE.TubeGeometry(

            curve,

            Math.max(
                12,
                points.length * 2
            ),

            radius,

            6,

            false
        );
    }

    /* =========================================================
       UPDATE EFFECT OPACITY
    ========================================================= */

    function updateEffectOpacity(time) {

        if (!mouseActive) {

            effectOpacity = 0;

            return;
        }

        const idleTime =
            time -
            lastMouseMove;

        /*
         * Cursor masih bergerak.
         */
        if (
            idleTime <=
            IDLE_DELAY
        ) {

            effectOpacity = 1;

            return;
        }

        /*
         * Cursor berhenti.
         */
        const fadeProgress =
            Math.min(
                1,
                (
                    idleTime -
                    IDLE_DELAY
                ) /
                FADE_DURATION
            );

        /*
         * Smooth fade.
         */
        const smoothFade =
            1 -
            (
                fadeProgress *
                fadeProgress *
                (
                    3 -
                    2 *
                    fadeProgress
                )
            );

        effectOpacity =
            Math.max(
                0,
                smoothFade
            );

        /*
         * Sudah benar-benar hilang.
         */
        if (
            effectOpacity <= 0.001
        ) {

            effectOpacity = 0;

            mouseActive = false;
        }
    }

    /* =========================================================
       UPDATE TUBES
    ========================================================= */

    function updateTubes(time) {

        updateEffectOpacity(time);

        if (
            !mouseActive ||
            history.length < 3
        ) {

            for (
                let i = 0;
                i < tubes.length;
                i++
            ) {

                tubes[i]
                    .material
                    .opacity = 0;

                tubes[i]
                    .glowMaterial
                    .opacity = 0;
            }

            return;
        }

        /*
         * Smooth cursor.
         */
        smoothMouse.x +=
            (
                mouse.x -
                smoothMouse.x
            ) * 0.28;

        smoothMouse.y +=
            (
                mouse.y -
                smoothMouse.y
            ) * 0.28;

        for (
            let i = 0;
            i < tubes.length;
            i++
        ) {

            const data =
                tubes[i];

            const points = [];

            const wave =
                Math.sin(
                    time *
                    0.004 *
                    data.speed +
                    data.phase
                );

            const wave2 =
                Math.cos(
                    time *
                    0.003 +
                    data.phase
                );

            /*
             * Setiap tube punya jalur
             * masing-masing.
             */

            for (
                let j = 0;
                j < history.length;
                j++
            ) {

                const h =
                    history[j];

                const progress =
                    j /
                    history.length;

                /*
                 * Semakin ke belakang
                 * semakin menyebar.
                 */
                const spread =
                    data.offsetX *
                    (
                        1 -
                        progress
                    );

                const waveAmount =
                    wave *
                    5 *
                    (
                        1 -
                        progress
                    );

                const x =
                    h.x +
                    spread +
                    waveAmount;

                const y =
                    h.y +

                    data.offsetY *
                    (
                        1 -
                        progress
                    ) +

                    wave2 *
                    3 *
                    (
                        1 -
                        progress
                    );

                /*
                 * Z depth.
                 */
                const z =
                    data.depth +

                    Math.sin(
                        progress * 8 +
                        data.phase
                    ) * 8;

                points.push(
                    screenPoint(
                        x,
                        y,
                        z
                    )
                );
            }

            const coreGeometry =
                buildTube(
                    points,
                    data.radius
                );

            const glowGeometry =
                buildTube(
                    points,
                    data.glowRadius
                );

            if (
                coreGeometry
            ) {

                /*
                 * Buang geometry lama.
                 */
                data.tube
                    .geometry
                    .dispose();

                data.glow
                    .geometry
                    .dispose();

                /*
                 * Geometry baru.
                 */
                data.tube.geometry =
                    coreGeometry;

                data.glow.geometry =
                    glowGeometry;

                /*
                 * Rotasi kecil agar
                 * terasa lebih 3D.
                 */
                data.tube.rotation.z =
                    Math.sin(
                        time *
                        0.001 +
                        data.phase
                    ) * 0.015;

                data.glow.rotation.z =
                    data.tube.rotation.z;

                /*
                 * Core tube.
                 */
                data.material.opacity =
                    (
                        0.75 +
                        Math.sin(
                            time *
                            0.003 +
                            data.phase
                        ) * 0.15
                    ) *
                    effectOpacity;

                /*
                 * Glow.
                 */
                data.glowMaterial.opacity =
                    (
                        0.14 +
                        Math.sin(
                            time *
                            0.002 +
                            data.phase
                        ) * 0.05
                    ) *
                    effectOpacity;
            }
        }
    }

    /* =========================================================
       UPDATE PARTICLES
    ========================================================= */

    function updateParticles(delta) {

        /*
         * Particle opacity mengikuti
         * opacity efek utama.
         */
        particleMaterial.opacity =
            0.95 *
            effectOpacity;

        for (
            let i = 0;
            i < particleCount;
            i++
        ) {

            const p =
                particleData[i];

            if (
                p.life <= 0
            ) {
                continue;
            }

            p.life -= delta;

            particlePositions[
                i * 3
            ] +=
                p.vx *
                delta;

            particlePositions[
                i * 3 + 1
            ] +=
                p.vy *
                delta;

            p.vx *= 0.96;
            p.vy *= 0.96;

            if (
                p.life <= 0
            ) {

                particlePositions[
                    i * 3
                ] = -9999;

                particlePositions[
                    i * 3 + 1
                ] = -9999;
            }
        }

        particleGeometry
            .attributes
            .position
            .needsUpdate = true;
    }

    /* =========================================================
       RESIZE
    ========================================================= */

    window.addEventListener(
        'resize',
        () => {

            camera.left =
                window.innerWidth / -2;

            camera.right =
                window.innerWidth / 2;

            camera.top =
                window.innerHeight / 2;

            camera.bottom =
                window.innerHeight / -2;

            camera.updateProjectionMatrix();

            renderer.setSize(
                window.innerWidth,
                window.innerHeight
            );

            renderer.setPixelRatio(
                Math.min(
                    window.devicePixelRatio || 1,
                    2
                )
            );
        }
    );

    /* =========================================================
       ANIMATION
    ========================================================= */

    let previousTime =
        performance.now();

    function animate(time) {

        requestAnimationFrame(
            animate
        );

        const delta =
            Math.min(
                (
                    time -
                    previousTime
                ) / 1000,
                0.033
            );

        previousTime =
            time;

        updateTubes(time);

        updateParticles(delta);

        renderer.render(
            scene,
            camera
        );
    }

    animate(
        performance.now()
    );

})();
</script>