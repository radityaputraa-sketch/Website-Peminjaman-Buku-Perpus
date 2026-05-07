<?php 
$role = 'user'; 
$page_title = 'Peminjaman Buku';
include 'components/header.php'; 

// Mock Data Buku sesuai request gambar (Nanti diganti sama data dari database oleh Backend)
$mock_books = [
    [
        'judul' => 'Morfologi: Kajian Proses Pembentukan Kata',
        'jenis' => 'Pendidikan',
        'tersedia' => true,
        'penulis' => 'Prof. Dr. Drs. I Wayan Simpen, M.Hum.',
        'tahun' => '2021',
        'sinopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare quis purus ac auctor. Integer non est quis quam commodo faucibus at sed ante. Mauris dolor nibh, pretium eget justo eu, tincidunt mollis magna. Aliquam vitae commodo arcu, non tincidunt turpis. Nunc scelerisque odio quis ornare scelerisque. Ut vitae gravida neque, sit amet porttitor libero.',
        'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpqwE7LM0bXF52IAC65Oo1anLQVAcuvXeq2A&s' // Placeholder Gambar
    ],
    [
        'judul' => 'Atomic Habits',
        'jenis' => 'Pengembangan Diri',
        'tersedia' => false,
        'penulis' => 'James Clear',
        'tahun' => '2018',
        'sinopsis' => 'Perubahan kecil yang memberikan hasil luar biasa. Buku ini membahas bagaimana kebiasaan kecil sehari-hari dapat mengubah hidup Anda secara signifikan melalui sistem yang terbukti dan mudah diterapkan dalam kehidupan sehari-hari.',
        'cover' => 'https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg'
    ]
];
?>

<div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4 border-b border-gray-200 pb-4">
    <p class="text-gray-500 font-bold">Pilih buku yang ingin kamu pinjam hari ini.</p>
    <div class="relative w-full md:w-80">
        <input type="text" placeholder="Cari judul buku..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none shadow-sm transition-all">
    </div>
</div>

<div class="space-y-8">
    <?php foreach($mock_books as $buku): ?>
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 flex flex-col md:flex-row gap-8 hover:shadow-lg transition-shadow duration-300">
        
        <div class="w-full md:w-48 shrink-0 flex justify-center md:justify-start">
            <img src="<?= $buku['cover'] ?>" alt="Cover <?= $buku['judul'] ?>" class="w-48 h-auto object-cover rounded-lg shadow-md border border-gray-100">
        </div>

        <div class="flex-1 flex flex-col justify-start">
            <h3 class="text-3xl font-extrabold text-gray-900 mb-2"><?= $buku['judul'] ?></h3>
            
            <div class="text-lg text-gray-800 mb-1">
                <span><?= $buku['jenis'] ?></span> 
                <span class="font-bold <?= $buku['tersedia'] ? 'text-green-600' : 'text-red-600' ?> ml-1">
                    <?= $buku['tersedia'] ? 'Tersedia' : 'Tidak Tersedia' ?>
                </span>
            </div>
            
            <div class="text-lg text-gray-800 font-bold mb-4">
                <?= $buku['penulis'] ?> <span class="font-normal text-gray-600 ml-1"><?= $buku['tahun'] ?></span>
            </div>
            
            <p class="text-gray-600 leading-relaxed text-justify mb-6">
                <?= $buku['sinopsis'] ?>
            </p>

            <div class="mt-auto">
                <?php if($buku['tersedia']): ?>
                    <button onclick="alert('Berhasil dipinjam!')" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-lg shadow-md transition-all inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        Pinjam Buku Ini
                    </button>
                <?php else: ?>
                    <button disabled class="bg-gray-200 text-gray-400 font-bold py-3 px-8 rounded-lg cursor-not-allowed border border-gray-300">
                        Maaf, Sedang Kosong
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include 'components/footer.php'; ?>