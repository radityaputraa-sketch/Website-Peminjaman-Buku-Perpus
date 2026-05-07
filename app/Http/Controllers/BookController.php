<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('user.peminjaman', compact('books'));
    }

    public function store(Request $request)
    {
        Book::create($request->all());

        return redirect()->back();
    }
}