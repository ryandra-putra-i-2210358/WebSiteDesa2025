@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Profile Program Kerja')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Profile Program Kerja</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    @if($profile)
        {{-- Kalau data sudah ada → Edit --}}
        <a href="{{ route('admin.profiles.edit', $profile->id) }}" class="btn btn-primary mb-3">
            Edit Program Kerja
        </a>
    @else
        {{-- Kalau data belum ada → Create --}}
        <a href="{{ route('admin.profiles.create') }}" class="btn btn-success mb-3">
            Tambah Program Kerja
        </a>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Profil</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if($profile)
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <th>Sejarah</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $profile->sejarah }}</td>
                                <td>{{ $profile->visi }}</td>
                                <td>{{ $profile->misi }}</td>
                                <td>
                                    <form action="{{ route('admin.profiles.destroy', $profile->id) }}" method="POST" style="display:inline;"  onsubmit="return confirmHapus(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mb-3">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
    
    
                    </table>
                @else
                    <p class="text-muted">Belum ada data profil. Silakan tambahkan terlebih dahulu.</p>
                @endif
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