@extends('back_site.layouts.app_admin')

@section('title-admin', 'Pengisian Berita')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Slider Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error:</strong>
                <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif

        <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="judul">Judul Sliders</label>
            <input type="text" name="judul" id="judul" class="form-control" required>

            <label for="text">Text Sliders</label>
            <input type="text" name="text" id="text" class="form-control" required>

            <label for="gambar">Gambar Slider</label>
            <input type="file" name="gambar" id="gambar" class="form-control">

            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>



@endsection