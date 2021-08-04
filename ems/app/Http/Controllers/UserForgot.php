<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\employee;

class UserForgot extends Controller
{
    //
    function userFor(Request $req){
        //validating input
        $req->validate([
            'empId'=>'required',
        ]);
        $data=$req->input();
        $emp_id= intval($data['empId']);
      
        $dbEmp=employee::find($emp_id);
        // return $dbEmp;

        return view('editPass',['dbEmp'=>$dbEmp]);
    }
    //updating the employee password
    function update(Request $req){
        $data=employee::find($req->empId);
        $data->emp_password=$req->password;
        $data->save();
        return redirect()->back()->with('success', 'password changed');

    }
}
