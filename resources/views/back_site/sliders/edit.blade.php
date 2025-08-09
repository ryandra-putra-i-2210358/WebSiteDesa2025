@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Sliders')
@include('back_site.component.navbar_admin')

@section('main')

<div class="container mt-4">
    <h1 class="mb-4">Edit Slider</h1>

    <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $slider->judul) }}" required>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <input type="text" name="text" class="form-control" value="{{ old('text', $slider->text) }}" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (opsional)</label><br>
            @if ($slider->gambar)
                <img src="{{ asset($slider->gambar) }}" alt="Gambar lama" width="200" class="mb-2 d-block rounded">
            @endif
            <input type="file" name="gambar" class="form-control mt-2">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Kembali</a>

    </form>

</div>

@endsection