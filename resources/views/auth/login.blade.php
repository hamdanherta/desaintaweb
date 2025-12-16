<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Desainta | Login</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
    </head>

    <body class="min-h-screen flex bg-desainta text-gray-700">
        <!-- Bagian Kiri -->
        <div
            class="hidden md:flex flex-col justify-center w-1/2 px-10 text-white"
        >
            <h1 class="text-5xl font-bold mb-2">Halo!</h1>
            <p class="italic text-[60px] mb-3 font-myfontbella">
                Selamat Datang
            </p>
            <p class="text-xl mb-8">
                Dapatkan Palet Warna mu Kapan Saja dan Dimana Saja
            </p>
            <img src="/images/logodesaintaputih.svg" class="w-80" />
        </div>

        <!-- Bagian Kanan -->
        <div
            x-data="{ mode: 'login' }"
            class="flex flex-col justify-center items-center w-fit md:w-1/2 bg-white shadow-xl p-10 transition-all duration-300 overflow-hidden"
            x-cloak
        >
            <!-- Tab Login/Daftar -->
            <div class="flex space-x-2 mb-6">
                <button
                    class="px-6 py-2 rounded-full border-2 border-desainta font-semibold transition-all duration-300"
                    :class="mode === 'login' 
                    ? 'bg-desainta text-white' 
                    : 'bg-transparent text-desainta'"
                    @click.prevent="mode = 'login'"
                >
                    Login
                </button>

                <button
                    class="px-6 py-2 rounded-full border-2 border-desainta font-semibold transition-all duration-300"
                    :class="mode === 'register' 
                    ? 'bg-desainta text-white' 
                    : 'bg-transparent text-desainta'"
                    @click.prevent="mode = 'register'"
                >
                    Daftar
                </button>
            </div>

            <!-- WRAPPER: nahan posisi biar gak nindih -->
            <div
                class="relative w-full max-w-sm min-h-[440px] flex items-start justify-center"
            >
                <!-- Form Login -->
                <form
                    x-show="mode === 'login'"
                    method="POST"
                    action="{{ route('login') }}"
                    class="w-full space-y-4 absolute top-0 left-0 transition-all duration-300"
                >
                    @csrf
                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-desainta"
                        required
                    />
                    <input
                        type="password"
                        name="password"
                        placeholder="Kata Sandi"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-desainta"
                        required
                    />
                    <p class="text-sm text-gray-500">
                        Belum punya akun?
                        <a
                            href="#"
                            @click.prevent="mode = 'register'"
                            class="text-desainta font-semibold"
                            >Daftar Sekarang</a
                        >
                    </p>

                    <button
                        type="submit"
                        class="w-full bg-desainta text-white font-semibold py-2 rounded hover:bg-desaintalight transition"
                    >
                        Login
                    </button>

                    <div class="text-center text-gray-400">Atau</div>

                    <button
                        type="button"
                        class="w-full border-2 border-desainta text-desainta py-2 rounded font-semibold hover:bg-desaintalight/10 transition"
                    >
                        Login dengan Akun Google
                    </button>

                    <p class="text-center text-xs text-gray-400 mt-4">
                        Copyright © 2025
                    </p>
                </form>

                <!-- Form Register -->
                <form
                    x-show="mode === 'register'"
                    method="POST"
                    action="{{ route('register') }}"
                    class="w-full space-y-4 absolute top-0 left-0 transition-all duration-300"
                >
                    @csrf
                    <input
                        type="text"
                        name="name"
                        placeholder="Nama Lengkap"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-desainta"
                        required
                    />
                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-desainta"
                        required
                    />
                    <input
                        type="password"
                        name="password"
                        placeholder="Kata Sandi"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-desainta"
                        required
                    />
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Ulangi Kata Sandi"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-desainta"
                        required
                    />

                    <p class="text-sm text-gray-500">
                        Sudah punya akun?
                        <a
                            href="#"
                            @click.prevent="mode = 'login'"
                            class="text-desainta font-semibold"
                            >Login Sekarang</a
                        >
                    </p>

                    <button
                        type="submit"
                        class="w-full bg-desainta text-white font-semibold py-2 rounded hover:bg-desaintalight transition"
                    >
                        Daftar
                    </button>

                    <p class="text-center text-xs text-gray-400 mt-4">
                        Copyright © 2025
                    </p>
                </form>
            </div>
        </div>

        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
    </body>
</html>
