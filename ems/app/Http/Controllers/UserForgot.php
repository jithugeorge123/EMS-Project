<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class UserForgot extends Controller
{
    public function userFor(Request $req)
    {
        //validating input
        $req->validate([
            'empId' => 'required',
        ]);
        $data = $req->input();
        $emp_id = intval($data['empId']);

        $dbEmp = employee::find($emp_id);

        return view('editPass', ['dbEmp' => $dbEmp]);
    }
    //updating the employee password
    public function update(Request $req)
    {
        $data = employee::find($req->empId);
        $data->emp_password = $req->password;
        $data->save();
        return redirect()->back()->with('success', 'Password Changed');
    }
}
