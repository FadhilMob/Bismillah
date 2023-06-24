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
        $data = $this->validate($request, [
            'nama_rhk' => 'required',
            'bidang_id' => 'required',
            'user_id' => 'required',
            'intervensi_id' => 'required',
        ]);
        RhkModel::create($data);
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
    public function destroy($id)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
