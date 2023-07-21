<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom fonts for this template-->
    <link href="vendor/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="vendor/sb-admin/css/sb-admin-2.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('vendor/sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- include libraries(jQuery, bootstrap) -->
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

     
 
     {{-- DATA TABLES --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  </head>
  <body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('sb-admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Content -->
            <div id="content">

                <!-- Topbar -->
               @include('sb-admin.topbar')
                <!-- End of Topbar -->

                <!-- Main Content  -->
                @section('title')
                    TAMBAH | LAPORAN
                @endsection

                
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">

                            <div class="container">
                                <center><h2>TAMBAHKAN LAPORAN </h2></center>

                            <!-- {{-- RHK --}}
                            <div class="form-group mt-4">
                                <label for="exampleInputEmail1"><h4>RHK</h4></label>
                                {{-- dropdown RHK --}}
                                <div class="dropdown">
                                    <div class="btn-group">
                                            <select id="rhk-dropdown" class="form-control" name="rhk_id">
                                                <option value="">-- Pilih RHK --</option>
                                                @foreach ($rhk as $data) 
                                                <option value="{{$data->id}}">
                                                    {{$data->nama_rhk}}
                                                </option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <label for=""></label>
                            <label for=""></label> -->

                                 {{-- JUDUL --}}
                            <div class="form-group mt-4">
                                <label for="exampleInputEmail1"><h4>Judul</h4></label>
                                <textarea rows="3" class="form-control @error('judul') is-invalid @enderror" name="judul" >{{ old('judul')}}</textarea>
                                {{-- PESAN ERROR --}}
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <label for=""></label>
                            <label for=""></label>

                            {{-- Image --}}
                            <div>
                            <label for="image"><h4>Dokumentasi</h4><h6 style="color: red"> *WAJIB diisi dan hanya bisa input diawal, tidak bisa diedit</h6></label>
                            <input type="file" class="form-control" name="image[]" placeholder="" multiple/>
                            <label for=""></label>
                            <label for=""></label>
                            </div>

                            {{-- HARI --}}
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Tanggal Kegiatan</label>
                                    <input type="date" class="form-control @error('hari') is-invalid @enderror" name="hari" value="{{ old('hari')}}">
                                    {{-- PESAN ERROR --}}
                                    @error('hari')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                            {{-- PUKUL --}}
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Mulai Pukul</label>
                                <input type="time" class="form-control @error('pukul1') is-invalid @enderror" name="pukul1" value="{{ old('pukul1')}}">
                                {{-- PESAN ERROR --}}
                                @error('pukul1')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Sampai Pukul</label>
                                <input type="time" class="form-control @error('pukul2') is-invalid @enderror" name="pukul2" value="{{ old('pukul2')}}">
                                
                                @error('pukul2')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            </div>
                            <label for=""></label>
                            <label for=""></label>

                            {{-- LATAR BELAKANG --}}
                            <div class="form-group">
                                <form action="#">
                                <label><h4>I. Latar Belakang</h4></label>
                                <textarea id="latar_belakang" class="form-control @error('latar_belakang') is-invalid @enderror" rows="4" name="latar_belakang">{{old('latar_belakang')}}</textarea>
                                @error('latar_belakang')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </form>
                            </div>
                            <label for=""></label>
                            <label for=""></label>

                            {{-- DASAR HUKUM --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1"><h4>II. Dasar Hukum</h4></label>
                                <textarea id="dasar_hukum" class="form-control @error('dasar_hukum') is-invalid @enderror" name="dasar_hukum" >{{ old('dasar_hukum')}}</textarea>
                                {{-- PESAN ERROR --}}
                                @error('dasar_hukum')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <label for=""></label>
                            <label for=""></label>

                            {{-- DASAR PELAKSANAAN --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1"><h4>III. Dasar Pelaksanaan</h4></label>
                                <textarea rows="3" id="dasar_pelaksanaan" class="form-control @error('dasar_pelaksanaan') is-invalid @enderror" name="dasar_pelaksanaan" >{{ old('dasar_pelaksanaan')}}</textarea>
                                {{-- PESAN ERROR --}}
                                @error('dasar_pelaksanaan')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <label for=""></label>
                            <label for=""></label>

                            {{-- WAKTU PELAKSANAAN --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1"><h4>IV. Waktu Pelaksanaan</h4></label>
                                <textarea id="waktu_pelaksanaan" class="form-control @error('waktu_pelaksanaan') is-invalid @enderror" name="waktu_pelaksanaan" >{{ old('waktu_pelaksanaan')}}</textarea>
                                {{-- PESAN ERROR --}}
                                @error('waktu_pelaksanaan')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <label for=""></label>

                            {{-- TEMPAT --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type-"text class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat')}}">
                                {{-- PESAN ERROR --}}
                                @error('tempat')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <label for=""></label>

                            {{-- PESERTA --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Peserta</label>
                                <textarea id="peserta" class="form-control @error('peserta') is-invalid @enderror" name="peserta" >{{ old('peserta')}}</textarea>
                                {{-- PESAN ERROR --}}
                                @error('peserta')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <label for=""></label>
                            <label for=""></label>
                 
                            {{-- TUJUAN --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1"><h4>V. Tujuan</h4></label>
                                <textarea rows="8" id="tujuan" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" >{{ old('tujuan')}}</textarea>
                                {{-- PESAN ERROR --}}
                                @error('tujuan')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <label for=""></label>
                            <label for=""></label>

                            {{-- IDENTIFIKASI MASALAH --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1"><h4> VI. Identifikasi Masalah</h4></label>
                                <textarea id="summernote" class="form-control @error('identifikasi_masalah') is-invalid @enderror" name="identifikasi_masalah" >{{ old('identifikasi_masalah')}}</textarea>
                                {{-- PESAN ERROR --}}
                                @error('identifikasi_masalah')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <label for=""></label>
                            <label for=""></label>

                            {{-- DOKUMENTASI --}}
                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1"><h4>VII. Dokumentasi (Foto)</h4></label>
                                <textarea id="dokumentasi" class="form-control @error('dokumentasi') is-invalid @enderror" name="dokumentasi" >{{ old('dokumentasi')}}</textarea> --}}
                                {{-- PESAN ERROR --}}
                                {{-- @error('dokumentasi')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div> --}}

                            {{-- JABATAN KIRI --}}
                            <div class="form-row">
                                <div class="form-group col-md-4" style="text-align: center">
                                    <label for="exampleInputEmail1"><h4>Tanda Tangan</h4></label>
                                    <input style="text-align: center" type="text" class="form-control @error('jabatan1') is-invalid @enderror" name="jabatan1" placeholder="Jabatan" value="{{ old('jabatan1')}}">
                                    
                                    @error('jabatan1')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4"></div>

                            {{-- JABATAN KANAN --}}
                            <div class="form-group col-md-4" style="text-align: center">
                                <label for="exampleInputEmail1"><h4>Tanda Tangan</h4></label>
                                <input style="text-align: center" type="text" class="form-control @error('jabatan2') is-invalid @enderror" name="jabatan2" placeholder="Jabatan" value="{{ old('jabatan2')}}">
                                @error('jabatan2')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            </div>

                            {{-- NAMA, FUNGSIONAL, NIP KIRI --}}
                            <div class="form-row">
                                <div class="form-group col-md-4" style="text-align: center">
                                    <label for="exampleInputEmail1"></label>
                                    <input style="text-align: center" type="text" class="form-control @error('nama1') is-invalid @enderror" name="nama1" placeholder="Nama" value="{{ old('nama1')}}">
                                    <input style="text-align: center" type="text" class="form-control @error('fungsional1') is-invalid @enderror" name="fungsional1" placeholder="Fungsional" value="{{ old('fungsional1')}}">
                                    <input style="text-align: center" type="text" class="form-control @error('nip1') is-invalid @enderror" name="nip1" placeholder="NIP" value="{{ old('nip1')}}">
                                </div>

                                <div class="form-group col-md-4"></div>

                            {{-- NAMA, FUNGSIONAL, NIP KANAN --}}
                            <div class="form-group col-md-4" style="text-align: center">
                                <label for="exampleInputEmail1"></label>
                                <input style="text-align: center" type="text" class="form-control @error('nama2') is-invalid @enderror" name="nama2" placeholder="Nama" value="{{ old('nama2')}}">
                                <input style="text-align: center" type="text" class="form-control @error('fungsional2') is-invalid @enderror" name="fungsional2" placeholder="Fungsional" value="{{ old('fungsional2')}}">
                                <input style="text-align: center" type="text" class="form-control @error('nip2') is-invalid @enderror" name="nip2" placeholder="NIP" value="{{ old('nip2')}}">
                            </div>
                            </div>

                            {{-- JABATAN BAWAH TENGAH --}}
                            <center><div class="form-group col-md-4" style="text-align: center">
                                <label for="exampleInputEmail1"><h4>Tanda Tangan</h4></label>
                                <textarea id="jabatan3" style="text-align: center" type="text" class="form-control @error('jabatan3') is-invalid @enderror" name="jabatan3" placeholder="Jabatan" value="{{ old('jabatan3')}}"></textarea>
                                
                                @error('jabatan3')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div></center>

                            {{-- NAMA, FUNGSIONAL, NIP BAWAH TENGAH --}}
                            <center><div class="form-group col-md-4" style="text-align: center">
                                <label for="exampleInputEmail1"><b></b></label>
                                <input style="text-align: center" type="text" class="form-control @error('nama3') is-invalid @enderror" name="nama3" placeholder="Nama" value="{{ old('nama3')}}">
                                <input style="text-align: center" type="text" class="form-control @error('fungsional3') is-invalid @enderror" name="fungsional3" placeholder="Fungsional" value="{{ old('fungsional3')}}">
                                <input style="text-align: center" type="text" class="form-control @error('nip3') is-invalid @enderror" name="nip3" placeholder="NIP" value="{{ old('nip3')}}">
                            </div></center>
                            
                            {{-- STATUS --}}
                            <div class="form-group row">
                                <label for="role" class="form-label text-mdright"><h4>STATUS</h4></label>
                                    <div class="col-md-6" value="{{ __('Role') }}">
                                        <select class="form-control" name="role">
                                            <option style="background-color: yellow" value="BELUM">Belum</option>
                                            <option style="background-color: rgb(38, 255, 0)" value="SELESAI">Selesai</option>
                                            
                                        </select>
                                    </div>
                                </div>

                            {{-- TOMBOL TAMBAH --}}   
                            <button type="submit" value="submit" name="add" class="btn btn-md btn-success mt-5">SAVE</button>
                            {{-- TOMBOL BACK --}}
                            <a href="/dashboard" class="btn btn-md btn-secondary mt-5">BACK
                                {{-- <span class="text">Tambah</span> --}}
                            </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- End of Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aplikasi Perpustakaan 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
        {{-- DATA TABLES --}}
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <script>
            let table = new DataTable('#myTable');
        </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#latar_belakang').summernote({
            tabsize: 1,
            height: 400,
            toolbar: [
                ['style', ['clear', 'bold', 'italic', 'underline']],       
                ['para', ['ul', 'ol']],
                ['insert', ['picture']]
            ],
            callbacks: {
        onPaste: function (e) {
            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                e.preventDefault();

                // Firefox fix
                setTimeout(function () {
                    document.execCommand('insertText', false, bufferText);
                }, 10);
            }
         }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#dasar_hukum').summernote({
            tabsize: 1,
            height: 100,
            toolbar: [
                ['style', ['clear', 'bold', 'italic', 'underline']],       
                ['para', ['ul', 'ol']],
                ['insert', ['picture']]
            ],
            callbacks: {
        onPaste: function (e) {
            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                e.preventDefault();

                // Firefox fix
                setTimeout(function () {
                    document.execCommand('insertText', false, bufferText);
                }, 10);
            }
         }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#peserta').summernote({
            tabsize: 1,
            height: 100,
            toolbar: [
                ['style', ['clear', 'bold', 'italic', 'underline']],       
                ['para', ['ul', 'ol']],
                ['insert', ['picture']]
            ],
            callbacks: {
        onPaste: function (e) {
            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                e.preventDefault();

                // Firefox fix
                setTimeout(function () {
                    document.execCommand('insertText', false, bufferText);
                }, 10);
            }
         }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
            tabsize: 1,
            height: 800,
            toolbar: [
                ['style', ['clear', 'bold', 'italic', 'underline']],       
                ['para', ['ul', 'ol']],
                ['insert', ['picture']]
            ],
            callbacks: {
        onPaste: function (e) {
            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                e.preventDefault();

                // Firefox fix
                setTimeout(function () {
                    document.execCommand('insertText', false, bufferText);
                }, 10);
            }
         }
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            $('#latar_belakang').summernote();
            $('#dasar_hukum').summernote();
            $('#peserta').summernote();
            $('#summernote').summernote();

            $('#dasar_pelaksanaan').summernote();
            $('#waktu_pelaksanaan').summernote();
            $('#tujuan').summernote();
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#dokumentasi').summernote({
            placeholder: 'Masukkan Foto',
            tabsize: 1,
            height: 400,
            toolbar: [
                ['insert', ['picture']]
            ],
            callbacks: {
        onPaste: function (e) {
            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                e.preventDefault();

                // Firefox fix
                setTimeout(function () {
                    document.execCommand('insertText', false, bufferText);
                }, 10);
            }
         }
            });
        });
      </script>
    <script>
        $(document).ready(function() {
            $('#jabatan3').summernote({
            placeholder: 'Jabatan (a.n KEPALA DINAS LINGKUNGAN HIDUP - SEKRETARIS)',
            tabsize: 2,
            height: 80,
            toolbar: [
               
            ],
            callbacks: {
        onPaste: function (e) {
            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                e.preventDefault();

                // Firefox fix
                setTimeout(function () {
                    document.execCommand('insertText', false, bufferText);
                }, 10);
            }
         }
            });
        });
      </script>
  </body>
</html>


