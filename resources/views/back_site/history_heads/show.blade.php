@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Detail History')
@include('back_site.component.navbar_admin')

@section('main')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail History Anggota</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $history->name }}</h6>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $history->start_year}}</h6>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $history->end_year }}</h6>
        </div>

    </div>

</div>


@endsection