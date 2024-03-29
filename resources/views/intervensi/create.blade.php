<!DOCTYPE html>
<html lang="en">
    @section ('intervensi.create', 'active')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

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

    {{-- DATA TABLES --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  


</head>

<body id="page-top">

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
                <div class="container-fluid">
                    @section('title')
                        | DATA INTERVENSI PIMPINAN
                    @endsection
                    <h2>Tambah Data RHK Intervensi</h2>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('intervensi.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if(Session::has('success'))
                                        <div class="alert alert-success text-center">
                                            <p>{{ Session::get('success')}}</p>
                                        </div>
                                    @endif

                                    <tr>
                                        <table class="table table-bordered" id="table">
                                            {{-- Data Intervensi--}}
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <td>
                                                            <label for="exampleInputEmail1">Data Intervensi</label>
                                                                <input type="text" class="form-control @error('nama_intervensi') is-invalid @enderror" name="nama_intervensi[]" value="{{ old('nama_intervensi')}}">
                                                                    {{-- PESAN ERROR --}}
                                                                    @error('nama_intervensi')
                                                                        <div class="invalid-feedback">
                                                                            {{$message}}
                                                                        </div>
                                                                    @enderror
                                                        </td>
                                        
                                            {{-- Bidang --}}
                                                    <div class="form-group col-md-3">
                                                        <td>
                                                            <label for="exampleInputEmail1" class="form-label mt-10">Kode Bidang</label>
                                                                <div class="dropdown">
                                                                    <div class="btn-group">
                                                                        <select id="bidang-dropdown" class="form-control" name="bidang_id[]">
                                                                            <option value="">-- Pilih Kode Bidang --</option>
                                                                                @foreach ($bidang as $data) 
                                                                            <option value="{{$data->id}}">
                                                                                {{$data->nama_bidang}} -- {{$data->nama_kategori}}
                                                                            </option>
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                    {{-- PESAN ERROR --}}
                                                                    @error('bidang')
                                                                        <div class="invalid-feedback">
                                                                            {{$message}}
                                                                        </div>
                                                                    @enderror
                                                        </td>
                                                    </div>
                                                </div>

                                                <td>
                                                    <div class="form-group col-md-3">
                                                    <label for="exampleInputEmail1" class="form-label mt-8"></label>
                                                    <button type="button" name="add" id="add" class="btn btn-success">Tambah</button>
                                                
                                                </td>
                                        </table>
                                        </tr>
                                        {{-- TOMBOL TAMBAH --}}   
                                        <button type="submit" value="submit" name="add" class="btn btn-md btn-primary mt-2">SAVE</button>
                                        {{-- TOMBOL BACK --}}
                                        <a href="/intervensi" class="btn btn-md btn-secondary mt-2">BACK
                                            {{-- <span class="text">Tambah</span> --}}
                                        </a>
                                    </form>
                                </div>
                </div>
            </div>
        </div>
            <!-- End of Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SMART-PEKAN 2023</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vendor/sb-admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/sb-admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="vendor/sb-admin/js/demo/chart-area-demo.js"></script>
    <script src="vendor/sb-admin/js/demo/chart-pie-demo.js"></script>

    {{-- DATA TABLES --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script> 
    <script>
        var i=0;
        $('#add').click(function(){
            ++i;
            $('#table').append(
                `<tr>
                {{-- Data Intervensi--}}
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <td>
                                    <label for="exampleInputEmail1">Data Intervensi</label>
                                         <input type="text" class="form-control @error('nama_intervensi') is-invalid @enderror" name="nama_intervensi[]" value="{{ old('nama_intervensi')}}">
                                    {{-- PESAN ERROR --}}
                                    @error('nama_intervensi')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </td>
                
                            {{-- Bidang --}}
                                <div class="form-group col-md-3">
                                    <td>
                                    <label for="exampleInputEmail1" class="form-label mt-10">Kode Bidang</label>
                                        <div class="dropdown">
                                            <div class="btn-group">
                                                <select id="bidang-dropdown" class="form-control" name="bidang_id[]">
                                                    <option value="">-- Pilih Kode Bidang --</option>
                                                        @foreach ($bidang as $data) 
                                                    <option value="{{$data->id}}">
                                                        {{$data->nama_bidang}} -- {{$data->nama_kategori}}
                                                    </option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    {{-- PESAN ERROR --}}
                                    @error('bidang')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    </td>
                                </div>
    
                            {{-- User --}}
                                <div class="form-group col-md-3">
                                    <td>
                                    <label for="exampleInputEmail1" class="form-label mt-10">Kode ASN</label>
                                        <div class="dropdown">
                                            <div class="btn-group">
                                                    <select id="user-dropdown" class="form-control" name="user_id[]">
                                                        <option value="">-- Pilih Kode ASN --</option>
                                                        @foreach ($user as $data) 
                                                        <option value="{{$data->id}}">
                                                            {{$data->username}} - {{$data->name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                    {{-- PESAN ERROR --}}
                                    @error('users')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    </td>
                                </div>
                            </div>
                    <td>
                        <div class="form-group col-md-3">
                        <label for="exampleInputEmail1" class="form-label mt-10"></label>
                        <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                    </td>
                </tr>`);            
        });

        $(document).on('click','.remove-table-row', function(){
            $(this).parents('tr').remove();
        });
    </script>
    
</body>

</html>