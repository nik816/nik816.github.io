@extends('layouts.public')

@section('title', 'Artikel - Penting Ngawe')

@section('content')

    <main class="container mx-auto px-4 py-14 md:py-16">
        <div class="text-center max-w-xl mx-auto mb-12">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-3 text-white tracking-tight">Artikel</h2>
            <p class="text-vellora-muted text-sm">Tips, info, dan update seputar produk digital dari Penting Ngawe.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
            @forelse($articles as $article)
                <a href="{{ route('articles.show', $article->id) }}" class="group bg-vellora-bg2 rounded-3xl shadow-sm border border-white/10 overflow-hidden flex flex-col transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="w-full aspect-[16/10] bg-vellora-surface overflow-hidden flex items-center justify-center border-b border-white/10">
                        @if(!empty($article->image) && Storage::disk('public')->exists($article->image))
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        @else
                            <div class="flex flex-col items-center justify-center text-zinc-400">
                                <span class="text-3xl mb-1">📰</span>
                                <span class="text-[10px] font-bold uppercase tracking-wider">No Image</span>
                            </div>
                        @endif
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="font-bold text-base text-white mb-2 leading-snug line-clamp-2">{{ $article->title }}</h3>
                        <p class="text-vellora-muted text-xs leading-relaxed line-clamp-3 mb-4">{{ Str::limit(strip_tags($article->content), 140) }}</p>
                        <span class="mt-auto inline-flex items-center gap-1 text-xs font-bold text-vellora-gold group-hover:gap-1.5 transition-all">
                            Baca Selengkapnya
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </span>
                    </div>
                </a>
            @empty
                <div class="col-span-full py-16 text-center text-zinc-400">
                    <div class="text-4xl mb-3">📰</div>
                    <p class="text-base font-medium">Belum ada artikel yang dipublikasikan.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-10">
            {{ $articles->links() }}
        </div>
    </main>

@endsection
