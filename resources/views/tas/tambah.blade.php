@extends('template')
@section('title', 'Data Tas')

@section('konten')
    <a href="/tas" class="btn btn-secondary mb-4">Kembali</a>
    <div class="card">
        <div class="card-header">
            Form Tambah Data Tas
        </div>
        <div class="card-body">
            <form action="/tas/store" method="post">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <label for="merktas" class="col-sm-2 col-form-label">Merk Tas</label>
                    <div class="col-sm-10">
                        <input type="text" name="merktas" id="merktas" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="stocktas" class="col-sm-2 col-form-label">Stock Tas</label>
                    <div class="col-sm-10">
                        <input type="number" name="stocktas" id="stocktas" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-select">
                            <option value="Y">Y</option>
                            <option value="N">N</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
