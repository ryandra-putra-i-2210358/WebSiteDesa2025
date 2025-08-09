@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Data Story Jabatan')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">History Jabatan</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <a href="{{ route('admin.history_heads.create') }}" class="btn btn-primary mb-3">
        + History Jabatan Kades
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data History</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tahun Jabatan</th>
                            <th>Selesai Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($historys as $history)
                            <tr>
                                <td>{{ $history->name }}</td>
                                <td>{{ $history->start_year }}</td>
                                <td>{{ $history->end_year }}</td>
                                <td>
                                    <a href="{{ route('admin.history_heads.show', $history->id) }}" 
                                       class="btn btn-primary btn-sm">Detail</a>

                                    <a href="{{ route('admin.history_heads.edit', $history->id) }}" 
                                       class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('admin.history_heads.destroy', $history->id) }}" 
                                          method="POST" 
                                          style="display:inline;" 
                                          onsubmit="return confirmHapus(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- SweetAlert Konfirmasi Hapus --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmHapus(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Yakin Hapus Data?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit();
            }
        });
    }
</script>
