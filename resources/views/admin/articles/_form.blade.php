@php $isEdit = isset($article); @endphp

<div>
    <label class="block text-xs font-bold uppercase tracking-wider text-zinc-300 mb-2">Judul Artikel</label>
    <input type="text" name="title" value="{{ old('title', $isEdit ? $article->title : '') }}" required class="w-full bg-vellora-bg2 border border-white/10 rounded-xl px-4 py-3 text-sm focus:bg-vellora-bg2 focus:border-vellora-gold focus:outline-none transition @error('title') border-rose-500 @enderror">
    @error('title') <p class="text-xs text-red-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
</div>

<div class="mt-6">
    <label class="block text-xs font-bold uppercase tracking-wider text-zinc-300 mb-2">Isi Artikel</label>
    <textarea name="content" rows="10" required placeholder="Tulis isi artikel di sini..." class="w-full bg-vellora-bg2 border border-white/10 rounded-xl px-4 py-3 text-sm leading-relaxed focus:bg-vellora-bg2 focus:border-vellora-gold focus:outline-none transition @error('content') border-rose-500 @enderror">{{ old('content', $isEdit ? $article->content : '') }}</textarea>
    @error('content') <p class="text-xs text-red-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
</div>

<div class="mt-6">
    <label class="block text-xs font-bold uppercase tracking-wider text-zinc-300 mb-2">Gambar Sampul {{ $isEdit ? '(Opsional)' : '' }}</label>
    @if($isEdit && !empty($article->image) && Storage::disk('public')->exists($article->image))
        <div class="mb-3">
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-24 h-24 object-cover rounded-lg border border-white/10">
        </div>
    @endif
    <input type="file" name="image" accept="image/*" class="w-full text-xs text-vellora-muted file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-vellora-gold/10 file:text-vellora-gold-light hover:file:bg-vellora-gold/10 transition">
    @error('image') <p class="text-xs text-red-500 mt-1 font-medium">⚠ {{ $message }}</p> @enderror
</div>

<div class="flex items-center justify-end gap-3 pt-6 mt-6 border-t border-white/10">
    <a href="{{ route('admin.articles.index') }}" class="px-5 py-2.5 rounded-xl border border-white/10 text-zinc-300 text-xs font-semibold hover:bg-vellora-surface transition-colors">Batal</a>
    <button type="submit" class="px-6 py-2.5 rounded-xl bg-vellora-gold hover:bg-vellora-gold-light text-white text-xs font-bold shadow transition-colors">
        {{ $isEdit ? 'Perbarui Artikel' : 'Simpan Artikel' }}
    </button>
</div>
