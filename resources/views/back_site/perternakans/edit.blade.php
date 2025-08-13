@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Peternakan')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container mt-4">
    <h1 class="mb-4">Edit Peternakan</h1>

    <form action="{{ route('admin.perternakans.update', $perternakan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="farm" class="form-label">Nama Peternakan</label>
            <input type="text" name="farm" class="form-control" value="{{ old('farm', $perternakan->farm) }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $perternakan->alamat) }}" required>
        </div>

        <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" name="nohp" class="form-control" value="{{ old('nohp', $perternakan->nohp) }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_ternak" class="form-label">Jenis Ternak</label>
            <input type="text" name="jenis_ternak" class="form-control" value="{{ old('jenis_ternak', $perternakan->jenis_ternak) }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah_ternak" class="form-label">Jumlah Ternak</label>
            <input type="number" name="jumlah_ternak" class="form-control" value="{{ old('jumlah_ternak', $perternakan->jumlah_ternak) }}" required>
        </div>

        <div class="mb-3">
            <label for="pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" name="pemilik" class="form-control" value="{{ old('pemilik', $perternakan->pemilik) }}" required>
        </div>

        {{-- <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ old('slug', $perternakan->slug) }}" required>
        </div> --}}

        <div class="mb-3">
            <label for="content" class="form-label">Isi Konten Peternakan</label>
            <textarea name="content" class="form-control" rows="6" required>{{ old('content', $perternakan->content) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar (opsional)</label><br>
            @if ($perternakan->image)
                <img src="{{ asset('image_perternakan/' . $perternakan->image) }}" alt="Gambar lama" width="200" class="mb-2 d-block rounded">
            @endif
            <input type="file" name="image" class="form-control mt-2">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.perternakans.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
