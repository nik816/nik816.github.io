@extends('layouts.public')

@section('title', $article->title . ' - VELLORA')

@section('content')

    <main class="max-w-3xl mx-auto px-6 py-10 md:py-14">
        <div class="mb-6">
            <a href="{{ route('articles.index') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-zinc-300 hover:text-white bg-vellora-surface hover:bg-white/10 px-3.5 py-2 rounded-xl transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Kembali ke Artikel
            </a>
        </div>

        <article class="bg-vellora-bg2 rounded-3xl shadow-sm border border-white/10 overflow-hidden">
            @if(!empty($article->image) && Storage::disk('public')->exists($article->image))
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full aspect-[16/9] object-cover">
            @endif

            <div class="p-6 md:p-10">
                <h1 class="text-2xl md:text-3xl font-extrabold text-white tracking-tight leading-snug mb-2">{{ $article->title }}</h1>
                <p class="text-xs text-zinc-400 font-semibold uppercase tracking-wider mb-6">{{ $article->created_at?->translatedFormat('d F Y') }}</p>

                <div class="prose prose-sm md:prose-base max-w-none text-zinc-300 leading-relaxed whitespace-pre-line">
                    {{ $article->content }}
                </div>
            </div>
        </article>
    </main>

@endsection
