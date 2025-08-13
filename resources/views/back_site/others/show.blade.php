@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Potensi')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container mt-4">
        <h1 class="mb-4">Detail Potensi</h1>

        <div class="card shadow-sm border-0">
            <!-- Gambar di atas -->
            @if($other->image)
                <img src="{{ asset('image_other/' . $other->image) }}" 
                    alt="{{ $other->farm }}" 
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
                <h4 class="card-title mb-3">{{ $other->farm }}</h4>
                <p><strong>Alamat:</strong> {{ $other->alamat }}</p>
                <p><strong>No HP:</strong> {{ $other->nohp }}</p>
                <p><strong>Jenis Ternak:</strong> {{ $other->jenis_ternak }}</p>
                <p><strong>Jumlah Ternak:</strong> {{ $other->jumlah_ternak }}</p>
                <p><strong>Pemilik:</strong> {{ $other->pemilik }}</p>
                <p><strong>Slug:</strong> {{ $other->slug }}</p>

                <p><strong>Deskripsi:</strong></p>
                @php
                    $lines = preg_split('/\r\n|\r|\n/', trim($other->content));
                    $paragraphs = array_chunk($lines, 5);
                @endphp
                <div class="border rounded p-3 bg-light" style="text-align: justify;">
                    @foreach ($paragraphs as $para)
                        <p class="mb-2">{{ implode(' ', $para) }}</p>
                    @endforeach
                </div>

                <div class="mt-4">
                    <a href="{{ route('admin.others.index') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('admin.others.edit', $other->id) }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>


@endsection