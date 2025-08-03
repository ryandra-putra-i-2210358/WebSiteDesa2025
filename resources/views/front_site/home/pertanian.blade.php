@extends('front_site.layout.app_front')

@section('title', 'Pertanian')

@section('navbar')
    @include('front_site.component.navbar')
@endsection

@section('content')
    @include('front_site.pertanian_component.header')

@endsection

@section('footer')
    @include('front_site.component.footer')
@endsection