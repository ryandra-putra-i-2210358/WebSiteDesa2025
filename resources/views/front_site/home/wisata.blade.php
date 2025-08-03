@extends('front_site.layout.app_front')

@section('title', 'Wisata')

@section('navbar')
    @include('front_site.component.navbar')
@endsection

@section('content')
    @include('front_site.wisata_component.header')

@endsection

@section('footer')
    @include('front_site.component.footer')
@endsection