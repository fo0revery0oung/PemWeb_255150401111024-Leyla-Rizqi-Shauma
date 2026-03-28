<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan halaman + data mahasiswa
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa', compact('data'));
    }

    // Menyimpan data mahasiswa dari form
    public function store(Request $request)
    {
        // Simpan data
        Mahasiswa::create($request->all());

        // Redirect kembali ke halaman utama
        return redirect('/');
    }
}