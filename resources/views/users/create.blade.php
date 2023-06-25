@extends('sb-admin.admin-index')

@section('content')
        <h2>Tambah Data Admin & Users</h2>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="exampleInputEmail1" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    

                        <div class="row mb-3">
                            <label for="bidang_id" class="col-md-4 col-form-label text-md-end">{{ __('Kode Bidang') }}</label>

                            <div class="col-md-6">
                                <div class="dropdown">
                                <div class="btn-group">
                                        <select id="bidang-dropdown" class="form-control" name="bidang_id">
                                            <option value="">-- Pilih Kode Bidang --</option>
                                            @foreach ($bidang as $data) 
                                            <option value="{{$data->id}}">
                                                {{$data->nama_bidang}} --  {{$data->nama_kategori}}
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
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                      <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="role">
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                </select>
                            </div>
                        </div> 
                            {{-- TOMBOL TAMBAH --}}   
                            <button style="width: 90px; height: 40px" type="submit" value="submit" name="add" class="btn btn-md btn-success mt-2">SAVE</button>
                            {{-- TOMBOL BACK --}}
                            <a href="/users" style="width: 90px; height: 40px" class="btn btn-md btn-secondary mt-2">BACK
                                {{-- <span class="text">Tambah</span> --}}
                            </a>
                    </form>
                </div>
            </div>
@endsection
