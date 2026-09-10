@extends('layouts.public')

@section('title', $product->name . ' - VELLORA')

@section('content')

    <main class="max-w-6xl mx-auto px-6 py-10 md:py-14">
        <div class="mb-6">
            <a href="{{ route('products.katalog') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-zinc-300 hover:text-white bg-vellora-surface hover:bg-white/10 px-3.5 py-2 rounded-xl transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Kembali ke Katalog
            </a>
        </div>

        <div class="bg-vellora-bg2 rounded-3xl shadow-sm border border-white/10 p-6 md:p-12 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 items-start">

            <div class="w-full">
                @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full aspect-square md:aspect-[4/3] object-cover rounded-2xl shadow-sm border border-white/10">
                @else
                    <div class="w-full aspect-square md:aspect-[4/3] bg-vellora-bg2 rounded-2xl border-2 border-dashed border-white/10 flex flex-col items-center justify-center text-zinc-400">
                        <span class="text-5xl mb-2">📦</span>
                        <span class="text-sm font-bold">No Image Available</span>
                    </div>
                @endif
            </div>

            <div class="flex flex-col h-full justify-between space-y-6">
                <div>
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-vellora-gold/10 text-vellora-gold mb-4 tracking-wide uppercase">
                        {{ $product->category }}
                    </span>

                    <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-3 leading-snug tracking-tight">
                        {{ $product->name }}
                    </h1>

                    <div class="text-2xl md:text-3xl font-black text-vellora-gold mb-6">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </div>

                    <div class="flex items-center gap-2 mb-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-400">Status Stok:</span>
                        @if(isset($product->stock) && $product->stock > 0)
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-50 text-emerald-600">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Tersedia ({{ $product->stock }})
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-red-50 text-red-600">
                                <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>
                                Habis
                            </span>
                        @endif
                    </div>

                    <a href="https://wa.me/?text={{ urlencode('Halo, saya ingin memesan produk: ' . $product->name) }}" target="_blank" class="w-full flex items-center justify-center gap-2 bg-vellora-gold hover:bg-vellora-gold-light text-white font-bold py-3.5 px-6 rounded-2xl shadow-lg shadow-vellora-gold/20 transition-all duration-200 hover:-translate-y-0.5 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        Beli / Pesan Sekarang via WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-6 md:mt-8 bg-vellora-bg2 rounded-3xl shadow-sm border border-white/10 p-6 md:p-10">
            <h3 class="text-sm font-extrabold uppercase tracking-wider text-zinc-400 mb-4">Deskripsi Produk</h3>
            <div class="text-sm text-zinc-300 leading-relaxed whitespace-pre-line">
                {{ $product->description ?? 'Tidak ada deskripsi tambahan untuk produk ini.' }}
            </div>
        </div>
    </main>

@endsection
