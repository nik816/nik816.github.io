@extends('layouts.admin')

@section('title', 'Tambah Produk - Admin VELLORA')
@section('page-title', 'Tambah Produk Baru')

@section('page-action')
    <a href="{{ route('products.index') }}" class="text-xs font-semibold text-vellora-muted hover:text-white bg-white/[0.05] px-3 py-1.5 rounded-lg transition-colors">&larr; Kembali</a>
@endsection

@section('content')

    <div class="max-w-4xl mx-auto w-full">
        <div class="bg-vellora-surface rounded-2xl border border-white/[0.10] p-8">

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6" id="productForm">
                @csrf

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Nama Produk / Layanan</label>
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="Contoh: Pulsa Telkomsel 50k / Saldo DANA" class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('name') border-rose-500 @enderror">
                    @error('name') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Kategori</label>
                        <input type="text" name="category" value="{{ old('category') }}" required placeholder="Contoh: Fashion, Elektronik, Gaming" class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('category') border-rose-500 @enderror">
                        @error('category') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Harga (Rp)</label>
                        <div class="relative flex items-center">
                            <span class="absolute left-4 text-xs font-bold text-vellora-muted">Rp</span>
                            <input type="number" name="price" value="{{ old('price') }}" min="0" required placeholder="50000" class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl pl-10 pr-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('price') border-rose-500 @enderror">
                        </div>
                        @error('price') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Jumlah Stok</label>
                    <input type="number" name="stock" value="{{ old('stock', 0) }}" min="0" required class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('stock') border-rose-500 @enderror">
                    @error('stock') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Deskripsi Produk</label>
                    <textarea name="description" rows="4" required placeholder="Masukkan deskripsi produk..." class="w-full bg-vellora-elevated border border-white/[0.10] rounded-xl px-4 py-3 text-sm text-white focus:border-vellora-gold focus:outline-none transition @error('description') border-rose-500 @enderror">{{ old('description') }}</textarea>
                    @error('description') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-vellora-muted mb-2">Gambar Produk / Banner</label>
                    <input type="file" name="image" id="imageInput" accept="image/*" class="w-full text-xs text-vellora-muted file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-vellora-gold/10 file:text-vellora-gold-light hover:file:bg-vellora-gold/20 transition cursor-pointer mb-4">
                    <div id="imagePreviewContainer" class="hidden w-40 h-40 rounded-xl border-2 border-dashed border-white/[0.15] overflow-hidden relative bg-vellora-elevated flex items-center justify-center">
                        <img id="imagePreview" src="#" alt="Preview" class="object-cover w-full h-full">
                    </div>
                    @error('image') <p class="text-xs text-rose-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-end gap-4 pt-4 border-t border-white/[0.10]">
                    <a href="{{ route('products.index') }}" class="px-5 py-2.5 rounded-xl border border-white/[0.10] text-vellora-muted text-xs font-semibold hover:bg-white/[0.05] transition-colors">Batal</a>
                    <button type="submit" id="submitBtn" class="px-6 py-2.5 rounded-xl bg-vellora-gold hover:bg-vellora-gold-light text-black text-xs font-bold shadow transition-colors">
                        Simpan Produk
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const imageInput = document.getElementById('imageInput');
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');
        const imagePreview = document.getElementById('imagePreview');
        const productForm = document.getElementById('productForm');
        const submitBtn = document.getElementById('submitBtn');

        imageInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreviewContainer.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                imagePreviewContainer.classList.add('hidden');
            }
        });

        productForm.addEventListener('submit', function () {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '⏳ Menyimpan...';
        });
    </script>

@endsection
