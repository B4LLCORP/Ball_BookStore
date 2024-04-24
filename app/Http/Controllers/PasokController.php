<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasokController extends Controller
{
    public function index(){
        return view('datapasok.index');
    }
}
