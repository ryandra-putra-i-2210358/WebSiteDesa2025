@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Peternakan')
@include('back_site.component.navbar_admin')

@section('main')

    <div class="container mt-4">
        <h1 class="mb-4">Edit Pertanian</h1>
            <form action="{{ route('admin.pertanians.update', $pertanian->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="farm" class="form-label">Nama Peternakan</label>
                <input type="text" name="farm" class="form-control" value="{{ old('farm', $pertanian->farm) }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $pertanian->alamat) }}" required>
            </div>

            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="text" name="nohp" class="form-control" value="{{ old('nohp', $pertanian->nohp) }}" required>
            </div>

            <div class="mb-3">
                <label for="jenis_pertanian" class="form-label">Jenis Ternak</label>
                <input type="text" name="jenis_pertanian" class="form-control" value="{{ old('jenis_pertanian', $pertanian->jenis_pertanian) }}" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_pertanian" class="form-label">Jumlah Ternak</label>
                <input type="number" name="jumlah_pertanian" class="form-control" value="{{ old('jumlah_pertanian', $pertanian->jumlah_pertanian) }}" required>
            </div>

            <div class="mb-3">
                <label for="pemilik" class="form-label">Nama Pemilik</label>
                <input type="text" name="pemilik" class="form-control" value="{{ old('pemilik', $pertanian->pemilik) }}" required>
            </div>

            {{-- <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $pertanian->slug) }}" required>
            </div> --}}

            <div class="mb-3">
                <label for="content" class="form-label">Isi Konten Pertanian</label>
                <textarea name="content" class="form-control" rows="6" required>{{ old('content', $pertanian->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar (opsional)</label><br>
                @if ($pertanian->image)
                    <img src="{{ asset('image_pertanian/' . $pertanian->image) }}" alt="Gambar lama" width="200" class="mb-2 d-block rounded">
                @endif
                <input type="file" name="image" class="form-control mt-2">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.pertanians.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>

@endsection