@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Layanan')
@include('back_site.component.navbar_admin')

@section('main')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Detail Layanan</h1>

        <div class="card shadow mb-4">
            
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ $layanan->judul }}</h6>
            </div>

            <div class="card-body">
                @if(!empty($layanan->items) && is_array($layanan->items))
                    <ul class="list-group list-group-flush">
                        @foreach($layanan->items as $item)
                            <li class="list-group-item">{{ $item }}</li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">Tidak ada poin layanan yang tersedia.</p>
                @endif
            </div>

            <div class="card-footer text-right">
                <a href="{{ route('admin.layanans.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('admin.layanans.edit', $layanan->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
@endsection
