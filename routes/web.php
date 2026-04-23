<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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
