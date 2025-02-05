<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register E-Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('path/to/your/image.jpg');
            background-size: cover;
            background-position: center;
        }
        .lms {
            background-color: #4F46E5;
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
    <div class="min-h-screen flex flex-col md:flex-row">
        <div class="background-image w-full md:w-1/2 min-h-[300px] md:min-h-screen" style="background-image: url('/static/Hero.jpg');"></div>
        <div class="w-full md:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-lms">LMS</h1>
                    <p class="text-gray-600 mt-2">Buat Akun Baru</p>
                </div>
                <form action="register.php" method="POST">
                    <div class="mb-4">
                        <label for="fullname" class="block text-gray-700">Nama Lengkap</label>
                        <input type="text" id="fullname" name="fullname" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-lms" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-lms" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-lms" placeholder="Masukkan password" required>
                    </div>
                    <div class="mb-6">
                        <label for="confirm_password" class="block text-gray-700">Konfirmasi Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-lms" placeholder="Masukkan kembali password" required>
                    </div>
                    <button type="submit" class="w-full lms text-white py-2 rounded-lg hover:bg-purple-700 transition duration-300">Daftar</button>
                </form>
                <div class="text-center mt-6">
                    <p class="text-gray-600">Sudah Punya Akun? <a href="login.php" class="text-lms hover:underline">Masuk</a></p>
                </div>
                <div class="text-center mt-8 text-sm text-gray-500">
                    <p>Tentang Kami | Syarat dan Ketentuan | Kebijakan Privasi</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
