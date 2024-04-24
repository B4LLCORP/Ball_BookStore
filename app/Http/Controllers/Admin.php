<?php

namespace App\Http\Controllers;

use App\Models\kasir;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function login(){
        return view('login.login');
    }
    public function ceklogin(Request $request){
        $ol  = new kasir;
        $ol = $ol->where('username',$request->input('username'))->where('password',$request->input('password'));
        
        if($ol->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password') 
            ]);
            return redirect('admin/dashboard');
        }

    }
}
