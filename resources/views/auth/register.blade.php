<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Penting Ngawe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-md border max-w-md w-full">
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar Akun Baru</h2>
        
        @if($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/register" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-semibold text-sm mb-1">Nama Lengkap</label>
                <input type="text" name="name" required class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block font-semibold text-sm mb-1">Email</label>
                <input type="email" name="email" required class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block font-semibold text-sm mb-1">Password</label>
                <input type="password" name="password" required class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">Daftar</button>
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">Sudah punya akun? <a href="/login" class="text-blue-600 font-semibold underline">Login</a></p>
    </div>
</body>
</html>