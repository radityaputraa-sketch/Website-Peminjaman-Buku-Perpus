<?php 
$role = 'admin'; 
$page_title = 'Keseluruhan User';
include 'components/header.php'; 
?>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden overflow-x-auto">
    <table class="w-full text-left min-w-max">
        <thead class="bg-gray-50 border-b border-gray-200 text-gray-600 text-sm uppercase">
            <tr>
                <th class="p-4">Nama Pengguna</th>
                <th class="p-4">Data Pribadi (Email)</th>
                <th class="p-4">Buku Yang Sedang Dipinjam</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <tr class="hover:bg-gray-50">
                <td class="p-4 font-bold text-gray-800">Andi Saputra</td>
                <td class="p-4 text-gray-600">andi@student.undip.ac.id</td>
                <td class="p-4 text-indigo-600 font-medium">1. Laskar Pelangi <br> 2. Kalkulus Dasar</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="p-4 font-bold text-gray-800">Siti Aminah</td>
                <td class="p-4 text-gray-600">siti.a@gmail.com</td>
                <td class="p-4 text-gray-400 italic">Tidak ada pinjaman</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'components/footer.php'; ?>