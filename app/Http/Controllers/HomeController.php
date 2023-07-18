<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\DashboardModel;
use App\Models\User;
use App\Models\LaporanModel;
use App\Models\RhkModel;
use App\Models\BidangModel;
use App\Models\IntervensiModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Auth::user();

        if($users){
            $dashboard = DashboardModel::with('dt_rhk', 'dt_laporan')->where('user_id',$users->id)->get();
            
            // $belum = DB::table('laporan')->where('role', 'belum')->selectRaw('user_id')->pluck('cnt');
            $rhk = RhkModel::where('user_id',$users->id)->count();
            $arsip = LaporanModel::where('user_id',$users->id)->count();
            $belum = LaporanModel::where('user_id',$users->id)->where('role','belum')->count();
            $selesai = LaporanModel::where('user_id',$users->id)->where('role','selesai')->count();

            return view('main',[
                'dashboard' => $dashboard,
                'arsip' => $arsip,
                'rhk' => $rhk,
                'belum' => $belum,
                'selesai' => $selesai,
            ]);
        }
    }

    public function adminHome(){
        return view('admin-home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
