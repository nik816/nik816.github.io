@extends('layouts.admin')

@section('title', 'Dashboard - Admin VELLORA')
@section('page-title', 'Dashboard')

@section('content')

    <div class="max-w-7xl mx-auto space-y-6">

        <!-- Banner Ringkasan -->
        <div class="bg-vellora-surface border border-white/[0.10] rounded-2xl p-6">
            <h2 class="text-2xl font-bold text-white mb-2">
                Selamat Datang Kembali, <span class="text-vellora-gold">{{ Auth::user()->name }}</span>! 👋
            </h2>
            <p class="text-vellora-muted text-sm">Kelola produk, artikel, dan performa toko VELLORA milikmu di sini.</p>
        </div>

        <!-- Stats Card -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-vellora-surface border border-white/[0.10] p-6 rounded-2xl">
                <p class="text-xs uppercase tracking-wider text-vellora-muted font-semibold">Total Produk</p>
                <p class="text-3xl font-extrabold text-white mt-2">{{ $totalProducts }}</p>
            </div>

            <div class="bg-vellora-surface border border-white/[0.10] p-6 rounded-2xl">
                <p class="text-xs uppercase tracking-wider text-vellora-muted font-semibold">Total Stok</p>
                <p class="text-3xl font-extrabold text-white mt-2">{{ $totalStock }}</p>
            </div>

            <div class="bg-vellora-surface border border-white/[0.10] p-6 rounded-2xl">
                <p class="text-xs uppercase tracking-wider text-vellora-muted font-semibold">Stok Menipis (&le; 5)</p>
                <p class="text-3xl font-extrabold {{ $lowStockCount > 0 ? 'text-rose-400' : 'text-white' }} mt-2">{{ $lowStockCount ?? 0 }}</p>
            </div>
        </div>

        @if(isset($lowStockItems) && $lowStockItems->isNotEmpty())
            <div class="bg-vellora-gold/[0.08] border border-vellora-gold/25 rounded-2xl p-5">
                <p class="text-sm font-bold text-vellora-gold-light mb-2">⚠ Produk dengan stok menipis:</p>
                <ul class="text-sm text-vellora-muted list-disc list-inside space-y-0.5">
                    @foreach($lowStockItems->take(5) as $item)
                        <li>{{ $item->name }} — sisa {{ $item->stock }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Produk Terbaru -->
        <div class="bg-vellora-surface border border-white/[0.10] rounded-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-white/[0.10] flex items-center justify-between">
                <h3 class="font-bold text-white">Produk Terbaru</h3>
                <a href="{{ route('products.create') }}" class="text-xs font-bold text-vellora-gold hover:text-vellora-gold-light transition-colors">+ Tambah Produk</a>
            </div>

            @if($latestProducts->isNotEmpty())
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-white/[0.03] text-vellora-muted uppercase text-xs tracking-wide">
                            <tr>
                                <th class="px-6 py-3 font-semibold">Produk</th>
                                <th class="px-6 py-3 font-semibold">Harga</th>
                                <th class="px-6 py-3 font-semibold">Stok</th>
                                <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/[0.06]">
                            @foreach($latestProducts as $product)
                                <tr class="hover:bg-white/[0.03] transition-colors">
                                    <td class="px-6 py-3 font-semibold text-white">{{ $product->name }}</td>
                                    <td class="px-6 py-3 text-vellora-muted">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td class="px-6 py-3 text-vellora-muted">{{ $product->stock }}</td>
                                    <td class="px-6 py-3 text-right">
                                        <a href="{{ route('products.edit', $product->id) }}" class="text-vellora-gold hover:text-vellora-gold-light font-semibold text-xs">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="px-6 py-8 text-sm text-vellora-muted text-center">Belum ada produk.</p>
            @endif
        </div>

    </div>

@endsection
