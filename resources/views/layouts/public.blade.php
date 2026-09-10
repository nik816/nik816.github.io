<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VELLORA — Discover Something Better')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
                    colors: {
                        vellora: {
                            bg: '#080808',
                            bg2: '#0d0d0d',
                            surface: '#111111',
                            elevated: '#161616',
                            muted: '#a1a1aa',
                            gold: '#fbbf24',
                            'gold-light': '#fcd34d',
                            'gold-muted': '#d4a72c',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }
        .fade-in { animation: fadeIn .5s ease-out both; }
        @media (prefers-reduced-motion: reduce) { .fade-in { animation: none; } }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }

        /* Flowing golden light — hero effect, CSS murni */
        .hero-glow-1 { background: radial-gradient(circle, rgba(251,191,36,0.35) 0%, transparent 70%); animation: heroFloat1 18s ease-in-out infinite; }
        .hero-glow-2 { background: radial-gradient(circle, rgba(252,211,77,0.30) 0%, transparent 70%); animation: heroFloat2 22s ease-in-out infinite; }
        .hero-glow-3 { background: radial-gradient(circle, rgba(251,191,36,0.25) 0%, transparent 70%); animation: heroFloat3 26s ease-in-out infinite; }
        /* Secondary ambient accent — subtle violet, never primary */
        .hero-glow-violet { background: radial-gradient(circle, rgba(139,92,246,0.10) 0%, transparent 70%); animation: heroFloat2 30s ease-in-out infinite reverse; }
        @keyframes heroFloat1 { 0%,100% { transform: translate(-50%,-50%) scale(1); } 50% { transform: translate(-45%,-55%) scale(1.12); } }
        @keyframes heroFloat2 { 0%,100% { transform: translate(0,0) scale(1); } 50% { transform: translate(6%,-6%) scale(1.18); } }
        @keyframes heroFloat3 { 0%,100% { transform: translate(0,0) scale(1); } 50% { transform: translate(-6%,6%) scale(1.12); } }

        /* Golden light trail — organic SVG path, slow flowing draw + drift loop */
        .light-trail-1, .light-trail-2 {
            stroke-dasharray: 220 900;
            animation: trailFlow 14s linear infinite, trailDrift 20s ease-in-out infinite;
        }
        .light-trail-2 { animation-duration: 19s, 24s; animation-delay: -6s, -3s; }
        @keyframes trailFlow { from { stroke-dashoffset: 1100; } to { stroke-dashoffset: -1100; } }
        @keyframes trailDrift { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-14px); } }

        @media (prefers-reduced-motion: reduce) {
            .hero-glow-1, .hero-glow-2, .hero-glow-3, .hero-glow-violet,
            .light-trail-1, .light-trail-2 { animation: none; }
        }

        /* Scroll reveal */
        .reveal { opacity: 0; transform: translateY(16px); transition: opacity .5s ease-out, transform .5s ease-out; }
        .reveal.is-visible { opacity: 1; transform: translateY(0); }
        @media (prefers-reduced-motion: reduce) { .reveal { opacity: 1; transform: none; transition: none; } }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

    <!-- Navbar -->
    <nav id="main-navbar" class="bg-vellora-bg/95 backdrop-blur-md border-b border-white/[0.10] sticky top-0 z-50 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 text-white">
                    <span class="w-8 h-8 rounded-lg bg-gradient-to-br from-vellora-gold to-vellora-gold-light flex items-center justify-center text-slate-950">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 12l8-4.5M12 12v9M12 12L4 7.5"/></svg>
                    </span>
                    <span class="text-lg font-extrabold tracking-tight">VELLORA</span>
                </a>

                <div class="hidden md:flex items-center gap-1 text-sm font-semibold text-slate-300">
                    @php
                        $navLink = fn($active) => 'relative px-4 py-2 transition-colors hover:text-vellora-gold ' . ($active ? 'text-white' : '');
                    @endphp
                    <a href="{{ route('home') }}" class="{{ $navLink(request()->routeIs('home')) }}">Home</a>
                    <a href="{{ route('products.katalog') }}" class="{{ $navLink(request()->routeIs('products.*')) }}">Produk</a>
                    <a href="{{ route('home') }}#tentang" class="{{ $navLink(false) }}">Tentang</a>
                    <a href="{{ route('articles.index') }}" class="{{ $navLink(request()->routeIs('articles.*')) }}">Artikel</a>
                    <a href="{{ route('contact') }}" class="{{ $navLink(request()->routeIs('contact')) }}">Kontak</a>
                </div>
                {{-- Tombol Login/Dashboard Admin SENGAJA tidak ditampilkan di Public Website.
                     Auth & route admin tetap aktif — admin login lewat /login secara langsung. --}}

                <button id="mobile-menu-btn" type="button" class="md:hidden p-2 text-white" aria-label="Buka menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>

            <div id="mobile-menu" class="hidden md:hidden pb-5 flex flex-col gap-1 text-sm font-semibold text-slate-300">
                <a href="{{ route('home') }}" class="px-4 py-2.5 rounded-lg hover:bg-white/5 hover:text-vellora-gold transition-colors">Home</a>
                <a href="{{ route('products.katalog') }}" class="px-4 py-2.5 rounded-lg hover:bg-white/5 hover:text-vellora-gold transition-colors">Produk</a>
                <a href="{{ route('home') }}#tentang" class="px-4 py-2.5 rounded-lg hover:bg-white/5 hover:text-vellora-gold transition-colors">Tentang</a>
                <a href="{{ route('articles.index') }}" class="px-4 py-2.5 rounded-lg hover:bg-white/5 hover:text-vellora-gold transition-colors">Artikel</a>
                <a href="{{ route('contact') }}" class="px-4 py-2.5 rounded-lg hover:bg-white/5 hover:text-vellora-gold transition-colors">Kontak</a>
            </div>
        </div>
    </nav>

    @if (session('success'))
        <div class="container mx-auto px-6 pt-6">
            <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl text-center font-semibold text-sm shadow-sm">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @yield('content')

    <!-- Footer -->
    <footer class="bg-vellora-bg text-white">
        <div class="container mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
                <div>
                    <div class="flex items-center gap-2.5 mb-4">
                        <span class="w-8 h-8 rounded-lg bg-gradient-to-br from-vellora-gold to-vellora-gold-light flex items-center justify-center text-slate-950">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 12l8-4.5M12 12v9M12 12L4 7.5"/></svg>
                        </span>
                        <span class="font-extrabold tracking-tight">VELLORA</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-xs">Pusat jual beli kebutuhan digital terpercaya — cepat, aman, dan terpercaya setiap hari.</p>
                </div>

                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-4">Navigasi</p>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="{{ route('home') }}" class="hover:text-vellora-gold transition-colors">Home</a></li>
                        <li><a href="{{ route('products.katalog') }}" class="hover:text-vellora-gold transition-colors">Produk</a></li>
                        <li><a href="{{ route('articles.index') }}" class="hover:text-vellora-gold transition-colors">Artikel</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-vellora-gold transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-4">Sosial</p>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="https://wa.me/" target="_blank" class="hover:text-vellora-gold transition-colors">WhatsApp</a></li>
                        <li><a href="https://instagram.com/" target="_blank" class="hover:text-vellora-gold transition-colors">Instagram</a></li>
                        <li><a href="{{ route('home') }}#tentang" class="hover:text-vellora-gold transition-colors">Tentang Kami</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-white/[0.10] text-center">
                <p class="text-xs text-slate-500">&copy; {{ date('Y') }} VELLORA. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            const expanded = this.getAttribute('aria-expanded') === 'true';
            menu.classList.toggle('hidden');
            this.setAttribute('aria-expanded', String(!expanded));
        });

        // Navbar darkens slightly on scroll
        const navbar = document.getElementById('main-navbar');
        if (navbar) {
            window.addEventListener('scroll', function () {
                if (window.scrollY > 20) {
                    navbar.classList.add('bg-vellora-bg', 'shadow-lg', 'shadow-black/20');
                    navbar.classList.remove('bg-vellora-bg/95');
                } else {
                    navbar.classList.remove('bg-vellora-bg', 'shadow-lg', 'shadow-black/20');
                    navbar.classList.add('bg-vellora-bg/95');
                }
            }, { passive: true });
        }

        // Lightweight scroll-reveal (fade-up), respects prefers-reduced-motion
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches && 'IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
        } else {
            document.querySelectorAll('.reveal').forEach((el) => el.classList.add('is-visible'));
        }
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