@extends('layout.app_front')

@section('title', 'Home')

@section('navbar')
    @include('component.navbar')
@endsection


@section('content')
    @include('beranda_component.jumbo')
@endsection