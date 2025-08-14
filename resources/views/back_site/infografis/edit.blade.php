@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Edit Info Grafis')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container mt-4">
    <h1>Edit Info Grafis</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.infografis.update', $infografi->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Total Data Umum --}}
        <div class="mb-3">
            <label>Total Penduduk</label>
            <input type="number" name="total_penduduk" class="form-control"
                   value="{{ old('total_penduduk', $infografi->total_penduduk) }}" required>
        </div>
        <div class="mb-3">
            <label>Kepala Keluarga</label>
            <input type="number" name="kepala_keluarga" class="form-control"
                   value="{{ old('kepala_keluarga', $infografi->kepala_keluarga) }}" required>
        </div>
        <div class="mb-3">
            <label>Perempuan</label>
            <input type="number" name="perempuan" class="form-control"
                   value="{{ old('perempuan', $infografi->perempuan) }}" required>
        </div>
        <div class="mb-3">
            <label>Laki-laki</label>
            <input type="number" name="laki_laki" class="form-control"
                   value="{{ old('laki_laki', $infografi->laki_laki) }}" required>
        </div>

        {{-- Data RW --}}
        <div class="mb-3">
            <label>Data RW</label>
            @php $rw = old('rw', $infografi->rw ?? []); @endphp
            @foreach($rw as $key => $value)
                <div class="input-group mb-2">
                    <span class="input-group-text">{{ $key }}</span>
                    <input type="number" name="rw[{{ $key }}]" class="form-control" value="{{ $value }}" placeholder="tidak usah di isi">
                </div>
            @endforeach
        </div>

        {{-- Data Agama --}}
        <div class="mb-3">
            <label>Data Agama</label>
            @php $agama = old('agama', $infografi->agama ?? []); @endphp
            @foreach($agama as $key => $value)
                <div class="input-group mb-2">
                    <span class="input-group-text">{{ $key }}</span>
                    <input type="number" name="agama[{{ $key }}]" class="form-control" value="{{ $value }}" placeholder="tidak usah di isi">
                </div>
            @endforeach
        </div>

        {{-- Data Pendidikan --}}
        <div class="mb-3">
            <label>Pendidikan</label>
            @php $pendidikan = old('pendidikan', $infografi->pendidikan ?? []); @endphp
            @foreach($pendidikan as $key => $value)
                <div class="input-group mb-2">
                    <span class="input-group-text">{{ $key }}</span>
                    <input type="number" name="pendidikan[{{ $key }}]" class="form-control" value="{{ $value }}" placeholder="tidak usah di isi">
                </div>
            @endforeach
        </div>

        {{-- Data Status Perkawinan --}}
        <div class="mb-3">
            <label>Status Perkawinan</label>
            @php $status = old('status_perkawinan', $infografi->status_perkawinan ?? []); @endphp
            @foreach($status as $key => $value)
                <div class="input-group mb-2">
                    <span class="input-group-text">{{ $key }}</span>
                    <input type="number" name="status_perkawinan[{{ $key }}]" class="form-control" value="{{ $value }}" placeholder="tidak usah di isi">
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.infografis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
