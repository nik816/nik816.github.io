@extends('layouts.public')

@section('title', $product->name . ' - VELLORA')

@section('content')

    <main class="max-w-6xl mx-auto px-4 sm:px-6 py-10 md:py-14">

        {{-- =========================================================
             TOMBOL KEMBALI
        ========================================================== --}}
        <div class="mb-6">
            <a
                href="{{ route('products.katalog') }}"
                class="inline-flex items-center gap-1.5 text-xs font-semibold text-zinc-300 hover:text-white bg-vellora-surface hover:bg-white/10 px-3.5 py-2 rounded-xl transition-all duration-200"
            >
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Katalog
            </a>
        </div>


        {{-- =========================================================
             DETAIL PRODUK
        ========================================================== --}}
        <div class="bg-vellora-bg2 rounded-3xl shadow-sm border border-white/10 p-5 sm:p-6 md:p-12 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 items-start">

            {{-- GAMBAR PRODUK --}}
            <div class="w-full">
                @if(!empty($product->image) && Storage::disk('public')->exists($product->image))

                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        class="w-full aspect-square md:aspect-[4/3] object-cover rounded-2xl shadow-sm border border-white/10"
                    >

                @else

                    <div class="w-full aspect-square md:aspect-[4/3] bg-vellora-bg2 rounded-2xl border-2 border-dashed border-white/10 flex flex-col items-center justify-center text-zinc-400">
                        <span class="text-5xl mb-2">📦</span>
                        <span class="text-sm font-bold">No Image Available</span>
                    </div>

                @endif
            </div>


            {{-- INFORMASI PRODUK --}}
            <div class="flex flex-col h-full justify-between space-y-6">

                <div>

                    {{-- KATEGORI --}}
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-vellora-gold/10 text-vellora-gold mb-4 tracking-wide uppercase">
                        {{ $product->category }}
                    </span>


                    {{-- NAMA PRODUK --}}
                    <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-3 leading-snug tracking-tight">
                        {{ $product->name }}
                    </h1>


                    {{-- RATING RINGKAS --}}
                    @if(isset($reviewCount) && $reviewCount > 0)

                        <div class="flex flex-wrap items-center gap-2 mb-5">

                            <div class="flex items-center gap-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg
                                        class="w-4 h-4 {{ $i <= round($averageRating) ? 'text-vellora-gold' : 'text-zinc-700' }}"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.922-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.784.57-1.838-.196-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L3.98 8.72c-.783-.57-.38-1.81.588-1.81H8.03a1 1 0 00.951-.69l1.068-3.292z"/>
                                    </svg>
                                @endfor
                            </div>

                            <span class="text-sm font-bold text-white">
                                {{ number_format($averageRating, 1) }}
                            </span>

                            <span class="text-sm text-zinc-500">
                                ({{ $reviewCount }} ulasan)
                            </span>

                        </div>

                    @endif


                    {{-- HARGA --}}
                    <div class="text-2xl md:text-3xl font-black text-vellora-gold mb-6">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </div>


                    {{-- STATUS STOK --}}
                    <div class="flex flex-wrap items-center gap-2 mb-6">

                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-400">
                            Status Stok:
                        </span>

                        @if(isset($product->stock) && $product->stock > 0)

                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/10">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                                Tersedia ({{ $product->stock }})
                            </span>

                        @else

                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-red-500/10 text-red-400 border border-red-500/10">
                                <span class="h-1.5 w-1.5 rounded-full bg-red-400"></span>
                                Habis
                            </span>

                        @endif

                    </div>


                    {{-- TOMBOL WHATSAPP --}}
                    <a
                        href="https://wa.me/?text={{ urlencode('Halo, saya ingin memesan produk: ' . $product->name) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w-full flex items-center justify-center gap-2 bg-vellora-gold hover:bg-vellora-gold-light text-white font-bold py-3.5 px-6 rounded-2xl shadow-lg shadow-vellora-gold/20 transition-all duration-200 hover:-translate-y-0.5 text-sm"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>

                        Beli / Pesan Sekarang via WhatsApp
                    </a>

                </div>

            </div>

        </div>


        {{-- =========================================================
             DESKRIPSI PRODUK
        ========================================================== --}}
        <div class="mt-6 md:mt-8 bg-vellora-bg2 rounded-3xl shadow-sm border border-white/10 p-6 md:p-10">

            <h3 class="text-sm font-extrabold uppercase tracking-wider text-zinc-400 mb-4">
                Deskripsi Produk
            </h3>

            <div class="text-sm text-zinc-300 leading-relaxed whitespace-pre-line">
                {{ $product->description ?? 'Tidak ada deskripsi tambahan untuk produk ini.' }}
            </div>

        </div>


        {{-- =========================================================
             ULASAN PRODUK
        ========================================================== --}}
        <section
            id="ulasan"
            class="mt-6 md:mt-8 bg-vellora-bg2 rounded-3xl border border-white/10 overflow-hidden"
        >

            {{-- HEADER ULASAN --}}
            <div class="p-6 md:p-10 border-b border-white/10">

                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">

                    {{-- JUDUL --}}
                    <div>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-vellora-gold">
                            Customer Reviews
                        </span>

                        <h2 class="text-2xl md:text-3xl font-black text-white mt-2">
                            Ulasan Produk
                        </h2>

                        <p class="text-sm text-zinc-500 mt-2 max-w-xl">
                            Lihat pengalaman pelanggan dan bagikan pendapatmu setelah mencoba produk ini.
                        </p>
                    </div>


                    {{-- RINGKASAN RATING --}}
                    <div class="flex items-center gap-5">

                        <div class="text-center">

                            <div class="text-4xl md:text-5xl font-black text-vellora-gold leading-none">
                                {{ isset($averageRating) && $reviewCount > 0 ? number_format($averageRating, 1) : '0.0' }}
                            </div>

                            <div class="flex justify-center gap-0.5 mt-2">

                                @for($i = 1; $i <= 5; $i++)

                                    <svg
                                        class="w-4 h-4 {{ isset($averageRating) && $i <= round($averageRating) ? 'text-vellora-gold' : 'text-zinc-700' }}"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.922-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.784.57-1.838-.196-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L3.98 8.72c-.783-.57-.38-1.81.588-1.81H8.03a1 1 0 00.951-.69l1.068-3.292z"/>
                                    </svg>

                                @endfor

                            </div>

                            <p class="text-xs text-zinc-500 mt-1">
                                {{ $reviewCount ?? 0 }} ulasan
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- PESAN SUKSES --}}
            @if(session('review_success'))

                <div class="mx-6 md:mx-10 mt-6 rounded-2xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3.5 text-sm text-emerald-300">
                    <div class="flex items-start gap-3">

                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>

                        <span>
                            {{ session('review_success') }}
                        </span>

                    </div>
                </div>

            @endif


            {{-- ERROR VALIDASI --}}
            @if($errors->any())

                <div class="mx-6 md:mx-10 mt-6 rounded-2xl border border-red-500/20 bg-red-500/10 px-4 py-4 text-sm text-red-300">

                    <div class="font-bold mb-2">
                        Ulasan belum dapat dikirim:
                    </div>

                    <ul class="list-disc list-inside space-y-1 text-red-300/90">

                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- FORM ULASAN --}}
            <div class="p-6 md:p-10">

                <div class="bg-black/20 border border-white/10 rounded-3xl p-5 md:p-7">

                    <div class="mb-6">

                        <h3 class="text-lg font-extrabold text-white">
                            Bagikan Pengalamanmu
                        </h3>

                        <p class="text-sm text-zinc-500 mt-1">
                            Berikan rating dan ulasan untuk produk ini.
                        </p>

                    </div>


                    <form
                        action="{{ route('reviews.store', $product) }}"
                        method="POST"
                        class="space-y-6"
                    >

                        @csrf


                        {{-- NAMA --}}
                        <div>

                            <label
                                for="review-name"
                                class="block text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2"
                            >
                                Nama
                            </label>

                            <input
                                id="review-name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                maxlength="100"
                                required
                                placeholder="Masukkan nama kamu"
                                class="w-full bg-vellora-bg2 border border-white/10 focus:border-vellora-gold/60 focus:ring-2 focus:ring-vellora-gold/10 text-white placeholder:text-zinc-600 rounded-2xl px-4 py-3.5 text-sm outline-none transition-all"
                            >

                        </div>


                        {{-- RATING --}}
                        <div>

                            <label class="block text-xs font-bold uppercase tracking-wider text-zinc-400 mb-3">
                                Rating
                            </label>

                            <div
                                class="flex items-center gap-1"
                                id="rating-picker"
                                role="radiogroup"
                                aria-label="Pilih rating"
                            >

                                @for($i = 1; $i <= 5; $i++)

                                    <button
                                        type="button"
                                        class="rating-star p-1 rounded-lg text-zinc-700 hover:text-vellora-gold transition-all duration-150"
                                        data-rating="{{ $i }}"
                                        role="radio"
                                        aria-label="{{ $i }} bintang"
                                        aria-checked="false"
                                    >

                                        <svg
                                            class="w-8 h-8 md:w-9 md:h-9"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.922-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.784.57-1.838-.196-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L3.98 8.72c-.783-.57-.38-1.81.588-1.81H8.03a1 1 0 00.951-.69l1.068-3.292z"/>
                                        </svg>

                                    </button>

                                @endfor

                            </div>

                            <input
                                type="hidden"
                                name="rating"
                                id="rating-value"
                                value="{{ old('rating') }}"
                            >

                            <p
                                id="rating-text"
                                class="text-xs text-zinc-600 mt-2"
                            >
                                Pilih rating dari 1 sampai 5 bintang.
                            </p>

                        </div>


                        {{-- KOMENTAR --}}
                        <div>

                            <label
                                for="review-comment"
                                class="block text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2"
                            >
                                Ulasan
                            </label>

                            <textarea
                                id="review-comment"
                                name="comment"
                                rows="5"
                                maxlength="1000"
                                required
                                placeholder="Ceritakan pengalaman kamu menggunakan produk ini..."
                                class="w-full bg-vellora-bg2 border border-white/10 focus:border-vellora-gold/60 focus:ring-2 focus:ring-vellora-gold/10 text-white placeholder:text-zinc-600 rounded-2xl px-4 py-3.5 text-sm outline-none transition-all resize-y"
                            >{{ old('comment') }}</textarea>

                            <div class="flex justify-end mt-2">
                                <span
                                    id="comment-counter"
                                    class="text-xs text-zinc-600"
                                >
                                    0 / 1000
                                </span>
                            </div>

                        </div>


                        {{-- BUTTON --}}
                        <div class="flex justify-end">

                            <button
                                type="submit"
                                class="inline-flex items-center justify-center gap-2 bg-vellora-gold hover:bg-vellora-gold-light text-black font-extrabold px-6 py-3.5 rounded-2xl shadow-lg shadow-vellora-gold/10 transition-all duration-200 hover:-translate-y-0.5 text-sm"
                            >

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>
                                </svg>

                                Kirim Ulasan

                            </button>

                        </div>

                    </form>

                </div>

            </div>


            {{-- DAFTAR ULASAN --}}
            <div class="px-6 md:px-10 pb-8 md:pb-10">

                <div class="flex items-center justify-between gap-4 mb-5">

                    <h3 class="text-lg font-extrabold text-white">
                        Ulasan Pelanggan
                    </h3>

                    <span class="text-xs text-zinc-600">
                        {{ $reviewCount ?? 0 }} ulasan
                    </span>

                </div>


                @if(isset($reviews) && $reviews->count())

                    <div class="space-y-4">

                        @foreach($reviews as $review)

                            <article class="bg-black/20 border border-white/10 rounded-2xl p-5 md:p-6">

                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">

                                    <div class="flex items-start gap-3">

                                        {{-- AVATAR --}}
                                        <div class="w-10 h-10 rounded-full bg-vellora-gold/10 border border-vellora-gold/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-sm font-black text-vellora-gold">
                                                {{ strtoupper(substr($review->name, 0, 1)) }}
                                            </span>
                                        </div>


                                        <div>

                                            <h4 class="text-sm font-extrabold text-white">
                                                {{ $review->name }}
                                            </h4>

                                            <div class="flex items-center gap-2 mt-1">

                                                <div class="flex items-center gap-0.5">

                                                    @for($i = 1; $i <= 5; $i++)

                                                        <svg
                                                            class="w-3.5 h-3.5 {{ $i <= $review->rating ? 'text-vellora-gold' : 'text-zinc-700' }}"
                                                            fill="currentColor"
                                                            viewBox="0 0 20 20"
                                                        >
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.922-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.784.57-1.838-.196-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L3.98 8.72c-.783-.57-.38-1.81.588-1.81H8.03a1 1 0 00.951-.69l1.068-3.292z"/>
                                                        </svg>

                                                    @endfor

                                                </div>

                                                <span class="text-[11px] text-zinc-600">
                                                    {{ $review->created_at?->format('d M Y') }}
                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- KOMENTAR --}}
                                <div class="mt-4 pl-0 sm:pl-[52px]">

                                    <p class="text-sm text-zinc-300 leading-relaxed whitespace-pre-line">
                                        {{ $review->comment }}
                                    </p>

                                </div>

                            </article>

                        @endforeach

                    </div>


                    {{-- PAGINATION --}}
                    @if($reviews->hasPages())

                        <div class="mt-6">
                            {{ $reviews->links() }}
                        </div>

                    @endif

                @else

                    {{-- BELUM ADA ULASAN --}}
                    <div class="text-center py-10 px-5 bg-black/20 border border-white/10 rounded-2xl">

                        <div class="w-14 h-14 mx-auto rounded-2xl bg-vellora-gold/10 border border-vellora-gold/10 flex items-center justify-center mb-4">

                            <svg
                                class="w-7 h-7 text-vellora-gold"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.922-.755 1.688-1.54 1.118l-2.8-2.034c-.784.57-1.838-.196-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L3.98 8.72c-.783-.57-.38-1.81.588-1.81H8.03a1 1 0 00.951-.69l1.068-3.292z"/>
                            </svg>

                        </div>

                        <h4 class="text-base font-extrabold text-white">
                            Belum ada ulasan
                        </h4>

                        <p class="text-sm text-zinc-500 mt-1">
                            Jadilah orang pertama yang memberikan ulasan untuk produk ini.
                        </p>

                    </div>

                @endif

            </div>

        </section>

    </main>


    {{-- =========================================================
         SCRIPT RATING
    ========================================================== --}}
    @push('scripts')

        <script>

            document.addEventListener('DOMContentLoaded', function () {

                const ratingPicker =
                    document.getElementById('rating-picker');

                const ratingValue =
                    document.getElementById('rating-value');

                const ratingText =
                    document.getElementById('rating-text');

                const comment =
                    document.getElementById('review-comment');

                const commentCounter =
                    document.getElementById('comment-counter');


                /* =================================================
                   RATING
                ================================================== */

                if (
                    ratingPicker &&
                    ratingValue &&
                    ratingText
                ) {

                    const stars =
                        ratingPicker.querySelectorAll(
                            '.rating-star'
                        );

                    const ratingLabels = {
                        1: 'Sangat kurang',
                        2: 'Kurang',
                        3: 'Cukup',
                        4: 'Bagus',
                        5: 'Sangat bagus'
                    };


                    function updateRating(value) {

                        stars.forEach(function (star) {

                            const starRating =
                                Number(
                                    star.dataset.rating
                                );

                            if (starRating <= value) {

                                star.classList.remove(
                                    'text-zinc-700'
                                );

                                star.classList.add(
                                    'text-vellora-gold'
                                );

                            } else {

                                star.classList.remove(
                                    'text-vellora-gold'
                                );

                                star.classList.add(
                                    'text-zinc-700'
                                );

                            }

                            star.setAttribute(
                                'aria-checked',
                                starRating === value
                                    ? 'true'
                                    : 'false'
                            );

                        });


                        if (value > 0) {

                            ratingText.textContent =
                                value +
                                ' / 5 — ' +
                                ratingLabels[value];

                            ratingText.classList.remove(
                                'text-zinc-600'
                            );

                            ratingText.classList.add(
                                'text-vellora-gold'
                            );

                        } else {

                            ratingText.textContent =
                                'Pilih rating dari 1 sampai 5 bintang.';

                            ratingText.classList.remove(
                                'text-vellora-gold'
                            );

                            ratingText.classList.add(
                                'text-zinc-600'
                            );

                        }

                    }


                    stars.forEach(function (star) {

                        star.addEventListener(
                            'click',
                            function () {

                                const value =
                                    Number(
                                        this.dataset.rating
                                    );

                                ratingValue.value =
                                    value;

                                updateRating(value);

                            }
                        );


                        star.addEventListener(
                            'mouseenter',
                            function () {

                                const value =
                                    Number(
                                        this.dataset.rating
                                    );

                                stars.forEach(
                                    function (item) {

                                        const itemRating =
                                            Number(
                                                item.dataset.rating
                                            );

                                        item.classList.toggle(
                                            'text-vellora-gold',
                                            itemRating <= value
                                        );

                                        item.classList.toggle(
                                            'text-zinc-700',
                                            itemRating > value
                                        );

                                    }
                                );

                            }
                        );


                        star.addEventListener(
                            'mouseleave',
                            function () {

                                updateRating(
                                    Number(
                                        ratingValue.value || 0
                                    )
                                );

                            }
                        );

                    });


                    const initialRating =
                        Number(
                            ratingValue.value || 0
                        );

                    if (initialRating > 0) {
                        updateRating(initialRating);
                    }

                }


                /* =================================================
                   COMMENT COUNTER
                ================================================== */

                if (comment && commentCounter) {

                    function updateCommentCounter() {

                        commentCounter.textContent =
                            comment.value.length +
                            ' / 1000';

                    }

                    updateCommentCounter();

                    comment.addEventListener(
                        'input',
                        updateCommentCounter
                    );

                }

            });

        </script>

    @endpush

@endsection