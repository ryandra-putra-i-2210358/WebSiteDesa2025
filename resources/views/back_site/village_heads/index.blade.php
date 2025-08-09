@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Bio Kepala Desa')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Bio Singkat Kepala Desa</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    @if(!$villageHead)
        <a href="{{ route('admin.village_heads.create') }}" class="btn btn-primary mb-3">
            + Tambah Data Kepala Desa
        </a>
    @else
        <a href="{{ route('admin.village_heads.edit', $villageHead->id) }}" class="btn btn-warning mb-3">
            Edit Data Kepala Desa
        </a>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kepala Desa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Foto</th>
                            <th>Tanda Tangan</th>
                            <th>Quotes / Sambutan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($villageHead)
                            <tr>
                                <td>{{ $villageHead->name }}</td>
                                <td>{{ $villageHead->position }}</td>
                                <td>
                                    @if($villageHead->image)
                                        <img src="{{ asset($villageHead->image) }}" alt="Foto" class="img-thumbnail" width="80">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>
                                <td>
                                    @if($villageHead->image_signature)
                                        <img src="{{ asset($villageHead->image_signature) }}" alt="Tanda Tangan" class="img-thumbnail" width="80">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>
                                <td>{{ $villageHead->welcome_text }}</td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="5" class="text-center text-muted">
                                    Belum ada data Kepala Desa
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

