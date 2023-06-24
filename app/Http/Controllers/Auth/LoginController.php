<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();
       
        $this->validate($request,[
         'username'=>'required',
         'password'=>'required'
        ]);
        
        if(auth()-> attempt(array('username'=>$input['username'],
             'password'=>$input['password']))){
                 
             if(auth()->user()->role== 'admin'){

                 return redirect()->route('admin-home');

             }elseif(auth()->user()->role==0){

                 return redirect()->route('main');

             }else {
                return redirect()->route('login')->with('error','Username dan Password yang diInputkan salah');
             }
             
        }else{
             return redirect()->route('login')->with('error','Input proper username/password');
        }
    }
   
    public function username(){
        return 'username';
    }
}
