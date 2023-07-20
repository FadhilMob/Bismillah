<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RhkModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use PDF;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = Auth::user();
        
        // dd($users->id);
        if($users){
            $laporan = LaporanModel::with('dt_rhkLap', 'dt_userLap')->where('user_id',$users->id)->get();
            // dd($rhk);
             return view('laporan.draft', [
                'laporan'=>$laporan
            ]); 
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $rhk = RhkModel::get();
        return view('laporan.create', compact(['users', 'rhk']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laporan = $request->validate([
            'user_id' => 'nullable',
            'rhk_id' => 'nullable',
            'judul' => 'nullable',
            'latar_belakang' => 'nullable',
            'dasar_hukum' => 'nullable',
            'dasar_pelaksanaan' => 'nullable',
            'waktu_pelaksanaan' => 'nullable',
            'hari' => 'nullable',
            'pukul1' => 'nullable',
            'pukul2' => 'nullable',
            'tempat' => 'nullable',
            'peserta' => 'nullable',
            'tujuan' => 'nullable',
            'identifikasi_masalah' => 'nullable',
            'dokumentasi' => 'nullable',
            'jabatan1' => 'nullable',
            'nama1' => 'nullable',
            'fungsional1' => 'nullable',
            'nip1' => 'nullable',
            'jabatan2' => 'nullable',
            'nama2' => 'nullable',
            'fungsional2' => 'nullable',
            'nip2' => 'nullable',
            'jabatan3' => 'nullable',
            'nama3' => 'nullable',
            'fungsional3' => 'nullable',
            'nip3' => 'nullable',
            'role' => 'required',
            'image' => 'nullable|array'
        ]);


        $laporan = [
            'user_id' => Auth::id(),
            'rhk_id' => $request-> rhk_id,
            'judul' => $request-> judul,
            'latar_belakang' => $request -> latar_belakang,
            'dasar_hukum' => $request -> dasar_hukum,
            'dasar_pelaksanaan' => $request -> dasar_pelaksanaan,
            'waktu_pelaksanaan' => $request ->waktu_pelaksanaan,
            'hari' => $request ->hari,
            'pukul1' => $request ->pukul1,
            'pukul2' => $request ->pukul2,
            'tempat' => $request ->tempat,
            'peserta' => $request ->peserta,
            'tujuan' => $request ->tujuan,
            'identifikasi_masalah' => $request ->identifikasi_masalah,
            'dokumentasi' => $request ->dokumentasi,
            'jabatan1' => $request ->jabatan1,
            'nama1' => $request ->nama1,
            'fungsional1' => $request ->fungsional1,
            'nip1' => $request ->nip1,
            'jabatan2' => $request ->jabatan2,
            'nama2' => $request ->nama2,
            'fungsional2' => $request ->fungsional2,
            'nip2' => $request ->nip2,
            'jabatan3' => $request ->jabatan3,
            'nama3' => $request ->nama3,
            'fungsional3' => $request ->fungsional3,
            'nip3' => $request ->nip3,
            'role' => $request ->role,
            'image' => $request ->image
        ];

                //memang fungsi array(kayaknya) makanya ditambah s
                $images = [];
                if ($request->hasFile('image')) {
                    foreach ($laporan['image'] as $image) {
                        $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
                        $image_path =  $image->storeAs('image', $fileName,'public');
                        array_push($images, $image_path);
                        
                    }
                }
                
                $laporan['image'] = $images;
        // LaporanModel::create($laporan);
        $laporan = LaporanModel::create ( $laporan);
        return redirect()->route('laporan.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanModel  $laporanModel
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanModel $laporan)
    {
        return view('laporan.detail_laporan', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanModel  $laporanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanModel $laporan)
    {
        return view('laporan.edit', compact(['laporan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaporanModel  $laporanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $laporan = LaporanModel::find($id);
        // $data=$request->all();
            // menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('image');
        // if($file != '') {

            // nama file
        // $nama_file = time()."_".$file->getClientOriginalName();
        // $tujuan_upload = 'storage/laporan';
            // upload file
        // $file->move($tujuan_upload,$nama_file);
        // $data['image'] = $nama_file;
        // File::delete('storage/laporan/'.$laporan->image);
        // }
        $laporan->judul = $request->judul;
        $laporan->latar_belakang = $request->latar_belakang;
        $laporan->dasar_hukum = $request->dasar_hukum;
        $laporan->dasar_pelaksanaan = $request->dasar_pelaksanaan;
        $laporan->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $laporan->hari = $request->hari;
        $laporan->pukul1 = $request->pukul1;
        $laporan->pukul2 = $request->pukul2;
        $laporan->tempat = $request->tempat;
        $laporan->peserta = $request->peserta;
        $laporan->tujuan = $request->tujuan;
        $laporan->identifikasi_masalah = $request->identifikasi_masalah;
        $laporan->dokumentasi = $request->dokumentasi;
        $laporan->role = $request->role;
        $laporan->jabatan1 = $request->jabatan1;
        $laporan->nama1 = $request->nama1;
        $laporan->fungsional1 = $request->fungsional1;
        $laporan->nip1 = $request->nip1;
        $laporan->jabatan2 = $request->jabatan2;
        $laporan->nama2 = $request->nama2;
        $laporan->fungsional2 = $request->fungsional2;
        $laporan->nip2 = $request->nip2;
        $laporan->jabatan3 = $request->jabatan3;
        $laporan->nama3 = $request->nama3;
        $laporan->fungsional3 = $request->fungsional3;
        $laporan->nip3 = $request->nip3;
        $laporan->save();
        // $laporan->update($data);
        return redirect()->route('laporan.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanModel  $laporanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanModel $laporan)
    {
        $laporan->delete($laporan->id);
        return redirect()->route('laporan.index')->with('success', 'Data berhasil dihapus');
    }

    public function createPDF()
    {
        $laporan = LaporanModel::all();
        $pdf = PDF::loadView('laporan.templatePDF', compact('laporan'));
        // download PDF file with download method
        return $pdf->stream();
    }

    //PRINT TABEL
    public function report($id){
        $laporan = LaporanModel::find($id);
        $pdf = PDF::loadview('laporan.report',['laporan'=>$laporan])->setOptions(['chroot'=> realpath(base_path())]);
        return $pdf->stream();
    }
}
