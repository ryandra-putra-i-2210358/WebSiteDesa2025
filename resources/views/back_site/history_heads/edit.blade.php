@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Berita')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Berita</h1>

        <form action="{{ route('admin.history_heads.update', $history->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $history->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="start_year" class="form-label">Tahun Jabatan</label>
                <input type="text" name="start_year" class="form-control" value="{{ old('start_year', $history->start_year) }}" required>
            </div>

            <div class="mb-3">
                <label for="end_year" class="form-label">Selesai Jabatan</label>
                <input type="text" name="end_year" class="form-control" value="{{ old('end_year', $history->end_year) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.history_heads.index') }}" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
@endsection
