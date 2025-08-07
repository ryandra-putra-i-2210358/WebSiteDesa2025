@extends('back_site.layouts.app_admin')

@section('title-admin', 'Detail Berita')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container mt-5">

    <!-- Judul -->
    <h1 class="mb-3">{{ $news->title }}</h1>

    <!-- Gambar -->
    @if ($news->image)
        <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" class="img-fluid mb-4 rounded">
    @endif

    <!-- Tanggal dan Penulis -->
    <div class="text-muted mb-3">
        <strong>Tanggal Publikasi:</strong> {{ \Carbon\Carbon::parse($news->tanggal)->format('d M Y') }}<br>
        <strong>Penulis:</strong> {{ $news->penulis }}
    </div>

    <!-- Isi Konten -->
    <div class="fs-5 mb-4" style="line-height: 1.8;">
        {!! nl2br(e($news->content)) !!}
    </div>

    <!-- Tabel Informasi Penulis -->
    <h5 class="mb-2">Informasi Penulis</h5>
    <table class="table table-bordered w-50">
        <tbody>
            <tr>
                <th>Nama Penulis</th>
                <td>{{ $news->penulis }}</td>
            </tr>
            <tr>
                <th>Tanggal Postingan</th>
                <td>{{ \Carbon\Carbon::parse($news->tanggal)->format('d M Y') }}</td>
            </tr>
        </tbody>
    </table>

    <!-- Tombol Kembali -->
    <div class="mt-4">
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">← Kembali ke Daftar Berita</a>
    </div>

</div>
@endsection
