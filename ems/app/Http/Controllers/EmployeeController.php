<?php
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
        $users = DB::table('employees')
            ->where('emp_id', 1)
            ->get();
        return view('emp_edit_view', ['users' => $users]);
    }
    //show the employee
    public function show($id)
    {
        $users = DB::select('select * from employees where emp_id = ?', [$id]);
        return view('emp_update', ['users' => $users]);
    }
    //edit the mobile no and address
    public function editdetails(Request $request, $id)
    {
        $emp_mobile_no = $request->input('emp_mobile_no');
        $emp_comm_address = $request->input('emp_comm_address');
        DB::update('update employees set emp_mobile_no = ?,emp_comm_address=? where emp_id = ?', [$emp_mobile_no, $emp_comm_address, $id]);
        echo "Record updated successfully.";
    }
    //insert issues into log_issue table
    public function insert(Request $req)
    {
        $emp = new log_issue;
        $emp->log_id = $req->log_id;
        $emp->emp_id = $req->emp_id;
        $emp->issue_title = $req->issue_title;
        $emp->issue_desc = $req->issue_desc;
        $emp->save();
        return redirect('emp_edit_view');
    }
}
