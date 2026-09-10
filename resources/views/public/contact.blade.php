@extends('layouts.public')

@section('title', 'Kontak - VELLORA')

@section('content')

    <section class="bg-vellora-bg text-white py-16 md:py-24 text-center relative overflow-hidden">
        <div class="pointer-events-none absolute inset-0 opacity-40" aria-hidden="true">
            <div class="absolute -top-20 -right-20 h-96 w-96 rounded-full bg-vellora-gold/20 blur-3xl"></div>
            <div class="absolute -bottom-28 -left-16 h-96 w-96 rounded-full bg-vellora-gold-light/10 blur-3xl"></div>
        </div>

        <div class="container relative mx-auto px-4 max-w-3xl">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-vellora-gold mb-3">Kontak</p>
            <h1 class="text-2xl md:text-4xl font-extrabold mb-4 tracking-tight">Hubungi &amp; Ikuti Kami</h1>
            <p class="text-vellora-muted text-sm md:text-base mb-12 max-w-lg mx-auto leading-relaxed">Butuh bantuan transaksi atau ingin memantau update produk terbaru? Silakan hubungi kami melalui platform di bawah ini.</p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-2xl mx-auto">
                <a href="https://wa.me/6285848658854" target="_blank" class="bg-white/[0.03] hover:bg-white/[0.05] border border-white/[0.10] hover:border-vellora-gold/30 p-6 rounded-2xl flex flex-col items-center justify-center gap-3 transition-all duration-200 group">
                    <svg class="w-6 h-6 text-vellora-gold group-hover:scale-110 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    <span class="font-bold text-xs uppercase tracking-wider">WhatsApp</span>
                    <span class="text-vellora-muted text-xs">0858-4865-8854</span>
                </a>
                <a href="https://www.instagram.com/n_advisori_?igsi=MW44Mzl2MzlvbXFreQ==" target="_blank" class="bg-white/[0.03] hover:bg-white/[0.05] border border-white/[0.10] hover:border-vellora-gold/30 p-6 rounded-2xl flex flex-col items-center justify-center gap-3 transition-all duration-200 group">
                    <svg class="w-6 h-6 text-vellora-gold group-hover:scale-110 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><path stroke-linecap="round" stroke-linejoin="round" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><path stroke-linecap="round" d="M17.5 6.5h.01"/></svg>
                    <span class="font-bold text-xs uppercase tracking-wider">Instagram</span>
                    <span class="text-vellora-muted text-xs">@n_advisori_</span>
                </a>
                <a href="https://www.tiktok.com/@ur.nko04" target="_blank" class="bg-white/[0.03] hover:bg-white/[0.05] border border-white/[0.10] hover:border-vellora-gold/30 p-6 rounded-2xl flex flex-col items-center justify-center gap-3 transition-all duration-200 group">
                    <svg class="w-6 h-6 text-vellora-gold group-hover:scale-110 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12a4 4 0 104 4V4a5 5 0 005 5"/></svg>
                    <span class="font-bold text-xs uppercase tracking-wider">TikTok</span>
                    <span class="text-vellora-muted text-xs">@ur.nko04</span>
                </a>
            </div>

            <div class="mt-10">
                <a href="https://wa.me/6285848658854" target="_blank" class="inline-flex items-center gap-2 bg-vellora-gold hover:bg-vellora-gold-light text-black font-bold px-8 py-3.5 rounded-xl transition-colors">
                    Hubungi Sekarang
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </section>

@endsection
