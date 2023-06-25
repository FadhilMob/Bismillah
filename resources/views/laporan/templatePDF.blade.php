<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Rak</th>
                {{-- <th scope="col">Kategori</th>
                <th scope="col">ISBN</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th> --}}
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $key => $laporan)
            <tr align="center">
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $laporan->judul }}</td>
                {{-- <td>{{ $buku->kategoribuku->kategori_buku }}</td>
                <td>{{ $buku->kode_isbn }}</td>
                <td>{{ $buku->judul_buku }}</td>
                <td>{{ $buku->pengarang }}</td> --}}
                <td> 
                    <img width="150px" height="200px" src="{{ public_path('/storage/laporan/'.$laporan->image) }}">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>  
</body>
</html>