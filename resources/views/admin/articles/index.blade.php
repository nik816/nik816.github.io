@extends('layouts.admin')

@section('title', 'Kelola Artikel - Admin Penting Ngawe')
@section('page-title', 'Kelola Artikel')

@section('page-action')
    <a href="{{ route('admin.articles.create') }}" class="inline-flex items-center gap-1.5 px-4 py-2 bg-vellora-gold hover:bg-vellora-gold-light text-black text-xs font-bold rounded-lg transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Tambah Artikel
    </a>
@endsection

@section('content')

    <div class="bg-vellora-bg2 rounded-2xl shadow-sm border border-white/10 overflow-hidden">
        @if($articles->count())
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-vellora-bg2 text-vellora-muted uppercase text-xs tracking-wide">
                        <tr>
                            <th class="px-6 py-4 font-semibold">Judul</th>
                            <th class="px-6 py-4 font-semibold">Tanggal</th>
                            <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/10">
                        @foreach($articles as $article)
                            <tr class="hover:bg-vellora-bg2/60 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-11 h-11 rounded-lg bg-vellora-surface overflow-hidden flex-shrink-0">
                                            @if(!empty($article->image) && Storage::disk('public')->exists($article->image))
                                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-zinc-300 text-lg">📰</div>
                                            @endif
                                        </div>
                                        <a href="{{ route('articles.show', $article->id) }}" target="_blank" class="font-semibold text-white hover:text-vellora-gold transition-colors line-clamp-1">
                                            {{ $article->title }}
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-vellora-muted whitespace-nowrap">{{ $article->created_at?->translatedFormat('d M Y') }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-end gap-4">
                                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="text-vellora-muted hover:text-vellora-gold transition-colors" title="Edit">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        </a>
                                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-vellora-muted hover:text-red-600 transition-colors" title="Hapus">
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
            <div class="px-6 py-4 border-t border-white/10">
                {{ $articles->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <div class="text-4xl mb-3">📰</div>
                <p class="text-vellora-muted text-sm font-medium mb-4">Belum ada artikel. Mulai tulis artikel pertama Anda.</p>
                <a href="{{ route('admin.articles.create') }}" class="inline-flex items-center gap-1.5 px-5 py-2.5 bg-vellora-gold hover:bg-vellora-gold-light text-black text-sm font-bold rounded-xl transition-colors">Tambah Artikel</a>
            </div>
        @endif
    </div>

@endsection
