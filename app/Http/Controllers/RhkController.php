<?php

namespace App\Http\Controllers;

use App\Models\RhkModel;
use App\Models\BidangModel;
use App\Models\IntervensiModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RhkController extends Controller
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
            $rhk = RhkModel::with('dt_bidang', 'dt_user')->where('user_id',$users->id)->get();
            // dd($rhk);
             return view('rhk.index', [
                'rhk'=>$rhk
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
        $intervensi = IntervensiModel::get();
        $bidang = BidangModel::get();
        $user = User::get();
        return view('rhk.create', compact(['intervensi', 'user', 'bidang'])); 
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
        $nama_rhk            = $request->input('nama_rhk');
        $bidang_id           = $request->input('bidang_id');
        $intervensi_id       = $request->input('intervensi_id');
        $user_id             = $request->input('user_id');


        $total = count($nama_rhk);


            //melakukan perulangan input
            for($i=0; $i<$total; $i++){

                //insert post
                RhkModel::create([
                    'nama_rhk'     => $nama_rhk[$i],
                    'bidang_id'     => $bidang_id[$i],
                    'intervensi_id'     => $intervensi_id[$i],
                    'user_id'   => Auth::id()
                ]);
            }

         return redirect()->route('rhk.index')->with('success', 'Data berhasil disimpan');
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
    public function destroy(RhkModel $rhk)
    {
        $rhk->delete($rhk->id);
        return redirect()->route('rhk.index')->with('success', 'Data berhasil dihapus');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
