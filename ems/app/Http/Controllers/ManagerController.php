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
        $users = DB::table('employee')
            ->where('emp_id',  session('user'))
            ->get();
        return view('manager', ['users' => $users]);
    }
    //display reportees
    public function reports()
    {
        $data = DB::table('employee')
            ->join('emp_proj', 'employee.emp_id', "=", 'emp_proj.emp_id')
            ->where('emp_proj.manager_id', 1)
            ->get();
        return view('reportees', ['data' => $data]);
    }
    public function show($id)
    {
        $users = DB::select('select * from employee where emp_id = ?', [$id]);
        return view('manager_update', ['users' => $users]);
    }
    //update profile details
    public function edit(Request $request, $id)
    {
        $emp_mobile_no = $request->input('emp_mobile_no');
        $emp_comm_address = $request->input('emp_comm_address');
        DB::update('update employee set emp_mobile_no = ?,emp_comm_address=? where emp_id = ?', [$emp_mobile_no, $emp_comm_address, $id]);
        echo "Record updated successfully.";
    } //insert issues
    public function insertIssue(Request $req)
    {
        //$users = DB::select('select emp_id from employee where emp_id = ?', [$id]);
        $emp = new log_issue;
        $emp->log_id = $req->log_id;
        $emp->emp_id = $req->emp_id;
        $emp->issue_title = $req->issue_title;
        $emp->issue_desc = $req->issue_desc;
        $emp->save();
        //return redirect()->back()->with('success', 'added issue');
        // return redirect('insertRecord');
    } //insert employee into project
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
    //delete the employee from project
    public function delete($id)
    {
        //$data = DB::select('select emp_proj_id from emp_proj where emp_id = ? and manager_id = 1', [$id]);
        // $data = emp_proj::find($data);
        //return $data;

        $data = DB::table('emp_proj')
            ->where('emp_id', $id);
        $data->delete();
        //return "Record deleted successfully";

    } //display the issues of reportees
    public function displayLog()
    {

        $logs = DB::table('log_issue')
            ->join('employee', 'employee.emp_id', '=', 'log_issue.emp_id')
            ->join('emp_proj', 'employee.emp_id', '=', 'emp_proj.emp_id')
            ->join('project', 'project.proj_id', '=', 'emp_proj.proj_id')
            ->select('log_issue.*')
            ->where('emp_proj.manager_id', 1)
            ->get();
        return view('log', ['logs' => $logs]);
    }

}
