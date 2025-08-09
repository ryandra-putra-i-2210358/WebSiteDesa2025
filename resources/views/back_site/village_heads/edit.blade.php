@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Biodata')
@include('back_site.component.navbar_admin')

@section('main')

<div class="container mt-4">
    <h2 class="mb-4">Edit Profil Kepala Desa</h2>

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.village_heads.update', $villageHead->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block mb-1 font-medium">Nama</label>
            <input type="text" name="name" value="{{ old('name', $villageHead->name) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="block mb-1 font-medium">Jabatan</label>
            <input type="text" name="position" value="{{ old('position', $villageHead->position) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="block mb-1 font-medium">Foto</label>
            @if($villageHead->image)
                <div class="mb-2">
                    <img src="{{ asset($villageHead->image) }}" class="h-20 rounded">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="block mb-1 font-medium">Tanda Tangan</label>
            @if($villageHead->image_signature)
                <div class="mb-2">
                    <img src="{{ asset($villageHead->image_signature) }}" class="h-12">
                </div>
            @endif
            <input type="file" name="image_signature" class="form-control">
        </div>

        <div class="mb-3">
            <label class="block mb-1 font-medium">Sambutan</label>
            <textarea name="welcome_text" rows="4" class="form-control">{{ old('welcome_text', $villageHead->welcome_text) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

  
@endsection