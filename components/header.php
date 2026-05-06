<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'Perpus App' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="flex h-screen overflow-hidden bg-gray-50 text-gray-800">

    <aside id="sidebar" class="bg-white w-64 border-r border-gray-200 absolute inset-y-0 left-0 transform -translate-x-full transition-transform duration-300 z-30 md:relative md:translate-x-0 overflow-y-auto">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-indigo-600 mb-8 flex items-center gap-2">
                📚 PerpusKu
            </h1>
            <nav class="space-y-2">
                <?php if($role === 'user'): ?>
                    <a href="user_dashboard.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600 font-medium transition">🏠 Dashboard</a>
                    <a href="user_peminjaman.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600 font-medium transition">📖 Peminjaman Buku</a>
                    <a href="user_pengembalian.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600 font-medium transition">↩️ Pengembalian Buku</a>
                <?php elseif($role === 'admin'): ?>
                    <a href="admin_dashboard.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600 font-medium transition">📈 Dashboard Admin</a>
                    <a href="admin_users.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600 font-medium transition">👥 Keseluruhan User</a>
                    <a href="admin_buku.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-600 font-medium transition">📚 Manajemen Buku</a>
                <?php endif; ?>
            </nav>
        </div>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden relative">
        
        <header class="bg-white shadow-sm px-6 py-4 flex items-center justify-between z-20">
            <div class="flex items-center gap-4">
                <button id="hamburger" class="text-gray-500 hover:text-indigo-600 focus:outline-none md:hidden">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <h2 class="text-xl font-bold text-gray-800"><?= $page_title ?? 'Dashboard' ?></h2>
            </div>
            <div>
                <a href="login.php" class="text-sm font-semibold text-red-500 hover:text-red-700 bg-red-50 px-4 py-2 rounded-lg">Logout</a>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-6">
            <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden md:hidden"></div>