@extends('template')
@section('title', 'View Data My Pegawai')
@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>
    <div class="card">
        <div class="card-header">
            Detail Data My Pegawai
        </div>
        <div class="card-body">
            @foreach($pegawai as $p)
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $p->kodepegawai }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $p->namalengkap }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $p->divisi }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $p->departemen }}" readonly>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
