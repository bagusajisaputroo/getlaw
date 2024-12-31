<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lembaga;
use App\Models\News;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index()
    {
        $news = News::with('category')->take(3)->get();
        $lembaga = Lembaga::with('category')->take(10)->get();

        return view('home', compact('news', 'lembaga'));
    }

    public function getAllNews()
    {
        $news = News::latest()->first(); // Berita utama
        $categories = Category::with('news')->get(); // Kategori dan berita terkait
        $newsList = News::latest()->skip(1)->take(8)->get(); // Berita lain, selain berita utama

        return view('news', compact('news', 'categories', 'newsList'));
    }

    public function getallcat(Request $request)
{
    $categories = Category::with('news')->get();
    $newsByCategory = [];

    foreach ($categories as $category) {
        $page = $request->query('page_' . $category->id, 1); // Tangkap halaman khusus kategori
        $newsByCategory[$category->id] = $category->news()->paginate(4, ['*'], 'page_' . $category->id)->withQueryString();
    }

    return view('news', compact('newsByCategory'));
}

    public function show($id)
    {
        $news = News::with('category')->findOrFail($id); // Mengambil berita berdasarkan ID
        return view('news-detail', compact('news'));
    }

    // Tambahkan metode store untuk menyimpan berita
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|string|in:success,pending,failed',
        ]);

        // Simpan gambar ke folder 'news'
        $path = $request->file('gambar')->store('news', 'public');

        // Simpan data ke database
        News::create([
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'gambar' => $path, // Tetap simpan path lengkap sementara
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}