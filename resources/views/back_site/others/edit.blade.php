@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Potensi')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Potensi</h1>

        <form action="{{ route('admin.others.update', $other->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="farm" class="form-label">Nama other</label>
                <input type="text" name="farm" class="form-control" value="{{ old('farm', $other->farm) }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $other->alamat) }}" required>
            </div>

            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="text" name="nohp" class="form-control" value="{{ old('nohp', $other->nohp) }}" required>
            </div>

            <div class="mb-3">
                <label for="jenis_other" class="form-label">Jenis other</label>
                <input type="text" name="jenis_other" class="form-control" value="{{ old('jenis_other', $other->jenis_other) }}" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_other" class="form-label">Jumlah other</label>
                <input type="number" name="jumlah_other" class="form-control" value="{{ old('jumlah_other', $other->jumlah_other) }}" required>
            </div>

            <div class="mb-3">
                <label for="pemilik" class="form-label">Nama Pemilik</label>
                <input type="text" name="pemilik" class="form-control" value="{{ old('pemilik', $other->pemilik) }}" required>
            </div>

            {{-- <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $other->slug) }}" required>
            </div> --}}

            <div class="mb-3">
                <label for="content" class="form-label">Isi Konten Peternakan</label>
                <textarea name="content" class="form-control" rows="6" required>{{ old('content', $other->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label><br>
                @if ($other->image)
                    <img src="{{ asset('image_other/' . $other->image) }}" alt="Gambar lama" width="200" class="mb-2 d-block rounded">
                @endif
                <input type="file" name="image" class="form-control mt-2">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.others.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

@endsection