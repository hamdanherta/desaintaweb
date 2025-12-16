<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Desainta | Tentang Aplikasi</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body
        class="min-h-screen bg-white text-gray-800 flex flex-row font-myfontinter"
    >
        <!-- Sidebar -->
        <aside
            class="bg-desainta w-64 text-white flex flex-col items-center px-8 space-y-6 min-h-screen fixed left-0 top-0 z-50"
        >
            <div class="w-full flex items-center justify-start mt-8">
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

            <div class="w-full flex-1">
                <nav class="space-y-5 w-full" x-data="{ page: 'beranda' }">
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

            <div class="w-full flex items-center justify-center mb-6">
                <footer class="text-xs text-white/70">Copyright © 2026</footer>
            </div>
        </aside>

        <!-- Konten Utama -->
        <main
            class="flex-1 w-full flex flex-col justify-items-start shadow-inner p-8 text-center ml-64"
        >
            <!-- <div
                class="w-full max-w-6xl flex justify-between items-center mb-10"
            >
                <p class="text-gray-600 text-sm">
                    Riwayat hanya akan menampilkan
                    <span class="font-semibold">5 proses terakhir</span>
                </p>

                <div class="relative">
                    <button
                        class="flex items-center bg-desainta text-white font-semibold px-5 py-2 rounded-lg hover:bg-desaintalight transition-all duration-300"
                    >
                        Kategori Gambar
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 ml-2 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </button>
                </div>
            </div> -->
            <!-- BAGIAN ATAS -->
            <div
                class="w-full max-w-5xl flex flex-col sm:flex-row justify-between items-start sm:items-center px-10 mt-20"
            >
                <!-- Logo -->
                <div class="flex flex-col items-start space-y-2">
                    <img
                        src="/images/logodesainta.svg"
                        class="w-80"
                        alt="Desainta Logo"
                    />
                    <p class="text-sm text-gray-600 mt-5 py-4">
                        Version 12.1.0
                    </p>
                </div>

                <!-- Deskripsi -->
                <div class="max-w-xl mt-6 sm:mt-0">
                    <p
                        class="text-gray-600 leading-relaxed text-center sm:text-left"
                    >
                        Aplikasi untuk Ekstraksi Warna dan Mendapatkan
                        Rekomendasi Warna dari Sebuah Gambar Desain berbasis
                        Machine Learning (AI).
                    </p>
                </div>
            </div>

            <!-- GARIS PEMBATAS -->
            <div class="w-full max-w-5xl border-t border-gray-300 mt-12"></div>

            <!-- BAGIAN BAWAH -->
            <div
                class="flex flex-col items-center justify-center text-center mt-20 space-y-6"
            >
                <!-- Icon Info -->
                <div
                    class="w-12 h-12 rounded-full bg-desainta flex items-center justify-center text-white text-2xl font-bold"
                >
                    i
                </div>

                <!-- Teks -->
                <p class="max-w-md text-gray-700 text-lg font-medium">
                    Akses Desainta Mobile App untuk Mengetahui<br />
                    Cara Menggunakan
                </p>
            </div>
        </main>

        <script src="//unpkg.com/alpinejs" defer></script>
    </body>
</html>
