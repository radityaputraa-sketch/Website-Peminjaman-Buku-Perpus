<?php 
$role = 'user'; 
$page_title = 'Form Pengembalian Buku';
include 'components/header.php'; 
?>

<div class="max-w-3xl mx-auto mt-6">
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
        <div class="mb-8 border-b border-gray-100 pb-6">
            <h2 class="text-2xl font-extrabold text-gray-800 mb-2">Form Pengembalian Buku</h2>
            <p class="text-gray-500">Silakan isi form di bawah ini dengan lengkap untuk mendata buku yang akan Anda kembalikan ke perpustakaan.</p>
        </div>

        <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Data Pengembalian Berhasil Dikirim!'); window.location.href='user_dashboard.php';" class="space-y-6">
            
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Judul Buku yang Dikembalikan</label>
                <input type="text" name="judul_buku" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition-all" placeholder="Masukkan judul buku yang Anda pinjam...">
                <p class="text-xs text-gray-400 mt-1">*Pastikan judul sesuai dengan buku fisik yang Anda bawa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Tanggal Pengembalian</label>
                    <input type="date" name="tanggal_kembali" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Jam Pengembalian</label>
                    <input type="time" name="jam_kembali" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Keterangan Kondisi Buku (Opsional)</label>
                <textarea name="keterangan" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition-all" placeholder="Misal: Halaman lengkap, tidak ada yang robek..."></textarea>
            </div>

            <div class="pt-6 mt-6 border-t border-gray-100 flex justify-end">
                <button type="submit" class="w-full md:w-auto px-8 py-3 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-700 shadow-md transition-all">
                    Kirim Data Pengembalian
                </button>
            </div>
            
        </form>
    </div>
</div>

<?php include 'components/footer.php'; ?>