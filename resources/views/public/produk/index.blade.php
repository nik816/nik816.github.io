@extends('layouts.public')

@section('title', 'Katalog Produk - VELLORA')

@section('content')

    <main class="container mx-auto px-4 py-14 md:py-16">
        <div class="text-center max-w-xl mx-auto mb-10">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-3 text-white tracking-tight">Katalog Produk</h2>
            <p class="text-vellora-muted text-sm">Temukan produk dan layanan digital sesuai kebutuhan Anda.</p>
        </div>

        <!-- Search -->
        <form method="GET" action="{{ route('products.katalog') }}" class="max-w-xl mx-auto mb-12 flex gap-2">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari produk atau kategori..." class="flex-1 border border-white/10 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-vellora-gold focus:ring-1 focus:ring-vellora-gold transition">
            <button type="submit" class="bg-vellora-gold hover:bg-vellora-gold-light text-black px-6 py-2.5 rounded-xl text-sm font-bold transition-colors">Cari</button>
            @if(!empty($search))
                <a href="{{ route('products.katalog') }}" class="bg-vellora-surface hover:bg-white/10 text-slate-200 px-4 py-2.5 rounded-xl text-sm font-semibold flex items-center transition-colors">Reset</a>
            @endif
        </form>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($products as $product)
            <div class="group bg-vellora-bg2 rounded-2xl shadow-sm border border-white/10 overflow-hidden flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                <div class="w-full aspect-[4/3] bg-vellora-surface relative overflow-hidden flex items-center justify-center border-b border-white/10">
                    @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    @else
                        <div class="flex flex-col items-center justify-center text-zinc-400">
                            <span class="text-3xl mb-1">📦</span>
                            <span class="text-[10px] font-bold uppercase tracking-wider">No Image</span>
                        </div>
                    @endif
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-bold bg-vellora-bg2/90 backdrop-blur-sm text-vellora-gold shadow-sm">{{ $product->category }}</span>
                </div>

                <div class="p-5">
                    <h3 class="font-bold text-base text-white mb-1.5 line-clamp-1">{{ $product->name }}</h3>
                    <p class="text-vellora-gold font-black text-lg mb-1">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <p class="text-xs text-zinc-400">Stok: {{ $product->stock }}</p>
                </div>

                <div class="p-5 pt-0">
                    <a href="{{ route('products.show', $product->id) }}" class="block w-full text-center bg-vellora-surface hover:bg-white/10 text-slate-200 text-sm font-bold py-2.5 rounded-xl transition-colors">Lihat Detail</a>
                </div>
            </div>
            @empty
            <div class="col-span-full py-16 text-center text-zinc-400">
                <div class="text-4xl mb-3">📦</div>
                <p class="text-base font-medium">Produk tidak ditemukan.</p>
            </div>
            @endforelse
        </div>

        <div class="mt-10">
            {{ $products->links() }}
        </div>
    </main>

@endsection
