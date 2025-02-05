<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-xl font-semibold text-white">
                <i class="fas fa-tachometer-alt mr-2"></i>Admin Dashboard
            </div>
            <div class="flex items-center space-x-6">
                <button class="text-white hover:text-gray-200 relative">
                    <i class="fas fa-bell text-xl"></i>
                    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs px-1 rounded-full">3</span>
                </button>
                <div class="relative group">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full cursor-pointer border-2 border-white">
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100"><i class="fas fa-user mr-2"></i>Profile</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100"><i class="fas fa-cog mr-2"></i>Settings</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>