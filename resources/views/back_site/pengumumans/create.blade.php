@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Pengisian Pengumuman')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Pengumuman Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error:</strong>
                <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif

        <form action="{{ route('admin.pengumumans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title">Judul Berita:</label>
            <input type="text" name="title" id="title" class="form-control" required>

            <label for="tanggal">Tanggal Post:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>

            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" id="penulis" class="form-control" required>

            <label for="content">Konten Berita:</label>
            <textarea name="content" id="content" class="form-control" required></textarea>

            <label for="image">Gambar Utama:</label>
            <input type="file" name="image" id="image" class="form-control">

            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.pengumumans.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

