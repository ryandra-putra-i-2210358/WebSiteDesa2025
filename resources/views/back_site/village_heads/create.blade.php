@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Bio Singkat')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Kepala Desa Baru</h1>

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.village_heads.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="block mb-1 font-medium">Nama</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="block mb-1 font-medium">Jabatan</label>
                <input type="text" name="position" value="{{ old('position', 'Kepala Desa') }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="block mb-1 font-medium">Foto</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label class="block mb-1 font-medium">Tanda Tangan</label>
                <input type="file" name="image_signature" class="form-control">
            </div>

            <div class="mb-3">
                <label class="block mb-1 font-medium">Sambutan</label>
                <textarea name="welcome_text" rows="4" class="form-control">{{ old('welcome_text') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.village_heads.index') }}" class="btn btn-secondary">Kembali</a>
        </form>


    </div>



@endsection