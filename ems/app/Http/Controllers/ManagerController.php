<?php
/**
 * File Name => ManagerController
 * Author    => Pallavi Shinde
 * Purpose   => File will control the manager screen.
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\emp_proj;
use App\Models\log_issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    //display profile
    public function index()
    {
        $users = DB::table('employees')
            ->where('emp_id', 1)
            ->get();
        return view('manager', ['users' => $users]);
    }
    //display reportees
    public function reports()
    {
        $data = DB::table('employees')
            ->join('emp_projs', 'employees.emp_id', "=", 'emp_projs.emp_id')
            ->where('emp_projs.manager_id', 1)
            ->get();
        return view('reportees', ['data' => $data]);
    }
    public function show($id)
    {
        $users = DB::select('select * from employees where emp_id = ?', [$id]);
        return view('manager_update', ['users' => $users]);
    }
    //update profile details
    public function edit(Request $request, $id)
    {
        $emp_mobile_no = $request->input('emp_mobile_no');
        $emp_comm_address = $request->input('emp_comm_address');
        DB::update('update employees set emp_mobile_no = ?,emp_comm_address=? where emp_id = ?', [$emp_mobile_no, $emp_comm_address, $id]);
        echo "Record updated successfully.";
    } //insert issues
    public function insertIssue(Request $req)
    {
        //$users = DB::select('select emp_id from employees where emp_id = ?', [$id]);
        $emp = new log_issue;
        $emp->log_id = $req->log_id;
        $emp->emp_id = $req->emp_id;
        $emp->issue_title = $req->issue_title;
        $emp->issue_desc = $req->issue_desc;
        $emp->save();
        //return redirect()->back()->with('success', 'added issue');
        // return redirect('insertRecord');
    } //insert employees into project
    public function insertEmp(Request $req)
    {
        $empproj = new emp_proj;
        //$empproj->emp_proj_id = $req->emp_proj_id;
        $empproj->emp_id = $req->emp_id;
        $empproj->proj_id = $req->proj_id;
        $empproj->manager_id = $req->manager_id;
        $empproj->save();
        return redirect('addEmployee');

    }
    //delete the employees from project
    public function delete($id)
    {
        //$data = DB::select('select emp_proj_id from emp_projs where emp_id = ? and manager_id = 1', [$id]);
        // $data = emp_proj::find($data);
        //return $data;

        $data = DB::table('emp_projs')
            ->where('emp_id', $id);
        $data->delete();
        //return "Record deleted successfully";

    } //display the issues of reportees
    public function displayLog()
    {

        $logs = DB::table('log_issues')
            ->join('employees', 'employees.emp_id', '=', 'log_issues.emp_id')
            ->join('emp_projs', 'employees.emp_id', '=', 'emp_projs.emp_id')
            ->join('projects', 'projects.proj_id', '=', 'emp_projs.proj_id')
            ->select('log_issues.*')
            ->where('emp_projs.manager_id', 1)
            ->get();
        return view('log', ['logs' => $logs]);
    }

}
