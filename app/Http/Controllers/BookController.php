<?php

namespace App\Http\Controllers;

use App\Models\Book; // Memanggil model buku
use Illuminate\Http\Request;

class BookController extends Controller
{
    // 1. Fungsi untuk Dashboard
    public function dashboard()
    {
        // Menghitung jumlah semua buku yang ada di database
        $totalJudul = Book::count();
        
        // Menghitung buku yang stoknya di atas 0
        $bukuTersedia = Book::where('stok', '>', 0)->count();

        // Mengirim data ke halaman dashboard
        return view('admin_dashboard', compact('totalJudul', 'bukuTersedia'));
    }

    // 2. Fungsi untuk List Buku
    public function index()
    {
        // Mengambil data buku dan memisahkan yang tersedia/kosong
        $booksTersedia = Book::where('stok', '>', 0)->get();
        $booksKosong = Book::where('stok', '<=', 0)->get();

        return view('admin_buku', [
            'tersedia' => $booksTersedia,
            'kosong' => $booksKosong
        ]);
    }

    // 3. Fungsi Simpan Buku Baru
    public function store(Request $request)
    {
        // Validasi agar data yang masuk benar
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tema' => 'required',
        ]);

        // Perintah simpan ke database
        Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tema' => $request->tema,
            'stok' => 1, // Default stok awal
        ]);

        return redirect()->route('admin.buku')->with('success', 'Buku baru berhasil dicatat!');
    }
}