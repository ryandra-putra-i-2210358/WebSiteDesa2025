@extends('front_site.layout.app_front')

@section('title', 'Layanan Desa')

@section('navbar')
    @include('front_site.component.navbar')
@endsection

@section('content')
    @include('front_site.layanan_component.header')
    @include('front_site.layanan_component.component1')

@endsection

@section('footer')
    @include('front_site.component.footer')
@endsection