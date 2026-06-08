@extends('template')
@section('title','Data Tas')

@section('konten')

<a href="/tas/tambah" class="btn btn-primary">Tambah Tas Baru</a>

<br/>
<br/>

<p>Cari Data Tas :</p>

<form action="/tas/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Merk Tas ..." class="form-control">
    <input type="submit" value="CARI" class="btn btn-light">
</form>

<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Tas</th>
        <th>Merk Tas</th>
        <th>Stock Tas</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>

    @foreach($tas as $t)
    <tr>
        <td>{{ $t->kodetas }}</td>
        <td>{{ $t->merktas }}</td>
        <td>{{ $t->stocktas }}</td>
        <td>{{ $t->tersedia }}</td>
        <td>
            <a href="/tas/edit/{{ $t->kodetas }}" class="btn btn-warning">Edit</a>
            |
            <a href="/tas/hapus/{{ $t->kodetas }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach

</table>

{{ $tas->links() }}

@endsection
