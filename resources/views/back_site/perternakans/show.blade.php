@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Peternakan')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container mt-4">
    <h1 class="mb-4">Detail Peternakan</h1>

    <div class="card shadow-sm border-0">
        <div class="row g-0">
            <!-- Gambar -->
            <div class="col-md-4">
                @if($perternakan->image)
                    <img src="{{ asset('image_perternakan/' . $perternakan->image) }}" alt="{{ $perternakan->farm }}" class="img-fluid rounded-start w-100 h-100 object-fit-cover">
                @else
                    <img src="{{ asset('no-image.png') }}" 
                         alt="Tidak ada gambar" 
                         class="img-fluid rounded-start w-100 h-100 object-fit-cover">
                @endif
            </div>

            <!-- Detail -->
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ $perternakan->farm }}</h4>
                    <p><strong>Alamat:</strong> {{ $perternakan->alamat }}</p>
                    <p><strong>No HP:</strong> {{ $perternakan->nohp }}</p>
                    <p><strong>Jenis Ternak:</strong> {{ $perternakan->jenis_ternak }}</p>
                    <p><strong>Jumlah Ternak:</strong> {{ $perternakan->jumlah_ternak }}</p>
                    <p><strong>Pemilik:</strong> {{ $perternakan->pemilik }}</p>
                    <p><strong>Slug:</strong> {{ $perternakan->slug }}</p>
                    <p><strong>Deskripsi:</strong></p>
                    <div class="border rounded p-2 bg-light">
                        {!! nl2br(e($perternakan->content)) !!}
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('admin.perternakans.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('admin.perternakans.edit', $perternakan->id) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
