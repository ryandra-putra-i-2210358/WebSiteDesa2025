@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Berita')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Berita</h1>

        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="{{ old('penulis', $news->penulis) }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', \Carbon\Carbon::parse($news->tanggal)->format('Y-m-d')) }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Isi Content Berita</label>
                <textarea name="content" class="form-control" rows="6" required>{{ old('content', $news->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar (opsional)</label><br>
                @if ($news->image)
                    <img src="{{ asset($news->image) }}" alt="Gambar lama" width="200" class="mb-2 d-block rounded">
                @endif
                <input type="file" name="image" class="form-control mt-2">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
