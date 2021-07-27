<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserReg;
use App\Http\Controllers\UserForgot;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post("user",[UserAuth::class,'userLogin']);
Route::view('login','login');
Route::view('register','register');
Route::view('employee','employee');

Route::post("register",[UserReg::class,'userReg']);
Route::view('forgotPass','forgotPass');
Route::post("forgotPass",[UserForgot::class,'userFor']);

Route::get('logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return view("login");
});


