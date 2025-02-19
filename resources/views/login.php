<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login E-Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom CSS untuk gambar background */
        .background-image {
            background-image: url('path/to/your/image.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
        }

        /* Warna utama */
        .lms {
            background-color: #4F46E5; /* Warna ungu */
        }
        .text-lms {
            color: #4F46E5;
        }
        .hover\:text-lms:hover {
            color: #4F46E5;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Container Utama (Full Screen) -->
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Bagian Gambar (Kiri) -->
        <div class="background-image w-full md:w-1/2 min-h-[300px] md:min-h-screen" style="background-image: url('/static/Hero.jpg');"></div>

        <!-- Bagian Form Login (Kanan) -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <!-- Logo dan Teks Selamat Datang -->
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-lms">LMS</h1>
                    <p class="text-gray-600 mt-2">Selamat Datang</p>
                    <p class="text-gray-600">Kembali!</p>
                </div>

                <!-- Form Login -->
                <form action="login.php" method="POST">
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-lms" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-alfaiz" placeholder="Masukkan password" required>
                    </div>
                    <button type="submit" class="w-full lms text-white py-2 rounded-lg hover:bg-purple-700 transition duration-300">Masuk</button>
                </form>

                <!-- Lupa Password -->
                <div class="text-center mt-4">
                    <a href="#" class="text-alfaiz hover:text-purple-700 hover:underline">Lupa Password?</a>
                </div>

                <!-- Belum Punya Akun -->
                <div class="text-center mt-6">
                    <p class="text-gray-600">Belum Punya Akun? <a href="register" class="text-alfaiz hover:text-purple-700 hover:underline">Daftar Sekarang</a></p>
                </div>
               
                <!-- Footer -->
                <div class="text-center mt-8 text-sm text-gray-500">
                    <p>Tentang Kami | Syarat dan Ketentuan | Kebijakan Privasi</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>