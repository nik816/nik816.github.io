<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Halaman Kontak publik.
     * GET /kontak
     *
     * Jika halaman Kontak Anda sebelumnya cuma section #kontak di dalam
     * Home (bukan halaman terpisah), controller ini tidak wajib dipakai —
     * cukup biarkan link "Kontak" di navbar tetap mengarah ke "/#kontak".
     * Buat route & controller ini hanya kalau Anda memang ingin Kontak
     * jadi halaman URL sendiri (/kontak).
     */
    public function index()
    {
        return view('public.contact');
    }
}
