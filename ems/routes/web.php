<?php

use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserForgot;
use App\Http\Controllers\UserReg;
use Illuminate\Support\Facades\Route;

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

Route::post("user", [UserAuth::class, 'userLogin']);
Route::view('login', 'login');
Route::view('register', 'register');
Route::view('employee', 'employee');

Route::post("register", [UserReg::class, 'userReg']);
Route::view('forgotPass', 'forgotPass');
Route::view('editPass', 'edittPass');
Route::post("forgotPass", [UserForgot::class, 'userFor']);
Route::post("editPass", [UserForgot::class, 'update']);

Route::get('logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return view("login");
});

//normal user screen
Route::get('emp-records', [EmployeeController::class, 'index']);
Route::get('edit/{id}', [EmployeeController::class, 'show']);
Route::post('edit/{id}', [EmployeeController::class, 'edit']);
Route::post('insert', [EmployeeController::class, 'insert']);
