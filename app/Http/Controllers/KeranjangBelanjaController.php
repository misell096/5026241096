<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        // mengambil data dari table keranjang belanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        // mengirim data keranjang belanja ke view index
        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // method untuk menampilkan view form tambah keranjang belanja
    public function tambah()
    {
        return view('keranjangbelanja.tambah');
    }

    // method untuk insert data ke table keranjang belanja
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjang belanja
        return redirect('/keranjangbelanja');
    }

    // method untuk hapus data keranjang belanja
	public function hapus($id)
	{
		// menghapus data keranjang belanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman keranjang belanja
		return redirect('/keranjangbelanja');
	}
}
