<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

/**
 * Command ini menggantikan kebutuhan mengetik perintah Tinker manual
 * setiap kali butuh membuat atau menjadikan user sebagai admin.
 *
 * Cara pakai:
 *   php artisan admin:make
 *   php artisan admin:make user@email.com
 *   php artisan admin:make user@email.com --password=rahasia123
 *
 * - Kalau email SUDAH ADA di tabel users -> user itu dipromosikan
 *   jadi role=admin (password ikut direset kalau --password diisi).
 * - Kalau email BELUM ADA -> command akan menanyakan nama & password,
 *   lalu membuat user baru dengan role=admin.
 * - Tidak pernah membuat user duplicate, dan tidak pernah menghapus
 *   user/data lain.
 */
class MakeAdminCommand extends Command
{
    protected $signature = 'admin:make {email? : Email user yang mau dijadikan admin} {--password= : Password baru (opsional)}';

    protected $description = 'Buat user admin baru, atau jadikan user existing sebagai admin.';

    public function handle(): int
    {
        $email = $this->argument('email') ?: $this->ask('Email admin');

        $validator = Validator::make(['email' => $email], [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            $this->error('Format email tidak valid.');
            return self::FAILURE;
        }

        $user = User::where('email', $email)->first();

        if ($user) {
            $this->info("User dengan email {$email} sudah ada (role saat ini: {$user->role}).");

            $password = $this->option('password');

            if (! $password && $this->confirm('Reset password user ini juga?', false)) {
                $password = $this->secret('Password baru');
            }

            $user->role = 'admin';
            $user->status = 'active';

            if ($password) {
                $user->password = $password; // otomatis di-hash oleh cast 'hashed' di model User
            }

            $user->save();

            $this->info("Selesai. {$email} sekarang role=admin, status=active.");
        } else {
            $this->info("User dengan email {$email} belum ada, membuat baru...");

            $name = $this->ask('Nama admin', 'Admin VELLORA');
            $password = $this->option('password') ?: $this->secret('Password admin');

            if (! $password) {
                $this->error('Password wajib diisi untuk membuat user baru.');
                return self::FAILURE;
            }

            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => $password, // otomatis di-hash oleh cast 'hashed'
                'role' => 'admin',
                'status' => 'active',
            ]);

            $this->info("User admin baru berhasil dibuat: {$user->email}");
        }

        $this->table(
            ['ID', 'Nama', 'Email', 'Role', 'Status'],
            [[$user->id, $user->name, $user->email, $user->role, $user->status]]
        );

        return self::SUCCESS;
    }
}
