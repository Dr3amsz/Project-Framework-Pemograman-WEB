<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Akses Ditolak - Barokah Mart</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-sm w-full max-w-md text-center">
        <h1 class="text-xl font-semibold mb-2">Akses Ditolak</h1>
        <p class="text-gray-600 mb-6">
            Maaf, akun Anda tidak memiliki izin untuk mengakses halaman ini.
        </p>
        <a href="{{ url('/dashboard') }}" class="inline-block bg-emerald-600 text-white px-4 py-2 rounded-md">
            Kembali ke Dashboard
        </a>
    </div>
</body>
</html>