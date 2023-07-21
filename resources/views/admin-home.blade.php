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
                                    DATA USER ASN</div>
                                <center><div class="h3 mb-0 font-weight-bold text-gray-800">{{$user}}</div></center>
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
                                    DATA ADMIN</div>
                                <center><div class="h3 mb-0 font-weight-bold text-gray-800">{{$admin}}</div></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>
@endsection

