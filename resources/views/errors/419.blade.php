@extends('layouts.public')
@section('title', 'Sesi telah berakhir - VELLORA')
@section('content')
<main class="mx-auto flex min-h-[70vh] max-w-xl flex-col items-center justify-center px-6 py-24 text-center">
    <p class="text-xs font-bold uppercase tracking-[0.28em] text-[#D4AF37]">Error 419</p>
    <h1 class="mt-4 text-3xl font-black tracking-tight text-white md:text-4xl">Sesi telah berakhir</h1>
    <p class="mt-4 text-sm leading-7 text-zinc-400">Silakan muat ulang halaman lalu coba kembali.</p>
    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
        <a href="{{ url('/') }}" class="rounded-xl bg-[#D4AF37] px-6 py-3 text-sm font-bold text-black transition hover:bg-[#FFDF00]">Ke Beranda</a>
        <button type="button" onclick="history.length > 1 ? history.back() : (location.href='{{ url('/') }}')" class="rounded-xl border border-white/15 px-6 py-3 text-sm font-bold text-white transition hover:border-[#D4AF37]/60">Kembali</button>
    </div>
</main>
@endsection
