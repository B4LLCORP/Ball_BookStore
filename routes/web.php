<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\PasokController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.singin');
});

//dashboard
Route::get('admin/dashboard',[Admin::class,'index']);

//login
Route::get('admin/login',[Admin::class,'login']);
Route::post('ceklogin',[Admin::class,'ceklogin']);

//pasok
Route::get('admin/pasok',[PasokController::class,'index']);

//regis admin
Route::get('admin/regis',[Kasir::class,'viewkasir']);
Route::post('cekdata',[Kasir::class,'tambahkasir']);    
Route::get('hapusadmin/{id}',[Kasir::class,'hapuskasir']);