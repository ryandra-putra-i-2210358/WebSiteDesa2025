@extends('layout.app_front')

@section('title', 'Pengumuman')

@section('navbar')
    @include('component.navbar')
@endsection

@section('content')
    @include('pengumuman_component.header')

@endsection

@section('footer')
    @include('component.footer')
@endsection