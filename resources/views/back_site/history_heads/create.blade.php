@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Tambah Kepala Desa')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Kepala Desa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.history_heads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="start_year">Tahun Mulai</label>
            <input type="text" name="start_year" id="start_year" class="form-control" required>
        </div>

        <div class="form-group mb-4">
            <label for="end_year">Akhir Jabatan</label>
            <input type="text" name="end_year" id="end_year" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.history_heads.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
