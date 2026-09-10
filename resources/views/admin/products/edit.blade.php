@extends('layouts.admin')

@section('title', 'Edit Produk - Admin VELLORA')
@section('page-title', 'Edit Produk')

@section('page-action')
    <a href="{{ route('products.index') }}" class="text-xs font-semibold text-vellora-muted hover:text-white bg-white/[0.05] px-3 py-1.5 rounded-lg transition-colors">&larr; Kembali</a>
@endsection

@section('content')

    <div class="max-w-4xl mx-auto w-full space-y-6">
        <div class="bg-vellora-surface rounded-2xl border border-white/[0.10] p-8">

            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Nama Produk</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" required class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('name') border-rose-500 @enderror">
                    @error('name') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Kategori</label>
                        <input type="text" name="category" value="{{ old('category', $product->category) }}" required class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('category') border-rose-500 @enderror">
                        @error('category') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Harga (Rp)</label>
                        <input type="number" name="price" value="{{ old('price', $product->price) }}" min="0" required class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('price') border-rose-500 @enderror">
                        @error('price') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Stok</label>
                    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" min="0" required class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('stock') border-rose-500 @enderror">
                    @error('stock') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Deskripsi</label>
                    <textarea name="description" rows="4" class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('description') border-rose-500 @enderror">{{ old('description', $product->description) }}</textarea>
                    @error('description') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Gambar Baru (Opsional)</label>
                    @if(!empty($product->image) && Storage::disk('public')->exists($product->image))
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover rounded-lg border border-white/[0.10]">
                        </div>
                    @endif
                    <input type="file" name="image" accept="image/*" class="w-full text-xs text-vellora-muted file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-vellora-gold/10 file:text-vellora-gold-light hover:file:bg-vellora-gold/20 transition">
                    @error('image') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-end gap-3 pt-4 border-t border-white/[0.10]">
                    <a href="{{ route('products.index') }}" class="px-5 py-2.5 rounded-xl border border-white/[0.10] text-vellora-muted text-xs font-semibold hover:bg-white/[0.05] transition-colors">Batal</a>
                    <button type="submit" class="px-6 py-2.5 rounded-xl bg-vellora-gold hover:bg-vellora-gold-light text-black text-xs font-bold shadow transition-colors">Perbarui Produk</button>
                </div>
            </form>
        </div>

        <!-- Form Hapus TERPISAH dari form update di atas -->
        <div class="bg-vellora-surface rounded-2xl border border-rose-500/20 p-6 flex items-center justify-between">
            <div>
                <p class="text-sm font-bold text-white">Hapus Produk Ini</p>
                <p class="text-xs text-vellora-muted mt-0.5">Tindakan ini tidak bisa dibatalkan.</p>
            </div>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-5 py-2.5 rounded-xl border border-rose-500/30 text-rose-400 text-xs font-bold hover:bg-rose-500/10 transition-colors">Hapus Produk</button>
            </form>
        </div>
    </div>

@endsection
