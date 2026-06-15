@extends('template')
@section('title', 'Data My Pegawai')
@section('konten')

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <a href="/eas/tambah" class="btn btn-primary">Tambah Data My Pegawai Baru</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Detail</th>
        </tr>
        @foreach ($mypegawai as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ $p->namalengkap }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ $p->departemen }}</td>
                <td>
                    <a href="/eas/view/{{ $p->kodepegawai }}" class="btn btn-warning">View</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
