<?php

namespace App\Http\Controllers;

use App\Models\kasirr;
use Illuminate\Http\Request;

class Kasir extends Controller
{
    //view regis kasir get
    public function viewkasir(){
        $el = new kasirr;
        return view('regisadmin.index',['data'=>$el->all()]);
    }

    //tambah regis kasir post
    public function tambahkasir(Request $request){
        $el = new kasirr;
        $el->create([
            'id_kasir'=>$request->input('id_kasir'),
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
            'telepon'=>$request->input('telepon'),
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'akses'=>$request->input('akses'),
        ]);
        return redirect('admin/regis');
    }

    //hapus data admin
    public function hapuskasir($id){
        $el = kasirr::where('id_kasir',$id)->delete();
        return back();
    }
}
