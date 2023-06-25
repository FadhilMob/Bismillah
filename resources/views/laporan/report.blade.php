<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <style type="text/css">
        body
        {
            font-family: 'Times New Roman';
    
            .paragraph{
                font-size: 14px;
                text-align: justify;
                text-justify: inter-word;
            }

            .jarak{
                line-height:2;
            }
    
            .font{
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div style="margin: 1,5cm 2cm 1,5cm 2cm">
    {{-- KOP SURAT --}}
    <table border="0" width = "703px">
        <tr>
            <td></td>
            <td width ="50"><img src="{{ ('assets/img/logo.jpeg') }}" width="78" height="100"></td>
            <td>
                <center>
                    <font size="4"><b>PEMERINTAH KOTA BATU</b></font><BR>
                    <font size="4"><b>DINAS LINGKUNGAN HIDUP</b></font><BR>
                    <font size="2">Balaikota Among Tani Pemerintah Kota Batu Gedung C Lantai 2</font><BR>
                    <font size="2">Jl. Panglima Sudirman 507  Telp. / Fax. 0341-513265</font><BR>
                    <font size="2">Kota Batu 65313</font><BR>
                </center>
            </td>
            <td width ="50"></td>
            <td></td>
        </tr>
    </table>

    <hr style="border: 0.5px solid black; margin: 10px 5px 10px 43px;">

    {{-- // JUDUL --}}
    <div class="judul" class="paragraph">
        <center>
        <p style="margin: 2"><b>LAPORAN UNSUR PEMANTAUAN KUALITAS LINGKUNGAN SUB UNSUR</b>
            <br><b>PERENCANAAN PEMANTAUAN PERLINDUNGAN DAN PENGELOLAAN</b><br><b>LINGKUNGAN HIDUP – </b>
            <br><b>{{ $laporan->judul }}</b>
        </p>
        </center>
    </div>

    {{-- // I. LATAR BELAKANG (KOSONGKAN) --}}
    <div class="paragraph" class="jarak">
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>I.</b></td>
                <p style="margin: 0 0 0 0"><b>Latar Belakang</b></p>
            </tr>
        </table>
            <div style="margin: 0 17 5 57">{!!$laporan->latar_belakang!!} <br></div>
    </div>

    {{-- II. DASAR HUKUM --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b> II.</b></td>
                <p style="margin: 0 0 0 0"><b> Dasar Hukum</b></p>
            </tr>
        </table>
        <div style="margin: 0 17 5 57">{!! $laporan->dasar_hukum !!}</div>
    </div>

    {{-- III. DASAR PELAKSANAAN KEGIATAN --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>III.</b></td>
                <p style="margin: 0 0 0 0"><b>Dasar Pelaksanaan Kegiatan</b></p>
            </tr>
        </table>
        <p style="margin:  0 17 5 57">{{$laporan->dasar_pelaksanaan}}</p>
    </div>

    {{-- IV. WAKTU --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>IV.</b></td>
                <p style="margin: 0 0 0 0"><b>Waktu Pelaksanaan</b></p>
            </tr>
        </table>
        <p style="margin:  0 17 5 57">{{$laporan->waktu_pelaksanaan}}</p>

        {{-- // INPUTAN WAKTU --}}
        <table border="0" width="700px">
            <tr>
                <td width = "65"></td>
                <td colspan="2">Waktu, Tanggal</td>
                <td width = "10">:</td>
                <td width ="300">{{ \Carbon\Carbon::parse($laporan->hari)->translatedFormat('l\, d F Y') }}</td>
            </tr>
        </table>
        {{-- INPUTAN PUKUL --}}
        <table border="0" width="700px">
            <tr>
                <td width = "65"></td>
                <td colspan="2">Pukul</td>
                <td width = "10">:</td>
                <td width ="300">{{ $laporan->pukul1 }} - {{ $laporan->pukul2 }}</td>
            </tr>
        </table>
        {{-- INPUTA TEMPAT  --}}
        <table class="row" border="0" width="700px" style="margin-left: 0">
            <tr>
                <td width="65"></td>
                <td>Tempat</td>
                <td width="10">:</td>
                <td rowspan="2" width="300">{{ $laporan->tempat }}</td>
            </tr>
        </table>
        {{-- INPUTAN PESERTA  --}}
        <table class="row" border="0" width="700px" style="margin-left: 0">
            <tr>
                <td width="65"></td>
                <td>Peserta</td>
                <td width="10">:</td>
                <td rowspan="3" width="300"><div>{!!$laporan->peserta!!}</div></td>
            </tr>
        </table>
    </div>

    {{-- // V. TUJUAN --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>V.</b></td>
                <p style="margin: 0 0 0 0"><b>Tujuan</b></p>
            </tr>
        </table>
        <p style="margin: 0 17 5 57">{{ $laporan->tujuan }}
        </p>
    </div>

    {{-- // VI. IDENTIFIKASI MASALAH (KOSONGKAN) --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>VI.</b></td>
                <p style="margin: 0 0 0 0"><b>Identifikasi Masalah</b></p>
            </tr>
        </table>
        <div style="margin: 0 17 5 63">{!! $laporan->identifikasi_masalah !!} <br>
        </div>
    </div>

    {{-- // VII. DOKUMENTASI --}}
    <div class="paragraph" class="jarak"><br>
        <table border="0" width="650px">
            <tr>
                <td width="14"></td>
                <td width="35"><b>VII.</b></td>
                <p style="margin: 0 0 0 0"><b>Dokumentasi</b></p>
            </tr>
        </table>
        <p style="margin: 0 17 5 57">Berikut dokumentasi identifikasi permasalahan lingkungan :
        </p>
        
        {{-- // INPUTAN --}}
        <table border="0" width="650px">
            <tr>
                <td width = "57"></td>
                <div>{!! $laporan->dokumentasi !!}<br></div>
            </tr>
        </table>
        <p style="margin: 0 17 5 57">Laporan ini disusun sebagai salah satu dokumen pendukung dalam rangka pertanggungjawaban pelaksanaan kegiatan serta dapat digunakan sebagaimana mestinya
        </p>
    </div>

    {{-- TANDA TANGAN --}}
    <div class="judul" class="paragraph"><br><br>
        <table class="row" border="0" width="650px" style="margin-left: 30">
            <tr>
                <td width="300px"><center><b>{{ $laporan->jabatan1 }}</b></center></td>
                <td width="50px"></td>
                <td width="300px"><center><b>{{ $laporan->jabatan2 }}</b></center></td>
            </tr><br><br><br><br>
            <tr>
                <td width="300px"><center><b><u>{{ $laporan->nama1 }}</b></u></center></td>
                <td width="50px"></td>
                <td width="300px"><center><b><u>{{ $laporan->nama2 }}</b></u></center></td>
            </tr>
            <tr>
                <td width="300px"><center>{{ $laporan->fungsional1 }}</center></td>
                <td width="50px"></td>
                <td width="300px"><center>{{ $laporan->fungsional2 }}</center></td>
            </tr>
            <tr>
                <td width="300px"><center>NIP. {{ $laporan->nip1 }}</center></td>
                <td width="50px"></td>
                <td width="300px"><center>NIP. {{ $laporan->nip2 }}</center></td>
            </tr>
        </table>
        <table class="row" border="0" width="660px" style="margin-left: 30"><br><br>
            <tr>
                <td width="660px"><center>Mengetahui,</center></td>
            </tr>
            <tr>
                <td width="660px"><div style="font-weight: bold"><center>{!! $laporan->jabatan3 !!}</center></div></td>
            </tr><br><br>
            <tr>
                <td width="660px"><center><b><u>{{ $laporan->nama3 }}</b></u> </center></td>
            </tr>
            <tr>
                <td width="660px"><center>{{ $laporan->fungsional3 }}</center></td>
            </tr>
            <tr>
                <td width="660px"><center>NIP. {{ $laporan->nip3 }}</center></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>