<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Soal ASN</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="bg-gray-100">
   <!-- Navbar Responsif dengan Login dan Register -->
<nav class="bg-gradient-to-r from-blue-500 to-indigo-600 p-4 text-white shadow-lg fixed w-full z-50 top-0">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <h1 class="text-xl font-extrabold tracking-widest">LMS</h1>

        <!-- Tombol Hamburger untuk Mobile -->
        <button id="menu-toggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Menu Navigasi -->
        <div class="hidden md:flex space-x-6 items-center" id="menu">
            <a href="/" class="hover:text-yellow-300 transition">Beranda</a>
            <a href="panduan" class="hover:text-yellow-300 transition">Panduan</a>            
        </div>
    </div>
    
    <!-- Menu Mobile (Dropdown) -->
    <div class="md:hidden hidden mt-4" id="mobile-menu">
        <a href="/" class="block py-2 hover:text-yellow-300 transition">Beranda</a>
        <a href="#paket-belajar" class="block py-2 hover:text-yellow-300 transition">Paket Belajar</a>
        <a href="#keunggulan" class="block py-2 hover:text-yellow-300 transition">Keunggulan</a>
        <a href="#testimoni" class="block py-2 hover:text-yellow-300 transition">Testimoni</a>
        <a href="#" class="block py-2 hover:text-yellow-300 transition">Promo</a>
        <a href="#" class="block py-2 hover:text-yellow-300 transition">Panduan</a>
        <a href="#FAQ" class="block py-2 hover:text-yellow-300 transition">FAQ</a>
        <!-- Tombol Login dan Register untuk Mobile -->
        <a href="#" class="block bg-yellow-500 text-white px-4 py-2 rounded-lg mt-2 hover:bg-yellow-600 transition">Login</a>
        <a href="#" class="block bg-green-500 text-white px-4 py-2 rounded-lg mt-2 hover:bg-green-600 transition">Register</a>
    </div>
</nav>

<!-- Script untuk Toggle Menu Mobile -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

    <!-- Daftar Paket Soal -->
    <div class="container mx-auto p-8 pt-24">
        <h1 class="text-5xl font-extrabold text-center text-blue-900 mb-12 animate__animated animate__fadeIn">Daftar Paket Soal ASN</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
                // Data contoh, Anda bisa mengganti dengan data dari database
                $paket_soal = [
                    ["id" => 1, "nama" => "Paket Soal 1", "deskripsi" => "Paket soal untuk level 1 yang mencakup berbagai topik dasar.", "level" => "Level 1"],
                    ["id" => 2, "nama" => "Paket Soal 2", "deskripsi" => "Paket soal untuk level 2 dengan soal-soal menantang.", "level" => "Level 2"],
                    ["id" => 3, "nama" => "Paket Soal 3", "deskripsi" => "Paket soal untuk level 3 yang dirancang untuk para ahli.", "level" => "Level 3"]
                ];

                foreach ($paket_soal as $paket) {
                    echo "
                        <div class='bg-white p-6 rounded-lg shadow-2xl transform transition-transform duration-500 hover:scale-105 hover:shadow-lg hover:bg-blue-50'>
                            <div class='flex justify-between items-center'>
                                <h2 class='text-3xl font-semibold text-blue-600'>{$paket['nama']}</h2>
                                <span class='text-xs font-medium text-teal-600 bg-teal-200 rounded-full px-3 py-1'>{$paket['level']}</span>
                            </div>
                            <p class='text-gray-600 my-4'>{$paket['deskripsi']}</p>
                            <a href='detail.php?id={$paket['id']}' class='inline-block bg-blue-600 text-white px-8 py-3 rounded-lg transform transition duration-300 hover:bg-blue-700 hover:scale-105'>Lihat Detail</a>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
    <br>
    <br>
    <br>
     <!-- Footer -->
<footer class="bg-gradient-to-r from-gray-800 to-gray-900 py-12">
    <div class="container mx-auto px-4">
        <!-- Grid Layout untuk Footer -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <!-- Bagian Tentang Kami -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-white">Tentang Kami</h3>
                <p class="text-gray-400">Kami adalah platform edukasi yang berkomitmen untuk membantu siswa mencapai impian mereka melalui materi berkualitas dan tryout terbaik.</p>
            </div>

            <!-- Bagian Link Cepat -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-white">Link Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Beranda</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Tentang Kami</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Layanan</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Kontak</a></li>
                </ul>
            </div>

            <!-- Bagian Sosial Media -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-white">Ikuti Kami</h3>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.56v14.91c0 .97-.79 1.76-1.76 1.76H1.76C.79 21.23 0 20.44 0 19.47V4.56C0 3.59.79 2.8 1.76 2.8h20.48c.97 0 1.76.79 1.76 1.76zM9.6 18.24V9.6H7.2v8.64h2.4zm-1.2-9.84c.79 0 1.44-.65 1.44-1.44 0-.79-.65-1.44-1.44-1.44-.79 0-1.44.65-1.44 1.44 0 .79.65 1.44 1.44 1.44zm10.08 9.84v-4.8c0-2.56-.56-4.56-3.6-4.56-1.44 0-2.4.8-2.8 1.52h-.08v-1.28H9.6v8.64h2.4v-4.24c0-1.12.2-2.24 1.6-2.24 1.44 0 1.44 1.36 1.44 2.32v4.16h2.4z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.23 5.924c-.806.358-1.67.6-2.577.708a4.515 4.515 0 001.98-2.49 9.027 9.027 0 01-2.86 1.09 4.506 4.506 0 00-7.677 4.108 12.8 12.8 0 01-9.29-4.71 4.506 4.506 0 001.394 6.014 4.49 4.49 0 01-2.04-.563v.057a4.506 4.506 0 003.616 4.415 4.52 4.52 0 01-2.034.077 4.507 4.507 0 004.21 3.128 9.038 9.038 0 01-5.6 1.93c-.364 0-.724-.02-1.08-.063a12.75 12.75 0 006.92 2.03c8.3 0 12.84-6.88 12.84-12.84 0-.195-.004-.39-.013-.584a9.172 9.172 0 002.26-2.34z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.42 3.44 8.1 7.92 9.96v-7.04H7.84v-2.92h2.12V9.84c0-2.12 1.28-3.28 3.16-3.28.92 0 1.88.16 1.88.16v2.08h-1.06c-1.04 0-1.36.64-1.36 1.28v1.6h2.32l-.36 2.92h-1.96v7.04c4.48-1.86 7.92-5.54 7.92-9.96 0-5.5-4.46-9.96-9.96-9.96z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.42 3.44 8.1 7.92 9.96v-7.04H7.84v-2.92h2.12V9.84c0-2.12 1.28-3.28 3.16-3.28.92 0 1.88.16 1.88.16v2.08h-1.06c-1.04 0-1.36.64-1.36 1.28v1.6h2.32l-.36 2.92h-1.96v7.04c4.48-1.86 7.92-5.54 7.92-9.96 0-5.5-4.46-9.96-9.96-9.96z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Garis Pemisah -->
        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
            <p class="text-gray-400">&copy; 2025 Rivaldi KMM. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
<style>
        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>