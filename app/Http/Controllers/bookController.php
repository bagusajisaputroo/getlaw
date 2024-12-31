<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index(Request $request) {
        $query = Books::with('category'); // Mengambil data buku dengan relasi kategori
    
        // Cek apakah ada parameter pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('Nama_buku', 'like', '%' . $search . '%'); // Menyesuaikan dengan kolom yang ada
        }
    
        // Ambil buku dengan paginasi
        $books = $query->paginate(12);
    
        return view('book', compact('books')); // Ganti 'book' dengan view yang sesuai
    }
}
