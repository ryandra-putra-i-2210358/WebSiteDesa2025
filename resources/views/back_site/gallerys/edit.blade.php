@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Gallery')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container mt-4">
    <h1 class="mb-4">Edit Gallery</h1>

    <form action="{{ route('admin.gallerys.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Judul --}}
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul', $gallery->judul) }}" required>
        </div>

        {{-- Gambar --}}
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label><br>
            @if ($gallery->image)
                <img src="{{ asset($gallery->image) }}" alt="Gambar lama" width="200" class="mb-2 d-block rounded">
            @endif
            <input type="file" id="image" name="image" class="form-control mt-2">
        </div>
        
        {{-- Tombol Aksi --}}
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.gallerys.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
