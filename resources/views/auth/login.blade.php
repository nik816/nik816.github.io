<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - VELLORA</title>
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
        .glow-1 { background: radial-gradient(circle, rgba(251,191,36,0.18) 0%, transparent 70%); }
    </style>
</head>
<body class="bg-vellora-bg font-sans antialiased min-h-screen flex items-center justify-center px-4 relative overflow-hidden">

    <!-- Ambient gold glow -->
    <div class="pointer-events-none absolute inset-0" aria-hidden="true">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] glow-1 rounded-full blur-3xl"></div>
    </div>

    <div class="w-full max-w-sm relative z-10">
        <div class="text-center mb-8">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-vellora-gold to-vellora-gold-light flex items-center justify-center text-black mx-auto mb-4">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 12l8-4.5M12 12v9M12 12L4 7.5"/></svg>
            </div>
            <h1 class="text-white text-xl font-extrabold tracking-tight">VELLORA</h1>
            <p class="text-vellora-muted text-sm mt-1">Login khusus admin</p>
        </div>

        <div class="bg-vellora-surface border border-white/[0.10] rounded-2xl shadow-xl p-8">
            @if ($errors->any())
                <div class="mb-5 p-3.5 bg-rose-500/10 border border-rose-500/30 text-rose-400 rounded-xl text-sm font-medium">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login.attempt') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white placeholder:text-vellora-muted focus:border-vellora-gold focus:outline-none transition">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Password</label>
                    <input type="password" name="password" required class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white placeholder:text-vellora-muted focus:border-vellora-gold focus:outline-none transition">
                </div>

                <label class="flex items-center gap-2 text-xs text-vellora-muted">
                    <input type="checkbox" name="remember" class="rounded border-white/20 bg-vellora-elevated text-vellora-gold focus:ring-vellora-gold">
                    Ingat saya
                </label>

                <button type="submit" class="w-full bg-vellora-gold hover:bg-vellora-gold-light text-black font-bold py-3 rounded-xl transition-colors">
                    Login
                </button>
            </form>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-xs text-vellora-muted hover:text-white transition-colors">&larr; Kembali ke Website</a>
        </div>
    </div>

</body>
</html>
