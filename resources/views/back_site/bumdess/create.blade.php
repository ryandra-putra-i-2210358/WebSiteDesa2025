@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Tambah Gallery')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Tambah Gallery Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>   
            
        @endif

        <form action="{{ route('admin.bumdess.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>

            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control" required>

            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control">

            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.bumdess.index') }}" class="btn btn-secondary">Kembali</a>
        </form>


    </div>

@endsection