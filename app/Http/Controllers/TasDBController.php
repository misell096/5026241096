<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TasDBController extends Controller
{
    // Menampilkan data tas
    public function index()
    {
        $tas = DB::table('tas')->paginate(10);
        return view('tas.index', ['tas' => $tas]);
    }

    // Pencarian tas berdasarkan merk
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $tas = DB::table('tas')
            ->where('merktas', 'like', "%" . $cari . "%")
            ->paginate();
        return view('tas.index', ['tas' => $tas]);
    }

    // Menampilkan form tambah
    public function tambah()
    {
        return view('tas.tambah');
    }

    // Simpan data tas
    public function store(Request $request)
    {
        DB::table('tas')->insert([
            'merktas' => $request->merktas,
            'stocktas' => $request->stocktas,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/tas');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $tas = DB::table('tas')
            ->where('kodetas', $id)
            ->get();

        return view('tas.edit', ['tas' => $tas]);
    }

    // Update data tas
    public function update(Request $request)
    {
        DB::table('tas')
            ->where('kodetas', $request->id)
            ->update([
                'merktas' => $request->merktas,
                'stocktas' => $request->stocktas,
                'tersedia' => $request->tersedia
            ]);
        return redirect('/tas');
    }

    // Hapus data tas
    public function hapus($id)
    {
        DB::table('tas')
            ->where('kodetas', $id)
            ->delete();
        return redirect('/tas');
    }
}
