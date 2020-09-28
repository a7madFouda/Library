<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Admin;

class AuthAdmin extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth:webadmin');
    // }
    public function login_get(){
        return view('admin/AdminLogin');
    }
    public function login_post(){
        $password=request()->has('password')?request('password'):false;

        if(Auth::guard('webadmin')->attempt(['email'=>request('email'),'password'=>$password])){
            return redirect('AdminDashboard');
        }else{
            return back();
        }
}
}
