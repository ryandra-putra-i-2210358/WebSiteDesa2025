@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Peternakan')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container mt-4">
    <h1 class="mb-4">Detail Petanian</h1>

    <div class="card shadow-sm border-0">
        <div class="row g-0">
            <!-- Gambar -->
            <div class="col-md-4">
                @if($pertanian->image)
                    <img src="{{ asset('image_pertanian/' . $pertanian->image) }}" alt="{{ $pertanian->farm }}" class="img-fluid rounded-start w-100 h-100 object-fit-cover">
                @else
                    <img src="{{ asset('no-image.png') }}" 
                         alt="Tidak ada gambar" 
                         class="img-fluid rounded-start w-100 h-100 ">
                @endif
            </div>

            <!-- Detail -->
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ $pertanian->farm }}</h4>
                    <p><strong>Alamat:</strong> {{ $pertanian->alamat }}</p>
                    <p><strong>No HP:</strong> {{ $pertanian->nohp }}</p>
                    <p><strong>Jenis Ternak:</strong> {{ $pertanian->jenis_ternak }}</p>
                    <p><strong>Jumlah Ternak:</strong> {{ $pertanian->jumlah_ternak }}</p>
                    <p><strong>Pemilik:</strong> {{ $pertanian->pemilik }}</p>
                    <p><strong>Slug:</strong> {{ $pertanian->slug }}</p>
                    <p><strong>Deskripsi:</strong></p>
                    <div class="border rounded p-2 bg-light">
                        {!! nl2br(e($pertanian->content)) !!}
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('admin.pertanians.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('admin.pertanians.edit', $pertanian->id) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection