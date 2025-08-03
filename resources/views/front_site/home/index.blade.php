@extends('front_site.layout.app_front')

@section('title', 'Beranda')

@section('navbar')
    @include('front_site.component.navbar')
@endsection


@section('content')
    @include('front_site.beranda_component.jumbo')
    @include('front_site.beranda_component.component2')
    @include('front_site.beranda_component.component3')
@endsection



@section('footer')
    @include('front_site.component.footer')
@endsection