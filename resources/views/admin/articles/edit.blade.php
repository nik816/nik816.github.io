@extends('layouts.admin')

@section('title', 'Edit Artikel - Admin Penting Ngawe')
@section('page-title', 'Edit Artikel')

@section('page-action')
    <a href="{{ route('admin.articles.index') }}" class="text-xs font-semibold text-zinc-300 hover:text-white bg-vellora-surface px-3 py-1.5 rounded-lg transition-colors">&larr; Kembali</a>
@endsection

@section('content')
    <div class="max-w-3xl mx-auto w-full space-y-6">
        <div class="bg-vellora-bg2 rounded-2xl shadow-sm border border-white/10 p-8">
            <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.articles._form')
            </form>
        </div>

        <div class="bg-vellora-bg2 rounded-2xl shadow-sm border border-rose-100 p-6 flex items-center justify-between">
            <div>
                <p class="text-sm font-bold text-white">Hapus Artikel Ini</p>
                <p class="text-xs text-vellora-muted mt-0.5">Tindakan ini tidak bisa dibatalkan.</p>
            </div>
            <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-5 py-2.5 rounded-xl border border-rose-200 text-red-600 text-xs font-bold hover:bg-red-50 transition-colors">Hapus Artikel</button>
            </form>
        </div>
    </div>
@endsection
