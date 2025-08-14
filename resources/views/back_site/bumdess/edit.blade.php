@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Bumdes')
@include('back_site.component.navbar_admin')

@section('main')

    <div class="container mt-4">
        <h1 class="mb-4">Edit Bumdes</h1>

        <form action="{{ route('admin.bumdess.update', $bumdes->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $bumdes->name) }}" required >
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control" value="{{ old('jabatan', $bumdes->jabatan) }}" required >
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label><br>
                @if ($bumdes->image)
                    <img src="{{ asset($bumdes->image) }}" alt="Gambar lama" width="200" class="mb-2 d-block rounded">
                @endif
                <input type="file" id="image" name="image" class="form-control mt-2">
            </div>

             <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.bumdess.index') }}" class="btn btn-secondary">Kembali</a>
            </div>


        </form>
    </div>

@endsection


