@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Wisata')
@include('back_site.component.navbar_admin')

@section('main')

    <div class="container mt-4">
        <h1 class="mb-4">Detail Wisata</h1>

        <div class="card shadow-sm border-0">
            <!-- Gambar di atas -->
            @if($wisata->image)
                <img src="{{ asset('image_wisata/' . $wisata->image) }}" 
                    alt="{{ $wisata->farm }}" 
                    class="card-img-top"
                    style="max-height: 300px; object-fit: cover;">
            @else
                <img src="{{ asset('no-image.png') }}" 
                    alt="Tidak ada gambar" 
                    class="card-img-top"
                    style="max-height: 300px; object-fit: cover;">
            @endif

            <!-- Detail -->
            <div class="card-body">
                <h4 class="card-title mb-3">{{ $wisata->farm }}</h4>
                <p><strong>Alamat:</strong> {{ $wisata->alamat }}</p>
                <p><strong>No HP:</strong> {{ $wisata->nohp }}</p>
                <p><strong>Jenis Ternak:</strong> {{ $wisata->jenis_ternak }}</p>
                <p><strong>Jumlah Ternak:</strong> {{ $wisata->jumlah_ternak }}</p>
                <p><strong>Pemilik:</strong> {{ $wisata->pemilik }}</p>
                <p><strong>Slug:</strong> {{ $wisata->slug }}</p>

                <p><strong>Deskripsi:</strong></p>
                @php
                    $lines = preg_split('/\r\n|\r|\n/', trim($wisata->content));
                    $paragraphs = array_chunk($lines, 5);
                @endphp
                <div class="border rounded p-3 bg-light" style="text-align: justify;">
                    @foreach ($paragraphs as $para)
                        <p class="mb-2">{{ implode(' ', $para) }}</p>
                    @endforeach
                </div>

                <div class="mt-4">
                    <a href="{{ route('admin.wisatas.index') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('admin.wisatas.edit', $wisata->id) }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>

@endsection