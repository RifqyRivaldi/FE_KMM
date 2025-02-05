<aside class="bg-gradient-to-b from-blue-700 to-purple-700 text-white w-64 min-h-screen p-4 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out fixed md:relative z-50" id="sidebar">
    <div class="text-2xl font-semibold mb-6 flex justify-between items-center">
        <span>Menu</span>
        <button class="md:hidden text-white" onclick="toggleSidebar()">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <nav>
        <ul class="space-y-2">
            <li>
                <a href="#" class="block p-2 hover:bg-blue-600 rounded transition duration-200">
                    <i class="fas fa-home mr-2"></i>Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="block p-2 hover:bg-blue-600 rounded transition duration-200">
                    <i class="fas fa-users mr-2"></i>Users
                </a>
            </li>
            <li>
                <a href="#" class="block p-2 hover:bg-blue-600 rounded transition duration-200">
                    <i class="fas fa-box mr-2"></i>Products
                </a>
            </li>
            <li>
                <a href="#" class="block p-2 hover:bg-blue-600 rounded transition duration-200">
                    <i class="fas fa-cog mr-2"></i>Settings
                </a>
            </li>
        </ul>
    </nav>
</aside>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    }
</script>