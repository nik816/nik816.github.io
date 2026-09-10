@extends('layouts.admin')

@section('title', 'Tambah Artikel - Admin Penting Ngawe')
@section('page-title', 'Tambah Artikel')

@section('page-action')
    <a href="{{ route('admin.articles.index') }}" class="text-xs font-semibold text-zinc-300 hover:text-white bg-vellora-surface px-3 py-1.5 rounded-lg transition-colors">&larr; Kembali</a>
@endsection

@section('content')
    <div class="max-w-3xl mx-auto w-full">
        <div class="bg-vellora-bg2 rounded-2xl shadow-sm border border-white/10 p-8">
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.articles._form')
            </form>
        </div>
    </div>
@endsection
