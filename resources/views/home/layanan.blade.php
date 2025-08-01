@extends('layout.app_front')

@section('title', 'Layanan')

@section('navbar')
    @include('component.navbar')
@endsection

@section('content')
    @include('layanan_component.header')
    @include('layanan_component.component1')

@endsection

@section('footer')
    @include('component.footer')
@endsection