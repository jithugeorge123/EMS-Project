<?php

use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserForgot;
use App\Http\Controllers\UserReg;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
// Route::view('login', 'login');
Route::get('/login', function () {
    if (session()->has('user')) {
        if(session()->has('user')=='normal'){
            return redirect('emp-records');
        }
            
    }
    return view("login");
});
Route::view('register', 'register');
Route::view('employee', 'employee');

Route::post("register", [UserReg::class, 'userReg']);
Route::view('forgotPass', 'forgotPass');
Route::view('editPass', 'edittPass');
Route::view('regPass', 'regPass');
Route::post("forgotPass", [UserForgot::class, 'userFor']);
Route::post("editPass", [UserForgot::class, 'update']);

Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return view("login");
});

//normal user screen
Route::get('emp-records', [EmployeeController::class, 'empindex']);
Route::get('edit/{id}', [EmployeeController::class, 'show']);
Route::post('edit/{id}', [EmployeeController::class, 'editdetails']);
Route::view('insertIssue', 'insertIssue');
Route::post('insertissue', [EmployeeController::class, 'insert']);
//manager
Route::get('manager-records', [ManagerController::class, 'index']);
Route::get('update/{id}', [ManagerController::class, 'show']);
Route::post('update/{id}', [ManagerController::class, 'edit']);
Route::post('insertRe', [ManagerController::class, 'insertIssue']);
Route::get('delete/{id}', [ManagerController::class, 'delete']);
//Route::post('update/{id}', [ManagerController::class, 'add']);
Route::post('add', [ManagerController::class, 'insertEmp']);

Route::get('display', [ManagerController::class, 'displayLog']);
Route::get('reportees', [ManagerController::class, 'reports']);
Route::get('profile', [ManagerController::class, 'index']);
Route::view('logCreate', 'logCreate');
Route::view('addEmployee', 'addEmployee');
Route::post('insertRecord', [ManagerController::class, 'insertIssue']);
Route::post('addemp', [ManagerController::class, 'insertEmp']);
