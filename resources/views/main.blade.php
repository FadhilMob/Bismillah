@extends('sb-admin.index')

@section('title')
    SMART PEKAN
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1>SELAMAT DATANG DI SMART PEKAN</h1>
        <p class="mb-10"></p>
          <!-- CARD COUNT LAPORAN SELESAI-->
          <div class="row">
            <p class="mb-4 d-block">
            <!-- COUNT LAPORAN SELESAI -->
            <div class="col-xl-6 col-md-6 mb-6">
                <div class="card border-bottom-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl-center font-weight-bold text-success text-uppercase mb-1">
                                    TOTAL LAPORAN SELESAI</div>
                                <center><div class="h3 mb-0 font-weight-bold text-gray-800">{{$selesai}}</div></center>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="bi bi-people-fill fa-2x text-gray-300"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- COUNT JUMLAH LAPORAN BELUM SELESAI -->
            <div class="col-xl-6 col-md-6 mb-6">
                <div class="card border-bottom-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl-center font-weight-bold text-danger text-uppercase mb-1">
                                    TOTAL LAPORAN BELUM</div>
                                <center><div class="h3 mb-0 font-weight-bold text-gray-800">{{$belum}}</div></center>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="bi bi-book fa-2x text-gray-300"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>

        <div class="row">
            <p class="mb-4 d-block">
            <!-- COUNT JUMLAH RHK -->
            <div class="col-xl-6 col-md-6 mb-6">
                <div class="card border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl-center font-weight-bold text-primary text-uppercase mb-1">
                                    JUMLAH RHK</div>
                                <center><div class="h3 mb-0 font-weight-bold text-gray-800">{{$rhk}}</div></center>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="bi bi-book fa-2x text-gray-300"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- COUNT ARSIP -->
            <div class="col-xl- col-md-6 mb-6">
                <div class="card border-bottom-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl-center font-weight-bold text-info text-uppercase mb-1">
                                    JUMLAH ARSIP</div>
                                <center><div class="h3 mb-0 font-weight-bold text-gray-800">{{$arsip}}</div></center>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="bi bi-book fa-2x text-gray-300"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            </p>
            <div class="row">
                <div class="container">
                    <div class="column justify">
                        <div class="col-md-15">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-responsive">
                                        <tr>
                                            <tr><th>Nama</th><th>:</th> <td>{{ Auth::user()->name }}</td>
                                            <tr><th>NIP</th><th>:</th> <td>{{ Auth::user()->username }}</td>
                                            <tr><th>Jabatan</th><th>:</th><td>{{ Auth::user()->dt_bidang->nama_kategori }}</td>
                                            <tr><th>Unit Kerja</th><th>:</th><td>{{ Auth::user()->dt_bidang->nama_bidang }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection

