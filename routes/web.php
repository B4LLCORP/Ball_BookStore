<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.singin');
});

//dashboard
Route::get('admin/dashboard',[Admin::class,'index']);
