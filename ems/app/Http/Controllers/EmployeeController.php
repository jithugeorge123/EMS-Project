<?php
/**
 * File Name => EmployeeController
 * Author    => Pallavi Shinde
 * Purpose   => File will control the normal(employee) screen.
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\log_issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //display employee details(profile)
    public function empindex()
    {
        $users = DB::table('employee')
            ->WHERE('emp_id', session('user'))
            ->get();
        return view('emp_edit_view', ['users' => $users]);
    }

    //show the employee
    public function show($id)
    {
        $users = DB::select(' SELECT * FROM employee WHERE emp_id = ?', [$id]);
        return view('emp_update', ['users' => $users]);
    }

    //edit the mobile no and address
    public function edit(Request $request, $id)
    {
        $emp_mobile_no = $request->input('emp_mobile_no');
        $emp_comm_address = $request->input('emp_comm_address');
        DB::update('UPDATE employee SET emp_mobile_no = ?,emp_comm_address=? WHERE emp_id = ?', [$emp_mobile_no, $emp_comm_address, $id]);
        return redirect('emp-records');
    }

    //insert issues into log_issue table
    public function insert(Request $req)
    {
        $req->validate(
            [
                'emp_id' => 'required',
                'issue_title' => 'required',
                'issue_desc' => 'required',
            ]
        );
        $emp = new log_issue;
        $emp->log_id = $req->log_id;
        $emp->emp_id = $req->emp_id;
        $emp->issue_title = $req->issue_title;
        $emp->issue_desc = $req->issue_desc;
        $emp->save();
        return redirect()->back()->with('success', 'Added Issue');
    }
}
