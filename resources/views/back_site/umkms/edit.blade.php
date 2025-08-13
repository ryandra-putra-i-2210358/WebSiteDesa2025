@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Peternakan')
@include('back_site.component.navbar_admin')

@section('main')

    <div class="container mt-4">
    <h1 class="mb-4">Edit UMKM</h1>

    <form action="{{ route('admin.umkms.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="farm" class="form-label">Nama UMKM</label>
            <input type="text" name="farm" class="form-control" value="{{ old('farm', $umkm->farm) }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $umkm->alamat) }}" required>
        </div>

        <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" name="nohp" class="form-control" value="{{ old('nohp', $umkm->nohp) }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_umkm" class="form-label">Jenis umkm</label>
            <input type="text" name="jenis_umkm" class="form-control" value="{{ old('jenis_umkm', $umkm->jenis_umkm) }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah_umkm" class="form-label">Jumlah umkm</label>
            <input type="number" name="jumlah_umkm" class="form-control" value="{{ old('jumlah_umkm', $umkm->jumlah_umkm) }}" required>
        </div>

        <div class="mb-3">
            <label for="pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" name="pemilik" class="form-control" value="{{ old('pemilik', $umkm->pemilik) }}" required>
        </div>

        {{-- <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ old('slug', $umkm->slug) }}" required>
        </div> --}}

        <div class="mb-3">
            <label for="content" class="form-label">Isi Konten Peternakan</label>
            <textarea name="content" class="form-control" rows="6" required>{{ old('content', $umkm->content) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar (opsional)</label><br>
            @if ($umkm->image)
                <img src="{{ asset('image_umkm/' . $umkm->image) }}" alt="Gambar lama" width="200" class="mb-2 d-block rounded">
            @endif
            <input type="file" name="image" class="form-control mt-2">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.umkms.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>


@endsection