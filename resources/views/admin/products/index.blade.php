@extends('layouts.admin')

@section('title', 'Kelola Produk - Admin VELLORA')
@section('page-title', 'Kelola Produk')

@section('page-action')
    <a href="{{ route('products.create') }}" class="inline-flex items-center gap-1.5 px-4 py-2 bg-vellora-gold hover:bg-vellora-gold-light text-black text-xs font-bold rounded-lg transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Tambah Produk
    </a>
@endsection

@section('content')

    <div class="bg-vellora-surface rounded-2xl border border-white/[0.10] overflow-hidden">
        @if($products->count())
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-white/[0.03] text-vellora-muted uppercase text-xs tracking-wide">
                        <tr>
                            <th class="px-6 py-4 font-semibold">Produk</th>
                            <th class="px-6 py-4 font-semibold">Kategori</th>
                            <th class="px-6 py-4 font-semibold">Harga</th>
                            <th class="px-6 py-4 font-semibold">Stok</th>
                            <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/[0.06]">
                        @foreach($products as $product)
                            <tr class="hover:bg-white/[0.03] transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-11 h-11 rounded-lg bg-vellora-elevated overflow-hidden flex-shrink-0">
                                            @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-vellora-muted text-lg">📦</div>
                                            @endif
                                        </div>
                                        <a href="{{ route('products.show', $product->id) }}" target="_blank" class="font-semibold text-white hover:text-vellora-gold transition-colors line-clamp-1">
                                            {{ $product->name }}
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-vellora-gold/10 text-vellora-gold-light">{{ $product->category }}</span>
                                </td>
                                <td class="px-6 py-4 font-semibold text-vellora-muted whitespace-nowrap">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold {{ $product->stock > 0 ? 'bg-emerald-500/10 text-emerald-400' : 'bg-rose-500/10 text-rose-400' }}">
                                        {{ $product->stock }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-end gap-4">
                                        <a href="{{ route('products.edit', $product->id) }}" class="text-vellora-muted hover:text-vellora-gold transition-colors" title="Edit">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-vellora-muted hover:text-rose-400 transition-colors" title="Hapus">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t border-white/[0.10]">
                {{ $products->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <div class="text-4xl mb-3">📦</div>
                <p class="text-vellora-muted text-sm font-medium mb-4">Belum ada produk. Mulai tambahkan produk pertama Anda.</p>
                <a href="{{ route('products.create') }}" class="inline-flex items-center gap-1.5 px-5 py-2.5 bg-vellora-gold hover:bg-vellora-gold-light text-black text-sm font-bold rounded-xl transition-colors">Tambah Produk</a>
            </div>
        @endif
    </div>

@endsection
