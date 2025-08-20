<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Surat Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-blue-700 text-white px-6 py-3 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="font-bold text-lg">📜 Aplikasi Surat Desa</h1>
            <ul class="flex gap-4">
                <li><a href="{{ route('surat.index') }}" class="hover:underline">Daftar Surat</a></li>
                <li><a href="{{ route('surat.create') }}" class="hover:underline">Buat Surat</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center text-sm text-gray-600 py-4 mt-10">
        &copy; {{ date('Y') }} Desa Kita. Dibuat dengan ❤️ pakai Laravel 10.
    </footer>

</body>
</html>
