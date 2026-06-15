@extends('template')
@section('title', 'Data My Pegawai')
@section('konten')

    <h2>Tambah Data Pegawai</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mypegawai.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf
        <div class="card-body">
            <form action="/tas/store" method="post">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control">
                    </div>
                    </select>
                </div>
                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" class="form-control">
                    </div>
                    </select>
                </div>
        </div>
        <div class="row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>
    <script>
        function validasiForm() {
            let kodepegawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();
            let divisi = document.getElementById('divisi').value.trim();
            let departemen = document.getElementById('departemen').value.trim();

            if (kodepegawai === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode pegawai wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (!/^[A-Za-z0-9]+$/.test(kodepegawai)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode pegawai hanya boleh huruf dan angka",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama lengkap wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (!/^[A-Za-z ]+$/.test(namalengkap)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama lengkap hanya boleh huruf",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection
