<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Desainta | Beranda</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body
        class="min-h-screen bg-white text-gray-800 flex flex-row font-myfontinter"
    >
        <!-- Sidebar -->
        <aside
            class="bg-desainta w-fit text-white flex flex-col items-center px-8 space-y-6 min-h-screen fixed"
        >
            <div class="w-full h-full flex items-center justify-start mt-8">
                <div
                    class="w-16 aspect-square bg-white rounded-full flex items-center justify-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="w-12 h-12 text-white/80"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5.121 17.804A10.97 10.97 0 0112 15c2.485 0 4.779.81 6.879 2.171M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                        />
                    </svg>
                </div>
            </div>
            <!-- Foto profil -->

            <div class="w-full h-full">
                <!-- Menu -->
                <nav class="space-y-5 w-40" x-data="{ page: 'beranda' }">
                    <button
                        @click="page = 'beranda'"
                        :class="page === 'beranda' ? 'bg-white text-desainta' : 'bg-white/20 text-white hover:bg-white/30'"
                        class="w-full flex items-center gap-2 px-4 py-2 rounded-lg font-semibold transition-all duration-300"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 12l9-9 9 9M4 10v10h16V10"
                            />
                        </svg>
                        <span class="font-medium mx-2">Beranda</span>
                    </button>

                    <button
                        @click="page = 'riwayat'"
                        :class="page === 'riwayat' ? 'bg-white text-desainta' : 'bg-white/20 text-white hover:bg-white/30'"
                        class="w-full flex items-center gap-2 px-4 py-2 rounded-lg font-semibold transition-all duration-300"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8c.638 0 1.25.24 1.707.707A2.414 2.414 0 0114.414 10H21v10H3V10h6.586a2.414 2.414 0 01.707-.707A2.414 2.414 0 0112 8z"
                            />
                        </svg>
                        <span class="font-medium mx-2">Riwayat</span>
                    </button>

                    <button
                        @click="page = 'tentang'"
                        :class="page === 'tentang' ? 'bg-white text-desainta' : 'bg-white/20 text-white hover:bg-white/30'"
                        class="w-full flex items-center gap-2 px-4 py-2 rounded-lg font-semibold transition-all duration-300"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M12 20h.01M21 12A9 9 0 113 12a9 9 0 0118 0z"
                            />
                        </svg>
                        <span class="font-medium mx-2">Tentang Aplikasi</span>
                    </button>
                </nav>
            </div>

            <div class="w-full x-2 h-full flex items-center justify-center">
                <footer class="text-xs text-white/70">Copyright © 2026</footer>
            </div>
            <!-- Footer -->

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link
                    :href="route('logout')"
                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                >
                    {{ __("Log Out") }}
                </x-dropdown-link>
            </form>
        </aside>

        <!-- Konten Utama -->
        <main
            class="flex-1 flex flex-col justify-center items-center bg-white rounded-l-3xl shadow-inner p-8 text-center ml-64"
        >
            <div
                class="w-full min-h-screen gap-5 flex flex-col items-center justify-center mb-8"
            >
                <img src="/images/logodesainta.svg" class="w-80" />
                <p class="max-w-xl text-lg font-medium text-gray-700">
                    Klik
                    <span class="text-desainta font-bold">Upload</span> untuk
                    Mulai Ekstraksi Warna pada Gambar <br />
                    untuk mendapatkan
                    <span class="text-desainta font-bold">Palet Warna</span>
                    serta
                    <span class="text-desainta font-bold"
                        >Rekomendasi Warna</span
                    >
                    untuk Project Desain Kamu!
                </p>

                <button
                    class="mt-8 bg-desainta text-white font-semibold px-10 py-2 rounded-xl shadow-md hover:scale-105 hover:bg-desaintalight transition-all duration-300"
                >
                    Upload
                </button>
            </div>

            <div class="w-full mt-10 flex flex-col items-center gap-2">
                <img src="/images/panahkebawah.svg" class="w-8 h-8" />
            </div>

            <div
                class="bg-desainta w-full mt-10 flex items-center gap-8 p-10 rounded-3xl shadow-sm"
            >
                <!-- Preview Gambar -->
                <div
                    class="relative w-full h-[350px] flex items-center justify-center bg-gray-50 rounded-xl overflow-hidden"
                >
                    <img
                        src="/images/gambar.jpg"
                        alt="Preview Gambar"
                        class="object-contain w-full h-full bg-gray-300"
                    />
                </div>

                <!-- Panel Kanan -->
                <div class="flex flex-col justify-center items-center gap-4">
                    <p class="font-medium text-white text-lg">Jenis Gambar</p>

                    <button
                        class="bg-white hover:bg-desainta text-desainta hover:text-white font-semibold py-2 px-6 rounded-lg w-40"
                    >
                        Vector/Digital
                    </button>
                    <button
                        class="bg-white hover:bg-desainta text-desainta hover:text-white font-semibold py-2 px-6 rounded-lg w-40"
                    >
                        Hasil Kamera
                    </button>

                    <hr class="w-full border-dashed border-gray-300 my-3" />

                    <button
                        class="bg-lime-600 hover:bg-lime-700 border-2 border-white text-white font-semibold py-2 px-6 rounded-lg mt-2 w-40"
                    >
                        Proses
                    </button>
                </div>
            </div>

            <div class="w-full mt-10 flex flex-col items-center gap-2">
                <img src="/images/panahkebawah.svg" class="w-8 h-8" />
            </div>

            <div
                class="w-full mt-10 flex flex-col items-center justify-center gap-8 rounded-3xl shadow-sm"
            >
                <!-- Bagian Kiri -->
                <div
                    class="bg-desainta h-fit py-10 flex flex-col items-center w-full p-8 rounded-3xl"
                >
                    <div
                        class="w-full h-fit mt-4 flex flex-col items-center justify-center mb-10"
                    >
                        <!-- Preview -->
                        <div
                            class="relative w-full h-[300px] rounded-xl overflow-hidden shadow-md"
                        >
                            <img
                                src="/images/gambar.jpg"
                                alt="Preview Gambar"
                                class="object-contain w-full h-full bg-gray-300"
                            />
                        </div>

                        <!-- Teks Hasil -->
                        <p class="text-white text-lg font-bold mt-6">
                            Berikut Hasil Pengolahan warna<br />pada Gambar
                        </p>

                        <div class="flex flex-col items-center mt-4">
                            <div
                                class="w-1 h-fit py-10 bg-white rounded-full relative"
                            >
                                <div
                                    class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-10 h-10 bg-white rounded-full flex items-center justify-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-7 h-7 text-desainta"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                </div>

                                <!-- <div
                                    class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-10 h-10 bg-white rounded-full flex items-center justify-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-7 h-7 text-desainta"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"
                                        />
                                    </svg>
                                </div> -->
                            </div>
                        </div>

                        <!-- <p class="text-white py-10 text-lg font-bold">
                                Mohon Maaf!
                                Ekstraksi Warna Gagal dilakukan.
                            </p> -->
                    </div>

                    <div
                        class="w-full h-full gap-5 flex flex-col md:flex-row items-start justify-center mb-8"
                    >
                        <div
                            class="py-8 w-full h-full mt-4 border-4 border-white rounded-2xl flex flex-col items-center justify-center"
                        >
                            <!-- Warna Dominan -->
                            <p class="text-white text-lg font-bold">
                                5 Warna Dominan Terdeteksi
                            </p>

                            <p class="text-white text-lg font-bold">
                                Mohon Maaf! Ekstraksi Warna Gagal dilakukan
                            </p>

                            <div class="mt-4 space-y-3">
                                <!-- Warna Card -->
                                <div
                                    class="flex items-center justify-end w-64 gap-2 bg-yellow-300 border-4 border-white text-gray-800 rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-end w-64 gap-2 bg-yellow-300 border-4 border-white text-gray-800 rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-end w-64 gap-2 bg-yellow-300 border-4 border-white text-gray-800 rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-end w-64 gap-2 bg-yellow-300 border-4 border-white text-gray-800 rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>

                                <h3 class="font-bold text-lg my-4 text-white">
                                    Warna Paling Dominan
                                </h3>

                                <!-- Warna Dominan Utama -->
                                <div
                                    class="flex items-center justify-end mb-8 w-64 gap-2 bg-yellow-300 border-4 border-white text-white rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="py-8 w-full h-full mt-4 border-4 border-white rounded-2xl flex flex-col items-center justify-center"
                        >
                            <h3 class="font-bold text-lg mb-2 text-white">
                                Warna Rekomendasi
                            </h3>

                            <p
                                class="text-white max-w-64 text-sm mb-4 leading-relaxed"
                            >
                                Jika kamu ingin menggunakan warna dominan
                                sebagai baseline dari desain kamu, maka dibawah
                                ini merupakan beberapa warna yang cocok untuk
                                dikombinasikan.
                            </p>

                            <!-- Warna Rekomendasi -->
                            <div class="space-y-3 mb-4">
                                <div
                                    class="flex items-center justify-end w-64 gap-2 bg-yellow-300 border-4 border-white text-gray-800 rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-end w-64 gap-2 bg-yellow-300 border-4 border-white text-gray-800 rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-end w-64 gap-2 bg-yellow-300 border-4 border-white text-gray-800 rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-end w-64 gap-2 bg-yellow-300 border-4 border-white text-gray-800 rounded-2xl shadow"
                                >
                                    <div class="w-fit h-full bg-white p-3">
                                        <button
                                            class="text-desainta bg-white h-full font-bold text-sm"
                                        >
                                            📋 Copy
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="//unpkg.com/alpinejs" defer></script>
        <script
            src="https://kit.fontawesome.com/a076d05399.js"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
