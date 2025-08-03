@extends('front_site.layout.app_front')

@section('title', 'Infografis Tajur Halang')

@section('navbar')
    @include('front_site.component.navbar')
@endsection

@section('content')

    @include('front_site.infografis_component.header')
 

@endsection

@section('footer')
    @include('front_site.component.footer')
@endsection
