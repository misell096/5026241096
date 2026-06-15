<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyPegawaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table mypegawai
        $mypegawai = DB::table('mypegawai')->get();
        // mengirim data mypegawai ke view index
        return view('mypegawai.index', ['mypegawai' => $mypegawai]);
    }

    public function tambah()
    {
        return view('mypegawai.tambah');
    }

    // method untuk menambah data pegawai
    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|string|max:9|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'string|max:5',
            'departemen' => 'string|max:10',
        ]);

        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('mypegawai.index')->with('success', 'Data My Pegawai berhasil ditambahkan.');
    }


    // method untuk view data mypegawai
	public function view($id)
    {
    $pegawai = DB::table('mypegawai')->where('kodepegawai', $id)->get();

    return view('mypegawai.view', ['pegawai' => $pegawai]);
    }
}


