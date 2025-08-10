@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Profile Program Kerja')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Profile Program Kerja</h1>

    <form action="{{ route('admin.profiles.update', $profile->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Sejarah</label>
            <textarea name="sejarah" class="form-control" rows="4">{{ old('sejarah', $profile->sejarah) }}</textarea>
        </div>
        <div class="form-group">
            <label>Visi</label>
            <textarea name="visi" class="form-control" rows="4">{{ old('visi', $profile->visi) }}</textarea>
        </div>
        <div class="form-group">
            <label>Misi</label>
            <textarea name="misi" class="form-control" rows="4">{{ old('misi', $profile->misi) }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
