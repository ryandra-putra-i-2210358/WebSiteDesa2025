@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Peternakan')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container mt-4">
        <h1 class="mb-4">Detail Perternakan</h1>

        <div class="card shadow-sm border-0">
            <!-- Gambar di atas -->
            @if($perternakan->image)
                <img src="{{ asset('image_perternakan/' . $perternakan->image) }}" 
                    alt="{{ $perternakan->farm }}" 
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
                <h4 class="card-title mb-3">{{ $perternakan->farm }}</h4>
                <p><strong>Alamat:</strong> {{ $perternakan->alamat }}</p>
                <p><strong>No HP:</strong> {{ $perternakan->nohp }}</p>
                <p><strong>Jenis Ternak:</strong> {{ $perternakan->jenis_ternak }}</p>
                <p><strong>Jumlah Ternak:</strong> {{ $perternakan->jumlah_ternak }}</p>
                <p><strong>Pemilik:</strong> {{ $perternakan->pemilik }}</p>
                <p><strong>Slug:</strong> {{ $perternakan->slug }}</p>

                <p><strong>Deskripsi:</strong></p>
                @php
                    $lines = preg_split('/\r\n|\r|\n/', trim($perternakan->content));
                    $paragraphs = array_chunk($lines, 5);
                @endphp
                <div class="border rounded p-3 bg-light" style="text-align: justify;">
                    @foreach ($paragraphs as $para)
                        <p class="mb-2">{{ implode(' ', $para) }}</p>
                    @endforeach
                </div>

                <div class="mt-4">
                    <a href="{{ route('admin.perternakans.index') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('admin.perternakans.edit', $perternakan->id) }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
