@extends('back_site.layouts.app_admin')

@section('title-admin', 'Detail Slider')
@include('back_site.component.navbar_admin')

@section('main')

    <div class="container mt-5">

        <!-- Judul -->
        <h1 class="mb-3">{{ $slider->judul}}</h1>

        <!-- Gambar -->
        @if ($slider->gambar)
            <img src="{{ asset($slider->gambar) }}" alt="{{ $slider->judul}}" class="img-fluid mb-4 rounded">
        @endif

        <!-- Tanggal dan Penulis -->
        <div class="text-muted mb-3">

            <strong>Text:</strong> {{ $slider->text }}
        </div>

    
        <!-- Tombol Kembali -->
        <div class="mt-4">
            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">← Kembali ke Daftar Berita</a>
        </div>

    </div>


@endsection