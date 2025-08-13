@section('main')
<div class="container-fluid">

                    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                {{Auth::user()->email}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{Auth::user()->role}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Seluruh Potensi Desa
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $jumlahPotensi }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Berita Desa
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $jumlahBerita }}</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Jumlah Pengumuman Desa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPengumuman }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Pesan Masuk</h1>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="mb-3">
                <form action="{{ route('messages.destroyAll') }}" method="POST" onsubmit="return confirmHapus(event)">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus Semua Pesan</button>
                </form>
            </div>


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Pesan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. WA</th>
                                    <th>Subjek</th>
                                    <th>Pesan</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($messages as $msg)
                                    <tr>
                                        <td>{{ $msg->name }}</td>
                                        <td>{{ $msg->email }}</td>
                                        <td>{{ $msg->phone }}</td>
                                        <td>{{ $msg->subject }}</td>
                                        <td>{{ $msg->message }}</td>
                                        <td>{{ $msg->created_at->format('d-m-Y H:i') }}</td>
                                        <td>
                                            <form action="{{ route('messages.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Belum ada pesan</td>
                                    </tr>
                                @endforelse
                            </tbody>

                            
                        </table>
                        {{-- {{ $messages->links() }} --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        {{-- <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Content Row -->
    

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