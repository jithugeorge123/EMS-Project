<?php

use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserForgot;
use App\Http\Controllers\UserReg;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MemberController;
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
        if(session()->has('user')=='admin'){
            return redirect('admin');
        }
        if(session()->has('user')=='manager'){
            return redirect('manager-records');
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


Route::view('admin','admin');
Route::view('addproject','addproject');
Route::view('log_issues','log_issues');
Route::view('create_log','create_log');
Route::view('search','search');
 

Route::get('admin',[MemberController::class,'count' ]);
Route::get('admin',[MemberController::class,'list']);
Route::get('employee_details/{emp_id}',[MemberController::class,'showsData']);

Route::get('employees_details',[MemberController::class,'details']);
Route::get('delete/{emp_id}',[MemberController::class,'delete']);
Route::get('updateemployee/{emp_id}',[MemberController::class,'showData']);
Route::post('updateemployee/',[MemberController::class,'updateEmployee']);

Route::get('projects',[MemberController::class,'projdetails']);
Route::get('deleteproject/{proj_id}',[MemberController::class,'deleteproject']);
Route::get('updateproject/{proj_id}',[MemberController::class,'showproject']);
Route::post('updateproject/',[MemberController::class,'updateproject']);
Route::post('addproject/',[MemberController::class,'addproject']);


Route::get('emp_proj/{emp_id}',[MemberController::class,'empprojects']);

Route::get('log_issues',[MemberController::class,'logissues']);
Route::post('create_log/',[MemberController::class,'createlog']);
Route::get('update_log/{log_id}',[MemberController::class,'logissue']);
Route::post('update_log/',[MemberController::class,'updatelog']);


Route::post('searchbyidname/',[MemberController::class,'searchbyidorname']);
