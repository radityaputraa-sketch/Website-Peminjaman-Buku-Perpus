<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    
    // Jika input username adalah 'admin', arahkan ke dashboard admin
    if (strtolower($username) === 'admin') {
        header("Location: admin_dashboard.php");
        exit;
    } 
    // Jika input username selain 'admin' (dan tidak kosong), arahkan ke dashboard user
    else if (!empty($username)) {
        header("Location: user_dashboard.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="bg-gradient-to-br from-indigo-500 to-purple-600 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-2">Login Perpus</h2>
            <p class="text-gray-500 text-sm">Silakan masuk ke akun Anda</p>
            <p class="text-xs text-indigo-500 mt-2 font-semibold bg-indigo-50 py-1 rounded"></p>
        </div>
        
        <form action="" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Username / Email</label>
                <input type="text" name="username" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition-all" placeholder="Masukkan username...">
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Password</label>
                <input type="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition-all" placeholder="••••••••">
            </div>
            
            <button type="submit" class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg transition-all shadow-lg hover:shadow-xl">
                Login Sekarang
            </button>
        </form>
    </div>
</body>
</html>
