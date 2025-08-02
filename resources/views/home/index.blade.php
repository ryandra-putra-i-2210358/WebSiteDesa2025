@extends('layout.app_front')

@section('title', 'Beranda')

@section('navbar')
    @include('component.navbar')
@endsection


@section('content')
    @include('beranda_component.jumbo')
    @include('beranda_component.component2')
    @include('beranda_component.component3')
@endsection



@section('footer')
    @include('component.footer')
@endsection