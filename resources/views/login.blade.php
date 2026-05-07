<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body class="bg-gradient-to-br from-indigo-500 to-purple-600 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md">

        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-2">
                Login Perpus
            </h2>

            <p class="text-gray-500 text-sm">
                Silakan masuk ke akun Anda
            </p>
        </div>

        {{-- ERROR LOGIN --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                Email atau password salah
            </div>
        @endif

        {{-- FORM LOGIN --}}
        <form method="POST" action="{{ route('login') }}" class="space-y-6">

            @csrf

            {{-- EMAIL --}}
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    required
                    autofocus
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition-all"
                    placeholder="Masukkan email..."
                >
            </div>

            {{-- PASSWORD --}}
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition-all"
                    placeholder="••••••••"
                >
            </div>

            {{-- REMEMBER ME --}}
            <div class="flex items-center">
                <input
                    type="checkbox"
                    name="remember"
                    class="mr-2"
                >

                <label class="text-sm text-gray-600">
                    Remember me
                </label>
            </div>

            {{-- BUTTON LOGIN --}}
            <button
                type="submit"
                class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg transition-all shadow-lg hover:shadow-xl"
            >
                Login Sekarang
            </button>

        </form>

        {{-- LINK REGISTER --}}
        <div class="text-center mt-6">
            <a
                href="{{ route('register') }}"
                class="text-indigo-600 hover:underline text-sm"
            >
                Belum punya akun? Register
            </a>
        </div>

    </div>

</body>
</html>