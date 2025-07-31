@extends('layout.app_front')


@section('title', 'Potensi Desa')

@section('navbar')
    @include('component.navbar')
@endsection

@section('content')
    @include('potensi_component.header')

@endsection

@section('footer')
    @include('component.footer')
@endsection