<div class="flex h-screen">
    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-white shadow-md h-full transition-all duration-300 md:relative overflow-hidden">

        <!-- Sidebar Header -->
        <div class="p-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600 sidebar-title">Dashboard Admin</h1>
            <!-- Tombol Toggle (Desktop) -->
            <button id="toggleSidebarDesktop" class="text-gray-600 hidden md:inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Menu Sidebar -->
        <nav class="mt-6 space-y-1">
            <a href="../dashboard/index.php"
                class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-blue-100 <?= $currentPage == 'index.php' ? 'bg-blue-100 font-semibold' : '' ?>">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12h18M3 6h18M3 18h18" />
                </svg>
                <span class="menu-label">Beranda</span>
            </a>

            <a href="../dashboard/products.php"
                class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-blue-100 <?= $currentPage == 'products.php' ? 'bg-blue-100 font-semibold' : '' ?>">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0l-8 8m0 0l-8-8m8 8V8" />
                </svg>
                <span class="menu-label">Produk</span>
            </a>

            <a href="../dashboard/about.php"
                class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-blue-100 <?= $currentPage == 'about.php' ? 'bg-blue-100 font-semibold' : '' ?>">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
                <span class="menu-label">Tentang</span>
            </a>

            <a href="../dashboard/contact.php"
                class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-blue-100 <?= $currentPage == 'contact.php' ? 'bg-blue-100 font-semibold' : '' ?>">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 12a4 4 0 01-8 0m4 4v4m0-4a4 4 0 100-8 4 4 0 000 8z" />
                </svg>
                <span class="menu-label">Kontak</span>
            </a>

            <form method="POST" action="../logout.php" class="mt-4">
                <button type="submit"
                    class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
                    Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md p-4 flex items-center justify-between md:justify-end">
            <!-- Tombol toggle (Mobile) -->
            <button id="toggleSidebar" class="md:hidden text-gray-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </header>

        <!-- Konten -->
        <main class="flex-1 p-6">