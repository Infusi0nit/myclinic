<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Appointment;
use App\Models\patient;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        
        return view('auth.login');
    }
    public function login(Request $request){
        $now=date('Y-m-d H:i:s');
       $daily_patient=patient::where('created_at',$now)->count();
       $daily_appointment=Appointment::where('created_at',$now)->count();
       $total_patient=patient::count();
       $total_appointment=Appointment::count();
       $admin= Admin::where('username','=',$request->username)->where('password','=',$request->password)->count();
       if($admin>0){
           return view('dashboard.index',compact('daily_patient','daily_appointment','total_patient','total_appointment'))->with('success', 'Admin login Successfully');
           
       }else{
           return redirect()->route('logout')->with('success', 'Username and Password not match.');
       }
    }
    public function logout(Request $request) {
       
        Auth::logout();
        
        return view('auth.login');
        Session::flash('success', 'logout Successfully');
      }
}
