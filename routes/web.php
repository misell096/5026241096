<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TasDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com/b>";
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/biodata', [DosenController::class, 'biodata']);

Route::get('/pertemuan1', function () {
	return view('intro');
});

Route::get('/pertemuan2', function () {
	return view('robodog');
});

Route::get('/pertemuan3', function () {
	return view('responsive');
});

Route::get('/tugaspertemuan3', function () {
	return view('beritamudik');
});

Route::get('/pertemuan4', function () {
	return view('grid');
});

Route::get('/pertemuan5', function () {
	return view('arsha');
});

Route::get('/tugaspertemuan5', function () {
	return view('linktree');
});

Route::get('/menu', function () {
    return view('menu');
});

// route CRUD pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// route CRUD tas
Route::get('/tas', [TasDBController::class, 'index']);
Route::get('/tas/tambah', [TasDBController::class, 'tambah']);
Route::post('/tas/store', [TasDBController::class, 'store']);
Route::get('/tas/edit/{id}', [TasDBController::class, 'edit']);
Route::post('/tas/update', [TasDBController::class, 'update']);
Route::get('/tas/hapus/{id}', [TasDBController::class, 'hapus']);
Route::get('/tas/cari', [TasDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD nilai kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);

//route CRUD keranjang belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaController::class, 'hapus']);
