<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Masuk — Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Caveat:wght@700&display=swap" rel="stylesheet">
</head>
<body class="bg-[#fafafa] text-[#111]">
    <main class="flex min-h-screen items-center justify-center px-6 py-12">
        <form method="POST" action="{{ route('login.store') }}" class="w-full max-w-md rounded-3xl border border-gray-200 bg-white p-8 shadow-xl">
            @csrf
            <p class="handwriting text-4xl text-[#a00000]">Admin</p>
            <h1 class="mt-1 text-2xl font-black">Masuk ke dashboard</h1>
            <p class="mt-2 text-sm text-gray-500">Kelola profil, skill, pengalaman, proyek, dan sertifikat.</p>

            <div class="mt-8 space-y-5">
                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none ring-[#a00000] focus:ring-2">
                    @error('email')
                        <p class="mt-2 text-sm text-[#a00000]">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none ring-[#a00000] focus:ring-2">
                    @error('password')
                        <p class="mt-2 text-sm text-[#a00000]">{{ $message }}</p>
                    @enderror
                </div>
                <label class="flex items-center gap-2 text-sm text-gray-600">
                    <input type="checkbox" name="remember" value="1" class="h-4 w-4 accent-[#a00000]">
                    Ingat saya
                </label>
                <button class="w-full rounded-2xl bg-black px-5 py-3 font-semibold text-white transition hover:bg-[#a00000]">
                    Masuk
                </button>
            </div>
        </form>
    </main>
</body>
</html>
