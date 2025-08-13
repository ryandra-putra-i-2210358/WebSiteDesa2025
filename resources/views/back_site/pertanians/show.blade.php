@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Pertanian')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container mt-4">
    <h1 class="mb-4">Detail Pertanian</h1>

    <div class="card shadow-sm border-0">
        <!-- Gambar di atas -->
        @if($pertanian->image)
            <img src="{{ asset('image_pertanian/' . $pertanian->image) }}" 
                alt="{{ $pertanian->farm }}" 
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
            <h4 class="card-title mb-3">{{ $pertanian->farm }}</h4>
            <p><strong>Alamat:</strong> {{ $pertanian->alamat }}</p>
            <p><strong>No HP:</strong> {{ $pertanian->nohp }}</p>
            <p><strong>Jenis Pertanian:</strong> {{ $pertanian->jenis_pertanian }}</p>
            <p><strong>Jumlah Pertanian:</strong> {{ $pertanian->jumlah_pertanian }}</p>
            <p><strong>Pemilik:</strong> {{ $pertanian->pemilik }}</p>
            <p><strong>Slug:</strong> {{ $pertanian->slug }}</p>

            <p><strong>Deskripsi:</strong></p>
            @php
                $lines = preg_split('/\r\n|\r|\n/', trim($pertanian->content));
                $paragraphs = array_chunk($lines, 5);
            @endphp
            <div class="border rounded p-3 bg-light" style="text-align: justify;">
                @foreach ($paragraphs as $para)
                    <p class="mb-2">{{ implode(' ', $para) }}</p>
                @endforeach
            </div>

            <div class="mt-4">
                <a href="{{ route('admin.pertanians.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('admin.pertanians.edit', $pertanian->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
    </div>
@endsection