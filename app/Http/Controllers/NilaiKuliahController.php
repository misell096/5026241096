<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilai kuliah
        $nilaikuliah = DB::table('nilaikuliah')->get();
        // mengirim data nilai kuliah ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah nilai kuliah
    public function tambah()
    {
        return view('nilaikuliah.tambah');
    }

    // method untuk insert data ke table nilai kuliah
    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'nrp' => $request->NRP,
            'nilaiangka' => $request->NilaiAngka,
            'sks' => $request->SKS
        ]);
        // alihkan halaman ke halaman nilai kuliah
        return redirect('/nilaikuliah');
    }
}
