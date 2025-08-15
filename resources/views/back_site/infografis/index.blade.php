@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Data Info Grafis')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container mt-4">
    <h1 class="mb-4">Data Info Grafis</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @php
        $data_rw = collect($infografi->rw)
        ->reject(function($value, $key) {
            return in_array($key, ['new_key', 'new_value']) || $value === 'new_value';
        });

    @endphp

    @if($infografi)
        <table class="table table-bordered">
            <tr>
                <th>Total Penduduk</th>
                <td>{{ $infografi->total_penduduk }}</td>
            </tr>
            <tr>
                <th>Kepala Keluarga</th>
                <td>{{ $infografi->kepala_keluarga }}</td>
            </tr>
            <tr>
                <th>Perempuan</th>
                <td>{{ $infografi->perempuan }}</td>
            </tr>
            <tr>
                <th>Laki-laki</th>
                <td>{{ $infografi->laki_laki }}</td>
            </tr>
            <tr>
                <th>Data RW</th>
                <td>
                    @if(!empty($infografi->rw))
                        <ul class="mb-0">
                            @foreach($infografi->rw as $nama => $jumlah)
                                <li>{{ $nama }}: {{ $jumlah }}</li>
                            @endforeach
                        </ul>
                    @else
                        <em>Tidak ada data</em>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>
                    @if(!empty($infografi->agama))
                        <ul class="mb-0">
                            @foreach($infografi->agama as $nama => $jumlah)
                                <li>{{ $nama }}: {{ $jumlah }}</li>
                            @endforeach
                        </ul>
                    @else
                        <em>Tidak ada data</em>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>
                    @if(!empty($infografi->pendidikan))
                        <ul class="mb-0">
                            @foreach($infografi->pendidikan as $nama => $jumlah)
                                <li>{{ $nama }}: {{ $jumlah }}</li>
                            @endforeach
                        </ul>
                    @else
                        <em>Tidak ada data</em>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Status Perkawinan</th>
                <td>
                    @if(!empty($infografi->status_perkawinan))
                        <ul class="mb-0">
                            @foreach($infografi->status_perkawinan as $nama => $jumlah)
                                <li>{{ $nama }}: {{ $jumlah }}</li>
                            @endforeach
                        </ul>
                    @else
                        <em>Tidak ada data</em>
                    @endif
                </td>
            </tr>
        </table>

        <a href="{{ route('admin.infografis.edit', $infografi->id) }}" class="btn btn-warning">Edit</a>
    @else
        <p>Belum ada data demografi.</p>
        <a href="{{ route('admin.infografis.create') }}" class="btn btn-primary">Tambah Data</a>
    @endif
</div>
@endsection
