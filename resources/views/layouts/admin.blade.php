<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - VELLORA')</title>
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
    <style>body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }</style>
</head>
<body class="bg-vellora-bg font-sans antialiased text-white">

    <div class="flex h-screen overflow-hidden">

        <!-- Overlay mobile -->
        <div id="sidebar-overlay" class="hidden fixed inset-0 bg-black/60 z-30 md:hidden"></div>

        <!-- Sidebar -->
        <aside id="sidebar" class="fixed md:static inset-y-0 left-0 z-40 w-64 bg-vellora-bg2 text-vellora-muted flex flex-col border-r border-white/[0.10] flex-shrink-0 -translate-x-full md:translate-x-0 transition-transform duration-200">
            <div class="h-16 flex items-center justify-between px-6 border-b border-white/[0.10]">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-vellora-gold to-vellora-gold-light flex items-center justify-center text-black">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 12l8-4.5M12 12v9M12 12L4 7.5"/></svg>
                    </div>
                    <span class="font-bold text-lg text-white tracking-tight">VELLORA</span>
                </div>
                <button id="sidebar-close-btn" type="button" class="md:hidden text-vellora-muted hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-1.5 text-sm">
                @php
                    $sideLink = fn($active) => 'flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors relative ' . ($active ? 'bg-white/[0.06] text-white font-medium' : 'text-vellora-muted hover:bg-white/[0.04] hover:text-white');
                @endphp
                <a href="{{ route('admin.dashboard') }}" class="{{ $sideLink(request()->routeIs('admin.dashboard')) }}">
                    @if(request()->routeIs('admin.dashboard'))<span class="absolute left-0 top-1.5 bottom-1.5 w-0.5 bg-vellora-gold rounded-full"></span>@endif
                    <svg class="w-[18px] h-[18px] {{ request()->routeIs('admin.dashboard') ? 'text-vellora-gold' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('products.index') }}" class="{{ $sideLink(request()->routeIs('products.*')) }}">
                    @if(request()->routeIs('products.*'))<span class="absolute left-0 top-1.5 bottom-1.5 w-0.5 bg-vellora-gold rounded-full"></span>@endif
                    <svg class="w-[18px] h-[18px] {{ request()->routeIs('products.*') ? 'text-vellora-gold' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    <span>Products</span>
                </a>
                <a href="{{ route('admin.articles.index') }}" class="{{ $sideLink(request()->routeIs('admin.articles.*')) }}">
                    @if(request()->routeIs('admin.articles.*'))<span class="absolute left-0 top-1.5 bottom-1.5 w-0.5 bg-vellora-gold rounded-full"></span>@endif
                    <svg class="w-[18px] h-[18px] {{ request()->routeIs('admin.articles.*') ? 'text-vellora-gold' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l6 6v8a2 2 0 01-2 2z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13h8M8 17h5"/></svg>
                    <span>Articles</span>
                </a>

                <div class="pt-4 mt-4 border-t border-white/[0.10]">
                    <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-vellora-muted hover:bg-white/[0.04] hover:text-white transition-colors">
                        <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        <span>Back to Website</span>
                    </a>
                </div>
            </nav>

            <div class="p-4 border-t border-white/[0.10]">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-rose-400 hover:bg-white/[0.04] transition-colors text-sm">
                        <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 5v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0 overflow-y-auto">
            <header class="h-16 bg-vellora-bg2 border-b border-white/[0.10] flex items-center justify-between px-4 md:px-8 sticky top-0 z-20">
                <div class="flex items-center gap-3">
                    <button id="sidebar-open-btn" type="button" class="md:hidden text-vellora-muted hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <h1 class="text-lg font-bold text-white">@yield('page-title', 'Dashboard')</h1>
                </div>
                @hasSection('page-action')
                    @yield('page-action')
                @endif
            </header>

            @if (session('success'))
                <div class="px-4 md:px-8 pt-6">
                    <div class="p-4 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 rounded-xl text-sm font-semibold">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <main class="p-4 md:p-8 w-full">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const openBtn = document.getElementById('sidebar-open-btn');
        const closeBtn = document.getElementById('sidebar-close-btn');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }
        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        openBtn.addEventListener('click', openSidebar);
        closeBtn.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);
    </script>

</body>
</html>
