@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Gallery')
@include('back_site.component.navbar_admin')

@section('main')
    <h1 class="mb-3">{{ $gallery->judul }}</h1>

    <!-- Gambar -->
    <p>Gambar : </p>
    @if ($gallery->image)
        <img src="{{ asset($gallery->image) }}"class="img-fluid mb-4 rounded w-10">
    @endif

@endsection