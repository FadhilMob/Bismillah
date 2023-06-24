@extends('sb-admin.index')

@section('title')
    | DATA RHK
@endsection
@section('content')
<h2>DATA RHK</h2>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            {{-- TOMBOL TAMBAH --}}
            <a href="rhk/create" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-40">
                     <i class="fas fa-plus"></i>
                </span>
                 <span class="text">Tambah RHK</span>
            </a>

            {{-- ALERT SUKSES --}}
            @if (session()->has('success'))
                 <div class="alert alert-success" role="alert">
                     {{ session('success') }}
                 </div> 
            @endif

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Rencana Hasil Kerja Pimpinan Yang TerInvensi</th>
                            <th scope="col">Rencana Hasil Kerja</th>
                            <!-- <th scope="col">Nama Bidang</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Role</th> 
                            <th scope="col">Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rhk as $key => $rhk)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $rhk->dt_intervensi->nama_intervensi}}</td>
                            <td>{{ $rhk->nama_rhk}}</td>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
