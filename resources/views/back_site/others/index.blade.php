@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Pengisian Data Potensi Lainya')
@include('back_site.component.navbar_admin')

@section('main')

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Potensi Lainya</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif

        <a href="{{ route('admin.others.create') }}" class="btn btn-primary mb-3">+ Tambah Potensi Lainya</a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Potensi Lainya</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Jenis Potensi</th>
                                <th>Jumlah Potensi</th>
                                <th>Pemilik</th>
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($others as $other)
                                <tr>
                                    <td>{{$other->farm}}</td>
                                    <td>{{$other->alamat}}</td>
                                    <td>{{$other->nohp}}</td>
                                    <td>{{$other->jenis_other}}</td>
                                    <td>{{$other->jumlah_other}}</td>
                                    <td>{{$other->pemilik}}</td>
                                    <td><img src="{{ asset('image_other/' . $other->image) }}" width="100"></td>
                                    <td>
                                        <a href="{{ route('admin.others.show', $other->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                        <a href="{{ route('admin.others.edit', $other->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.others.destroy', $other->id) }}" method="POST" style="display:inline;" onsubmit="return confirmHapus(event)">
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