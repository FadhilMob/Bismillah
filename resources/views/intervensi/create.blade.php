@extends('sb-admin.index')

@section('title')
    | LAPORAN
@endsection
@section('content')
<h2>Tambah Data RHK Intervensi</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('intervensi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                
                {{-- NAMA --}}
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Nama Intervensi</label>
                    <input type-"text class="form-control @error('nama_intervensi') is-invalid @enderror" name="nama_intervensi" value="{{ old('nama_intervensi')}}">
                    @error('nama_intervensi')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                 </div>
                <label for="exampleInputEmail1" class="form-label mt-4">Kode Bidang</label>
                        <div class="dropdown">
                            <div class="btn-group">
                                <select id="bidang-dropdown" class="form-control" name="bidang_id">
                                    <option value="">-- Pilih Kode Bidang --</option>
                                        @foreach ($bidang as $data) 
                                    <option value="{{$data->id}}">
                                        {{$data->nama_bidang}} -- {{$data->nama_kategori}}
                                    </option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        @error('bidang_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <label for="exampleInputEmail1" class="form-label mt-4">Kode ASN</label>
                        {{-- dropdown asn --}}
                        <div class="dropdown">
                            <div class="btn-group">
                                    <select id="user-dropdown" class="form-control" name="user_id">
                                        <option value="">-- Pilih Kode ASN --</option>
                                        @foreach ($user as $data) 
                                        <option value="{{$data->id}}">
                                            {{$data->username}} - {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                {{-- TOMBOL TAMBAH --}}   
                <button type="submit" value="submit" name="add" class="btn btn-md btn-success mt-2">SAVE</button>
                {{-- TOMBOL BACK --}}
                <a href="/intervensi" class="btn btn-md btn-secondary mt-2">BACK
                    {{-- <span class="text">Tambah</span> --}}
                </a>
            </form>
        </div>
    </div>
@endsection