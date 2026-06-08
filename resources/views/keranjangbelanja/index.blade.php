@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>
                    {{ number_format($k->Harga, 0, ',', '.') }}
                </td>
                <td>
                    {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}
                </td>
                <td>
                    <a href="/keranjangbelanja/tambah/" class="btn btn-warning">Beli</a>
                    |
                    <a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
