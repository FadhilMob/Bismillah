@extends('sb-admin.index')

@section('title')
    | DATA ARSIP
@endsection
@section('content')
<h2>DRAFT</h2>
    <div class="card">
        <div class="card-header">
            JUDUL : {{ $laporan->judul }}<br>
            HARI : {{ $laporan->hari }}
        </div>
        <div class="card-body">
         
            <p class="card-text">PUKUL : {{ $laporan->pukul }}</p>
            <p class="card-text">Peserta : {!!$laporan->peserta!!}</p>
            <p><a href="/laporan" class="btn btn-primary mt-4">Kembali</a></p>
            
            {{-- TOMBOL EKSPORT --}}
            <a href="/laporan/{{ $laporan->id }}/report" class="btn bg-kuning btn-icon-split" target="_blank">
                <span class="icon text-white-40">
                    <i class="bi bi-file-earmark-arrow-down-fill"></i>
                </span>
                <span class="text">CETAK PDF</span>
            </a>
        </div>
    </div>
@endsection