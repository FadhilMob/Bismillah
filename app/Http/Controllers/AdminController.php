<?php

namespace App\Http\Controllers;

use App\Models\BidangModel;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::with('dt_Bidang')->get();
        return view('admin.index',[
            'admin'=>$admin
        ]);
    }

    public function adminHome(){
            $admin = User::with('id')->where('role','admin')->count();
            $user = User::with('id')->where('role','user')->count();

            $dashboardAdmin=User::get();

            return view('admin-home',[
                'admin' => $admin,
                'user' => $user,
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidang = BidangModel::get();
        return view('admin.create', compact(['bidang'])); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        User::create([
               'username' => $input['username'],
                'name' => $input['name'],
                'bidang_id' => $input['bidang_id'],
                'email' => $input['email'],
                'role' => $input['role'],
                'password' => Hash::make($input['password'])
        ]);
            return redirect()->route('admin.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = User::find($id);
        return view('admin.show',['admin'=>$admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::find($id);
        $bidang = BidangModel::all();
        return view('admin.edit',['admin'=>$admin,'bidang'=>$bidang]);
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
        $admin = User::find($id);
        $admin->username = $request->username;
        $admin->name = $request->name;
        $admin->bidang_id = $request->bidang_id;
        $admin->email = $request->email;
        $admin->role = $request->role;
        $admin->password = Hash::make($request['password']);
        $admin->save();
        return redirect()->route('admin.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin->delete($admin->id);
        return redirect()->route('admin.index')->with('success', 'Data berhasil dihapus');
    }
}
