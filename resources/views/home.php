<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rivaldi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        fadeIn: "fadeIn 1.5s ease-in-out",
                        slideIn: "slideIn 1s ease-in-out",
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideIn: {
                            '0%': { transform: 'translateY(-50px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
</head>

<!-- Navbar -->
<body class="bg-gray-100">
   <!-- Navbar Responsif dengan Login dan Register -->
<nav class="bg-gradient-to-r from-blue-500 to-indigo-600 p-4 text-white shadow-lg fixed w-full z-50 top-0">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <h1 class="text-xl font-extrabold tracking-widest">Privat Al Faiz</h1>

        <!-- Tombol Hamburger untuk Mobile -->
        <button id="menu-toggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Menu Navigasi -->
        <div class="hidden md:flex space-x-6 items-center" id="menu">
            <a href="#" class="hover:text-yellow-300 transition">Beranda</a>
            <a href="#" class="hover:text-yellow-300 transition">Paket Belajar</a>
            <a href="#" class="hover:text-yellow-300 transition">Keunggulan</a>
            <a href="#" class="hover:text-yellow-300 transition">Testimoni</a>
            <a href="#" class="hover:text-yellow-300 transition">Promo</a>
            <a href="#" class="hover:text-yellow-300 transition">Panduan</a>
            <a href="#" class="hover:text-yellow-300 transition">FAQ</a>
            <!-- Tombol Login dan Register -->
            <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">Login</a>
            <a href="#" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">Register</a>
        </div>
    </div>

    <!-- Menu Mobile (Dropdown) -->
    <div class="md:hidden hidden mt-4" id="mobile-menu">
        <a href="#" class="block py-2 hover:text-yellow-300 transition">Beranda</a>
        <a href="#" class="block py-2 hover:text-yellow-300 transition">Paket Belajar</a>
        <a href="#" class="block py-2 hover:text-yellow-300 transition">Keunggulan</a>
        <a href="#" class="block py-2 hover:text-yellow-300 transition">Testimoni</a>
        <a href="#" class="block py-2 hover:text-yellow-300 transition">Promo</a>
        <a href="#" class="block py-2 hover:text-yellow-300 transition">Panduan</a>
        <a href="#" class="block py-2 hover:text-yellow-300 transition">FAQ</a>
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

    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('/static/Hero.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center text-white z-10 text-center fade-in">
            <div>
                <h2 class="text-5xl font-bold mb-4">Belajar Bareng Super Teacher</h2>
                <p class="text-xl mb-6">Jadikan belajarmu lebih menyenangkan dan efektif!</p>
                <a href="#daftar"
                    class="bg-yellow-500 text-white py-3 px-6 rounded-lg text-lg font-semibold shadow-md hover:bg-yellow-600 transition">Daftar
                    Sekarang</a>
            </div>
        </div>
    </section>


    <!-- Paket Belajar -->
    <section class="container mx-auto mt-16 p-6">
        <h3 class="text-3xl font-bold text-center text-gray-800 animate-fadeIn">Paket Belajar</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div
                class="bg-white p-8 shadow-lg rounded-lg text-center border-t-4 border-blue-500 transform hover:scale-105 transition">
                <h4 class="text-2xl font-bold">Paket Basic</h4>
                <p class="mt-3 text-gray-600">Mulai dari dasar hingga memahami konsep utama.</p>
                <button
                    class="mt-5 bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition">Pilih</button>
            </div>
            <div
                class="bg-white p-8 shadow-lg rounded-lg text-center border-t-4 border-green-500 transform hover:scale-105 transition">
                <h4 class="text-2xl font-bold">Paket Pro</h4>
                <p class="mt-3 text-gray-600">Pendalaman materi dengan tutor berpengalaman.</p>
                <button
                    class="mt-5 bg-green-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition">Pilih</button>
            </div>
            <div
                class="bg-white p-8 shadow-lg rounded-lg text-center border-t-4 border-yellow-500 transform hover:scale-105 transition">
                <h4 class="text-2xl font-bold">Paket Premium</h4>
                <p class="mt-3 text-gray-600">Eksklusif dengan materi lanjutan dan sesi privat.</p>
                <button
                    class="mt-5 bg-yellow-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-yellow-600 transition">Pilih</button>
            </div>
        </div>
    </section>

   <!-- Keunggulan -->
<section class="py-16 bg-gradient-to-r from-blue-50 to-blue-100">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-6 animate-fadeIn">Keunggulan Kami</h2>
        <p class="text-xl text-gray-600 mb-10">Mengapa memilih Privat Al Faiz?</p>
        <ul class="space-y-4 text-lg text-gray-700">
            <!-- List Item 1 -->
            <li class="flex items-center justify-center space-x-4 transform transition duration-500 hover:scale-105 hover:shadow-lg p-6 rounded-lg shadow-md hover:bg-blue-100 animate-slideIn">
                <span class="inline-block text-blue-500 text-2xl">✔</span>
                <span>Paket belajar yang fleksibel</span>
            </li>
            <!-- List Item 2 -->
            <li class="flex items-center justify-center space-x-4 transform transition duration-500 hover:scale-105 hover:shadow-lg p-6 rounded-lg shadow-md hover:bg-blue-100 animate-slideIn">
                <span class="inline-block text-blue-500 text-2xl">✔</span>
                <span>Pengajaran oleh tutor berpengalaman</span>
            </li>
            <!-- List Item 3 -->
            <li class="flex items-center justify-center space-x-4 transform transition duration-500 hover:scale-105 hover:shadow-lg p-6 rounded-lg shadow-md hover:bg-blue-100 animate-slideIn">
                <span class="inline-block text-blue-500 text-2xl">✔</span>
                <span>Materi yang selalu update</span>
            </li>
            <!-- List Item 4 -->
            <li class="flex items-center justify-center space-x-4 transform transition duration-500 hover:scale-105 hover:shadow-lg p-6 rounded-lg shadow-md hover:bg-blue-100 animate-slideIn">
                <span class="inline-block text-blue-500 text-2xl">✔</span>
                <span>Try out berkualitas tinggi</span>
            </li>
        </ul>
    </div>
</section>


<!-- Testimoni -->
<!-- Testimoni -->
<!-- Testimoni -->
<section class="py-16 bg-gradient-to-r from-blue-50 to-indigo-100">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-10 animate-fadeIn">Testimoni Siswa</h2>
        <div class="relative overflow-hidden">
            <!-- Container Testimoni -->
            <div class="flex transition-all duration-500" id="testimonial-container">
                <!-- Testimoni 1 -->
                <div class="flex flex-col items-center justify-center bg-white p-8 rounded-xl shadow-xl w-96 mx-6 flex-shrink-0">
                    <img src="static/testi1.jpeg" alt="Ismi Maulfi Rahma" class="w-32 h-32 rounded-full object-cover mb-6">
                    <blockquote>
                        <p class="text-gray-700 text-xl italic">"Makasih banyak Kak Faiz, video dan tryout dari Privat Al Faiz bantu banget!"</p>
                    </blockquote>
                    <footer class="mt-6 text-gray-600 font-semibold text-lg">- Rifqy Rivaldi, UNS</footer>
                </div>
                <!-- Testimoni 2 -->
                <div class="flex flex-col items-center justify-center bg-white p-8 rounded-xl shadow-xl w-96 mx-6 flex-shrink-0">
                    <img src="static/Hero.jpg" alt="Zalsa Archyta" class="w-32 h-32 rounded-full object-cover mb-6">
                    <blockquote>
                        <p class="text-gray-700 text-xl italic">"Alhamdulillah berkat Privat Al Faiz aku bisa masuk ke PTN yang aku impikan!"</p>
                    </blockquote>
                    <footer class="mt-6 text-gray-600 font-semibold text-lg">- Angga Yudho, Universitas Hasanuddin</footer>
                </div>
                <!-- Testimoni 3 -->
                <div class="flex flex-col items-center justify-center bg-white p-8 rounded-xl shadow-xl w-96 mx-6 flex-shrink-0">
                    <img src="static/Hero.jpg" alt="Rahma Bintang" class="w-32 h-32 rounded-full object-cover mb-6">
                    <blockquote>
                        <p class="text-gray-700 text-xl italic">"Belajar bersama Privat Al Faiz sangat menyenangkan dan banyak membantu persiapan ujian saya!"</p>
                    </blockquote>
                    <footer class="mt-6 text-gray-600 font-semibold text-lg">- Rahma Bintang, UNY</footer>
                </div>
                <!-- Testimoni 4 -->
                <div class="flex flex-col items-center justify-center bg-white p-8 rounded-xl shadow-xl w-96 mx-6 flex-shrink-0">
                    <img src="static/Hero.jpg" alt="Fajar Setiawan" class="w-32 h-32 rounded-full object-cover mb-6">
                    <blockquote>
                        <p class="text-gray-700 text-xl italic">"Tryout yang diberikan sangat berkualitas, saya berhasil masuk ke jurusan impian!"</p>
                    </blockquote>
                    <footer class="mt-6 text-gray-600 font-semibold text-lg">- Fajar Setiawan, Universitas Diponegoro</footer>
                </div>
            </div>
        </div>
</section>

<!-- JavaScript untuk animasi geser otomatis dan looping -->
<script>
    const testimonialContainer = document.getElementById('testimonial-container');
    const testimonials = document.querySelectorAll('#testimonial-container > div');
    const totalTestimonials = testimonials.length;
    let currentIndex = 0;

    // Fungsi untuk menggeser testimonial
    function updateTestimonialPosition() {
        const offset = -currentIndex * (testimonials[0].offsetWidth + 48); // 48 adalah total margin (24px pada setiap sisi)
        testimonialContainer.style.transform = `translateX(${offset}px)`;
    }

    // Fungsi untuk geser otomatis setiap 3 detik
    function autoScroll() {
        setInterval(() => {
            if (currentIndex === totalTestimonials - 3) {  // Jika sudah di testimonial terakhir (2 terakhir)
                currentIndex = 0; // Kembali ke testimonial pertama
            } else {
                currentIndex++;
            }
            updateTestimonialPosition();
        }, 3000); // Setiap 3 detik
    }

    // Set posisi awal
    updateTestimonialPosition();

    // Mulai auto scroll
    autoScroll();
</script>


<!-- Frequently Asked Questions (FAQ) -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Frequently Asked Questions</h2>
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-wrap gap-6">
                <!-- FAQ Item 1 -->
                <div class="flex-1 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <details class="group faq-item">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <h3 class="text-lg font-semibold text-gray-700">Apa bedanya TO Fulltest dan Persubtes + Bundling?</h3>
                            <span class="text-gray-500 group-open:rotate-180 transform transition-transform duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-600">Kalau fulltest, pengerjaan TO-nya harus selesai semua dalam waktu 195 menit. Jika persubtest, bisa dikerjakan tiap subtestnya secara terpisah.</p>
                    </details>
                </div>

                <!-- FAQ Item 2 -->
                <div class="flex-1 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <details class="group faq-item">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <h3 class="text-lg font-semibold text-gray-700">Apa beda rekaman kelas dengan kelas online?</h3>
                            <span class="text-gray-500 group-open:rotate-180 transform transition-transform duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-600">Kelas online diadakan secara langsung, sedangkan rekaman kelas tidak ada live class-nya.</p>
                    </details>
                </div>
            </div>

            <!-- FAQ Item 3 dan 4 -->
            <div class="flex flex-wrap gap-6 mt-6">
                <!-- FAQ Item 3 -->
                <div class="flex-1 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <details class="group faq-item">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <h3 class="text-lg font-semibold text-gray-700">Apakah ada garansi jika tidak lulus?</h3>
                            <span class="text-gray-500 group-open:rotate-180 transform transition-transform duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-600">Kami memberikan garansi berupa akses ulang ke materi dan tryout jika peserta tidak lulus.</p>
                    </details>
                </div>

                <!-- FAQ Item 4 -->
                <div class="flex-1 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <details class="group faq-item">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <h3 class="text-lg font-semibold text-gray-700">Bagaimana cara mengakses rekaman kelas?</h3>
                            <span class="text-gray-500 group-open:rotate-180 transform transition-transform duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-600">Rekaman kelas dapat diakses melalui dashboard peserta setelah kelas selesai.</p>
                    </details>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // JavaScript untuk mengatur agar hanya satu FAQ yang terbuka
    document.querySelectorAll('.faq-item details').forEach((details) => {
        details.addEventListener('toggle', () => {
            if (details.open) {
                // Jika yang dibuka, tutup yang lainnya
                document.querySelectorAll('.faq-item details').forEach((otherDetails) => {
                    if (otherDetails !== details) {
                        otherDetails.removeAttribute('open');
                    }
                });
            }
        });
    });
</script>

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