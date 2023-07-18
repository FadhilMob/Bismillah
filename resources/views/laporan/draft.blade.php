@extends('sb-admin.index')

@section('title')
    | DATA ARSIP
@endsection
@section('content')
    <center><h1>ARSIP</h1></center>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
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
                            <th scope="col"><center>No</center></th>
                            <th style="width: 200px" scope="col"><center>Waktu Pelaksanaan</center></th>
                            <th style="width: 750px" scope="col"><center>Judul Kegiatan</center></th>
                            <th style="width: 250px" scope="col"><center>Aksi</center></th>
                            <th style="width: 150px" scope="col"><center> Status Laporan</center></th>
                            <th style="width: 150px"scope="col"><center>Unduh</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporan as $key => $laporan)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ \Carbon\Carbon::parse($laporan->hari)->translatedFormat('l\, d F Y') }}</td>
                            <td>{{ $laporan->judul }}</td>
                            <td align="center">
                                
                                {{-- Tombol Delete --}}
                                <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button style="width: 60px; height: 40px; margin:5px" class="btn btn-danger btn-icon-split" onclick="return confirm('Anda Yakin Menghapus Data Ini?')">
                                <i class="bi bi-trash3"></i>
                                </button>
                                </form>
                                
                                {{-- Tombol Edit --}}
                                <a href="{{ route('laporan.edit',$laporan->id) }}" style="width: 60px; height: 40px; margin:5px " class="btn btn-primary btn-icon-split">
                                <i class="bi bi-pencil-square"></i>
                                </a>
                                
                                {{-- Tombol Detail --}}
                                {{-- <a href="{{ route('laporan.show',$laporan->id) }}" class="btn btn-info btn-circle btn-sm">
                                <i class="bi bi-info-square"></i>
                                </a> --}}
                                
                                {{-- STATUS --}}
                                {{-- <td><center><a href="#" style="width: 100px; height: 50px" class="btn btn-warning btn-icon-split"><center><span style="text-transform: uppercase;"><b>{{$laporan->role}}</b></span></center></a>  
                                </center></td> --}}
                                <td><center>
                                    <a href="#" style="width: 100px; height: 50px" class="btn btn-dark btn-icon-split">
                                        <center><span class="icon text-white-40" style="text-transform: uppercase; color:rgb(255, 234, 0)">
                                            <b>{{$laporan->role}}</b>
                                        </span></center>
                                    </a></center>
                                </td>

                                {{-- CETAK --}}
                                <td><center>
                                    <a href="/laporan/{{ $laporan->id }}/report" style="width: 100px; height: 50px" class="btn btn-success btn-icon-split" target="_blank">
                                        <center><span class="icon text-white-40">
                                            <i class="bi bi-printer-fill"></i>
                                        </span></center>
                                        {{-- <span class="text">CETAK PDF</span> --}}
                                    </a></center>
                                </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
