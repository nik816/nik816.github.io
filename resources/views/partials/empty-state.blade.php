@php
    $title = $title ?? 'Belum ada data';
    $text  = $text ?? null;
@endphp
<div class="col-span-full mx-auto w-full max-w-md basis-full py-14 text-center" role="status">
    <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.03] text-zinc-500">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z"/></svg>
    </div>
    <h3 class="text-base font-extrabold text-white">{{ $title }}</h3>
    @if($text)<p class="mt-2 text-sm leading-relaxed text-zinc-400">{{ $text }}</p>@endif
    @if(!empty($href))
        <a href="{{ $href }}" class="mt-6 inline-flex items-center rounded-xl border border-[#D4AF37]/60 px-5 py-2.5 text-sm font-bold text-white transition hover:bg-[#D4AF37]/10">{{ $label ?? 'Kembali' }}</a>
    @endif
</div>
