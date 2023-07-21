@extends('sb-admin.admin-index')

@section('title')
    | DATA ADMIN & USERS
@endsection
@section('content')
<h2>DATA ADMIN & USERS</h2>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            {{-- TOMBOL TAMBAH --}}
            @if (Route::has('register'))
            <a href="{{ route('admin.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-40">
                     <i class="fas fa-plus"></i>
                </span>
                 <span class="text">Tambah data User dan Admin</span>
            </a>
            @endif
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
                            <th scope="col">Username</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Nama Bidang</th>
                            <th scope="col">Sub Bidang</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $key => $s)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $s->username }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->dt_Bidang->nama_bidang}}</td>
                            <td>{{ $s->dt_Bidang->nama_kategori}}</td>
                            <td>{{ $s->email }}</td>
                            <td>{{ $s->role }}</td>
                        </td>
                        <td align="center">
                                {{-- <div class="btn-group">
                                    <a href="" class="btn btn-primary mr-2">Edit</a>
                                    <a href="" class="btn btn-danger mr-2">Hapus</a>
                                </div>
                            </td> --}}                            
                                {{-- Tombol Edit --}}
                                <a href="{{ route('admin.edit',$s->id) }}" class="btn btn-primary btn-circle btn-sm">
                                <i class="bi bi-pencil-square"></i>
                                </a>

                                {{-- Tombol Delete --}}
                                <form action="{{ route('admin.destroy', $s->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda Yakin Menghapus Data Ini?')">
                                <i class="bi bi-trash3"></i>
                                </button>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
