@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Tambah Data Info Grafis')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container mt-4">
    <h1 class="mb-4">Tambah Data Info Grafis</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.infografis.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Total Penduduk</label>
            <input type="number" name="total_penduduk" class="form-control" value="{{ old('total_penduduk') }}">
        </div>

        <div class="mb-3">
            <label>Kepala Keluarga</label>
            <input type="number" name="kepala_keluarga" class="form-control" value="{{ old('kepala_keluarga') }}">
        </div>

        <div class="mb-3">
            <label>Perempuan</label>
            <input type="number" name="perempuan" class="form-control" value="{{ old('perempuan') }}">
        </div>

        <div class="mb-3">
            <label>Laki-laki</label>
            <input type="number" name="laki_laki" class="form-control" value="{{ old('laki_laki') }}">
        </div>

        <hr>
        <h5>Data RW</h5>
        @for($i=1; $i<=6; $i++)
            <div class="mb-2">
                <label>RW {{ $i }}</label>
                <input type="number" name="rw[rw{{ $i }}]" class="form-control" value="{{ old('rw.rw'.$i) }}">
            </div>
        @endfor

        <hr>
        <h5>Agama</h5>
        @php
            $agamaList = ['Islam', 'Kristen', 'Hindu', 'Budha', 'Konghucu'];
        @endphp
        @foreach($agamaList as $agama)
            <div class="mb-2">
                <label>{{ $agama }}</label>
                <input type="number" name="agama[{{ strtolower($agama) }}]" class="form-control" value="{{ old('agama.'.strtolower($agama)) }}">
            </div>
        @endforeach

        <hr>
        <h5>Pendidikan</h5>
        @php
            $pendidikanList = ['Belum Sekolah', 'Tamat SD', 'Tamat SMP', 'Tamat SMA', 'Sarjana'];
        @endphp
        @foreach($pendidikanList as $pendidikan)
            <div class="mb-2">
                <label>{{ $pendidikan }}</label>
                <input type="number" name="pendidikan[{{ str_replace(' ', '_', strtolower($pendidikan)) }}]" class="form-control" value="{{ old('pendidikan.'.str_replace(' ', '_', strtolower($pendidikan))) }}">
            </div>
        @endforeach

        <hr>
        <h5>Status Perkawinan</h5>
        @php
            $statusList = ['Belum Kawin', 'Kawin', 'Cerai'];
        @endphp
        @foreach($statusList as $status)
            <div class="mb-2">
                <label>{{ $status }}</label>
                <input type="number" name="status_perkawinan[{{ str_replace(' ', '_', strtolower($status)) }}]" class="form-control" value="{{ old('status_perkawinan.'.str_replace(' ', '_', strtolower($status))) }}">
            </div>
        @endforeach

        <hr>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.infografis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
