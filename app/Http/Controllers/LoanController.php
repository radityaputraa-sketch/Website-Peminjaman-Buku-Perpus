<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function pinjam($id)
    {
        $book = Book::findOrFail($id);

        if ($book->stok <= 0) {
            return back()->with('error', 'Stok habis');
        }

        Loan::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id,
            'tanggal_pinjam' => now(),
            'status' => 'dipinjam'
        ]);

        $book->decrement('stok');

        return back()->with('success', 'Buku berhasil dipinjam');
    }

    public function kembalikan($id)
    {
        $loan = Loan::findOrFail($id);

        $loan->update([
            'status' => 'dikembalikan',
            'tanggal_kembali' => now()
        ]);

        $loan->book->increment('stok');

        return back();
    }
}