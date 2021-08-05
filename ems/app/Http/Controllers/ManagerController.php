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
    //display profile of manager
    public function index()
    {
        $users = DB::table('employee')
            ->WHERE('emp_id', session('user'))
            ->get();
        return view('manager', ['users' => $users]);
    }

    //display  reportees details
    public function reports()
    {
        $data = DB::table('employee')
            ->JOIN('emp_proj', 'employee.emp_id', "=", 'emp_proj.emp_id')
            ->WHERE('emp_proj.manager_id', session('user'))
            ->get();
        return view('reportees', ['data' => $data]);
    }
    public function show($id)
    {
        $users = DB::select('SELECT * FROM employee WHERE emp_id = ?', [$id]);
        return view('manager_update', ['users' => $users]);
    }
    //update mobile no and address profile details
    public function editrecord(Request $request, $id)
    {
        $emp_mobile_no = $request->input('emp_mobile_no');
        $emp_comm_address = $request->input('emp_comm_address');
        DB::update('UPDATE employee SET emp_mobile_no = ?,emp_comm_address=? WHERE emp_id = ?', [$emp_mobile_no, $emp_comm_address, $id]);
        return redirect('manager-records');
    } //insert issues
    public function insertIssue(Request $req)
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
    //add employee into project
    public function insertEmp(Request $req)
    {
        $req->validate(
            [
                'emp_id' => 'required',
                'proj_id' => 'required',
            ]
        );
        $empproj = new emp_proj;
        $empproj->emp_id = $req->emp_id;
        $empproj->proj_id = $req->proj_id;
        $empproj->manager_id = $req->manager_id;
        $empproj->save();
        return redirect('addEmployee');

    }
    //delete the employee from project
    public function delete($id)
    {
        $data = DB::table('emp_proj')
            ->WHERE('emp_id', $id);
        $data->delete();
        return redirect('reportees');

    } //display the issues of reportees
    public function displayLog()
    {
        $logs = DB::table('log_issue')
            ->JOIN('employee', 'employee.emp_id', '=', 'log_issue.emp_id')
            ->JOIN('emp_proj', 'employee.emp_id', '=', 'emp_proj.emp_id')
            ->JOIN('project', 'project.proj_id', '=', 'emp_proj.proj_id')
            ->SELECT('log_issue.*')
            ->WHERE('emp_proj.manager_id', session('user'))
            ->get();
        return view('log', ['logs' => $logs]);
    }

}
