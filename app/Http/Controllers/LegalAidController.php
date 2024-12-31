<?php

namespace App\Http\Controllers;

use App\Models\LegalAidRequest;
use Illuminate\Http\Request;

class LegalAidController extends Controller
{
    public function create()
    {
        return view('legal-aid'); // Menampilkan form
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);

        LegalAidRequest::create($request->all());

        return redirect()->route('legal-aid.create')->with('success', 'Pengajuan bantuan hukum berhasil dikirim!');
    }

    public function index()
    {
        $requests = LegalAidRequest::orderBy('created_at', 'desc')->get();

        return view('list-pengajuan', compact('requests')); // Menampilkan daftar pengajuan
    }

    public function show($id)
    {
        $request = LegalAidRequest::findOrFail($id);

        return view('detail-pengajuan', compact('request'));
    }
}

