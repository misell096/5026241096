@extends('template')
@section('title', 'Edit Data Tas')

@section('konten')

    <a href="/tas" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($tas as $t)
        <div class="card">
            <div class="card-header">
                Form Edit Data Tas
            </div>
            <div class="card-body">
                <form action="/tas/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $t->kodetas }}">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Merk Tas</label>
                        <div class="col-sm-10">
                            <input type="text" name="merktas" class="form-control" value="{{ $t->merktas }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Stock Tas</label>
                        <div class="col-sm-10">
                            <input type="number" name="stocktas" class="form-control" value="{{ $t->stocktas }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <select name="tersedia" class="form-select">
                                <option value="Y" {{ $t->tersedia == 'Y' ? 'selected' : '' }}>Y</option>
                                <option value="N" {{ $t->tersedia == 'N' ? 'selected' : '' }}>N</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Simpan Perubahan" class="btn btn-primary">
                </form>
            </div>
        </div>
    @endforeach
@endsection
