<?php

namespace App\Http\Controllers;
use App\Models\employee;

use Illuminate\Http\Request;

class UserReg extends Controller
{
    //
    function userReg(Request $req){
        $emp=new employee;
        $data= $req->input();
        $emp->emp_first_name=$data["firstname"];
        $emp->emp_last_name=$data["lastname"];
        $emp->emp_mobile_no=$data["phone_number"];
        $emp->emp_dob=$data["dob"];
        $emp->emp_gender=$data["gender"];
        $emp->emp_comm_address=$data["comm_add"];
        $emp->emp_city=$data["city"];
        $emp->emp_password=$data["psw"];
        $emp->save();
        return view('regPass',['emp'=>$emp]);
    }
}
