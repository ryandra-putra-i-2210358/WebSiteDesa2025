@extends('layout.app_front')

@section('title', 'Gallery Desa')

@section('navbar')
    @include('component.navbar')
@endsection

@section('content')
    @include('gallery_component.header')

@endsection

@section('footer')
    @include('component.footer')
@endsection
