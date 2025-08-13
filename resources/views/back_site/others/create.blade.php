@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Pengisian Potensi Lainya')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Pontensi Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error:</strong>
                <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        <form action="{{ route('admin.others.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="farm">Nama Potensi Lainya</label>
            <input type="text" name="farm" id="farm" class="form-control" required>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>

            <label for="nohp">No Hp</label>
            <input type="text" name="nohp" id="nohp" class="form-control" required>
            
            <label for="jenis_other">Jenis Potensi</label>
            <input type="text" name="jenis_other" id="jenis_other" class="form-control" required>
            
            <label for="jumlah_other">Jumlah Potensi</label>
            <input type="number" name="jumlah_other" id="jumlah_other" class="form-control" required>
            
            <label for="pemilik">Pemilik</label>
            <input type="text" name="pemilik" id="pemilik" class="form-control" required>

            <label for="content">Penjelasan Potensi</label>
            <textarea name="content" id="content" class="form-control" required></textarea>

            <label for="image">Gambar Utama:</label>
            <input type="file" name="image" id="image" class="form-control">

            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.others.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>

@endsection