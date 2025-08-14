@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail Bumdes')
@include('back_site.component.navbar_admin')

@section('main')

    <div class="container-fluid">
        <p>Nama : {{$bumdes->name}}</p>
        <p>Jabatan : {{$bumdes->jabatan}}</p>
        
        <p>Gambar : </p>
        @if ($bumdes->image)
            <img src="{{ asset($bumdes->image) }}"class="img-fluid mb-4 rounded w-10">
        @endif

    </div>

@endsection