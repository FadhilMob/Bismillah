<?php

namespace App\Http\Controllers;

use App\Models\IntervensiModel;
use App\Models\BidangModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntervensiController extends Controller
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
            $intervensi = IntervensiModel::with('dt_bidangIn', 'dt_userIn')->where('user_id',$users->id)->get();
            // dd($rhk);
             return view('intervensi.index', [
                'intervensi'=>$intervensi
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
        $bidang = BidangModel::get();
        $user = User::get();
        return view('intervensi.create', compact(['bidang', 'user'])); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
               //memasukkan data ke array
               $nama_intervensi = $request->input('nama_intervensi');
               $bidang_id       = $request->input('bidang_id');
               $user_id         = $request->input('user_id');
       
       
               $total = count($nama_intervensi);
       
       
                   //melakukan perulangan input
                   for($i=0; $i<$total; $i++){
       
                       //insert post
                       IntervensiModel::create([
                           'nama_intervensi'     => $nama_intervensi[$i],
                           'bidang_id'     => $bidang_id[$i],
                           'user_id'   => $user_id[$i]
                       ]);
                   }
       
                return redirect()->route('intervensi.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(IntervensiModel $intervensi)
    {
        $intervensi->delete($intervensi->id);
        return redirect()->route('intervensi.index')->with('success', 'Data berhasil dihapus');
    }
}
