<?php 
$role = 'admin'; 
$page_title = 'Tambah Buku Baru';
include 'components/header.php'; 
?>

<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 max-w-2xl">
    <form action="admin_buku.php" method="POST" class="space-y-6">
        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2">Judul Buku</label>
            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 outline-none" placeholder="Masukkan judul...">
        </div>
        
        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2">Penulis</label>
            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 outline-none" placeholder="Masukkan nama penulis...">
        </div>
        
        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2">Tema Buku</label>
            <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 outline-none bg-white">
                <option value="" disabled selected>Pilih Tema...</option>
                <option value="Fiksi">Fiksi / Novel</option>
                <option value="Teknologi">Teknologi & Sains</option>
                <option value="Sejarah">Sejarah</option>
                <option value="Self Improvement">Pengembangan Diri</option>
            </select>
        </div>
        
        <div class="pt-4 flex justify-end gap-3">
            <a href="admin_buku.php" class="px-6 py-3 bg-gray-200 text-gray-700 font-bold rounded-lg hover:bg-gray-300 transition">Batal</a>
            <button type="submit" class="px-6 py-3 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 shadow-md transition">
                Simpan Ke Database
            </button>
        </div>
    </form>
</div>

<?php include 'components/footer.php'; ?>