@extends('layouts.public')

@section('title', 'Katalog Produk - VELLORA')

@section('content')

    <main class="container mx-auto px-4 py-14 md:py-16">
        <div class="text-center max-w-xl mx-auto mb-10">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-3 text-white tracking-tight">Katalog Produk</h2>
            <p class="text-vellora-muted text-sm">Temukan produk dan layanan digital sesuai kebutuhan Anda.</p>
        </div>

        <!-- Search -->
        <form method="GET" action="{{ route('products.katalog') }}" class="max-w-3xl mx-auto mb-12 flex flex-col sm:flex-row gap-2">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari produk atau kategori..." class="flex-1 border border-white/10 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-vellora-gold focus:ring-1 focus:ring-vellora-gold transition">
            <select name="category" onchange="this.form.submit()" aria-label="Filter kategori" class="border border-white/10 rounded-xl px-3 py-2.5 text-sm bg-vellora-bg2 text-white focus:outline-none focus:border-vellora-gold">
                <option value="">Semua kategori</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat }}" @selected(($category ?? '') === $cat)>{{ $cat }}</option>
                @endforeach
            </select>
            <select name="sort" onchange="this.form.submit()" aria-label="Urutkan produk" class="border border-white/10 rounded-xl px-3 py-2.5 text-sm bg-vellora-bg2 text-white focus:outline-none focus:border-vellora-gold">
                <option value="terbaru" @selected(($sort ?? 'terbaru') === 'terbaru')>Terbaru</option>
                <option value="termurah" @selected(($sort ?? '') === 'termurah')>Harga terendah</option>
                <option value="termahal" @selected(($sort ?? '') === 'termahal')>Harga tertinggi</option>
                <option value="nama" @selected(($sort ?? '') === 'nama')>Nama A–Z</option>
            </select>
            <button type="submit" class="bg-vellora-gold hover:bg-vellora-gold-light text-black px-6 py-2.5 rounded-xl text-sm font-bold transition-colors">Cari</button>
            @if(!empty($search) || !empty($category) || (($sort ?? 'terbaru') !== 'terbaru'))
                <a href="{{ route('products.katalog') }}" class="bg-vellora-surface hover:bg-white/10 text-slate-200 px-4 py-2.5 rounded-xl text-sm font-semibold flex items-center justify-center transition-colors">Reset</a>
            @endif
        </form>

        <div class="vr-adapt">
            @forelse($products as $product)
            <div class="group bg-vellora-bg2 rounded-2xl shadow-sm border border-white/10 overflow-hidden flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                <div class="w-full aspect-[4/3] bg-vellora-surface relative overflow-hidden flex items-center justify-center border-b border-white/10">
                    @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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
                    @if((int) $product->stock <= 0)
                        <p class="text-xs font-semibold text-red-400">Stok habis</p>
                    @elseif((int) $product->stock <= 5)
                        <p class="text-xs font-semibold text-amber-300">Tersisa {{ $product->stock }}</p>
                    @else
                        <p class="text-xs text-zinc-400">Stok: {{ $product->stock }}</p>
                    @endif
                </div>

                <div class="p-5 pt-0">
                    <a href="{{ route('products.show', $product->id) }}" class="block w-full text-center bg-vellora-surface hover:bg-white/10 text-slate-200 text-sm font-bold py-2.5 rounded-xl transition-colors">Lihat Detail</a>
                </div>
            </div>
            @empty
                @include('partials.empty-state', (!empty($search) || !empty($category)) ? ['title'=>'Belum menemukan produk yang sesuai','text'=>'Coba ubah kata pencarian atau hapus filter.','href'=>route('products.katalog'),'label'=>'Hapus Filter'] : ['title'=>'Belum ada produk','text'=>'Produk akan tampil di sini setelah ditambahkan.'])
            @endforelse
        </div>

        <div class="mt-10">
            {{ $products->links() }}
        </div>
    </main>

@endsection
