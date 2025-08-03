@extends('front_site.layout.app_front')

@section('title', 'Berita')

@section('navbar')
    @include('front_site.component.navbar')
@endsection

@section('content')
    @include('front_site.berita_component.header')

@endsection

@section('footer')
    @include('front_site.component.footer')
@endsection
