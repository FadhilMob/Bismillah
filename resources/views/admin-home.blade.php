@extends('sb-admin.admin-index')

@section('title')
   SMART PEKAN
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1>SELAMAT DATANG DI DASHBOARD ADMIN SMART PEKAN</h1>
        <p class="mb-10"></p>

        <!-- CARD COUNT BUKU -->
        <div class="row">
            <p class="mb-4 d-block">
            <!-- COUNT LAPORAN SELESAI -->
            <div class="col-xl-6 col-md-6 mb-6">
                <div class="card border-bottom-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl-center font-weight-bold text-success text-uppercase mb-1">
                                    DATA USER</div>
                                <center><div class="h3 mb-0 font-weight-bold text-gray-800">33</div></center>
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
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    DATA ADMIN</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">51</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-book fa-2x text-gray-300"></i>
                            </div>
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
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary    text-uppercase mb-1">
                                    JUMLAH RHK</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">51</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- COUNT ARSIP -->
            <div class="col-xl- col-md-6 mb-6">
                <div class="card border border-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    JUMLAH ARSIP</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">51</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>
@endsection

