<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LogIssue;
use App\Models\Project;
use DB;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    function list() {
        $data = Employee::all();
        return view('admin', ['employees' => $data]);
    }

    public function showsData($emp_id)
    {
        $data = Employee::where('emp_id', $emp_id)->first();
        return view('employee_details', compact('data'));
    }

    public function showData($emp_id)
    {
        $data = Employee::where('emp_id', $emp_id)->first();
        return view('updateemployee', compact('data'));
    }

    public function details()
    {
        $data = Employee::all();
        return view('employees_details', ['employees' => $data]);
    }

    public function delete($emp_id)
    {
        $data = Employee::where('emp_id', $emp_id);
        $data->delete();
        return redirect('employees_details');
    }

    public function updateEmployee(Request $req)
    {
        $emp_id = $req->emp_id;
        $emp_first_name = $req->emp_first_name;
        $emp_last_name = $req->emp_last_name;
        $emp_mobile_no = $req->emp_mobile_no;
        $emp_dob = $req->emp_dob;
        $emp_gender = $req->emp_gender;
        $emp_comm_address = $req->emp_comm_address;
        $emp_city = $req->emp_city;
        $emp_type = $req->emp_type;
        $emp_password = $req->emp_password;
        $data =DB::update('update employee set emp_first_name=?,emp_last_name=?,emp_mobile_no=?,emp_dob=?,emp_gender=?,emp_comm_address=?,emp_city=?,emp_type=?,emp_password=? where emp_id=?', [$emp_first_name, $emp_last_name, $emp_mobile_no, $emp_dob, $emp_gender, $emp_comm_address, $emp_city, $emp_type, $emp_password, $emp_id]);
        return redirect('employees_details');
    }

    public function projdetails()
    {
        $data = Project::all();
        return view('projects', ['data' => $data]);
    }

    public function deleteproject($proj_id)
    {
        $data = Project::where('proj_id', $proj_id);
        $data->delete();
        return redirect('projects');
    }

    public function showproject($proj_id)
    {
        $data = Project::where('proj_id', $proj_id)->first();
        return view('updateproject', compact('data'));
    }

    public function updateproject(Request $req)
    {
        $proj_id = $req->proj_id;
        $proj_name = $req->proj_name;
        $proj_desc = $req->proj_desc;
        $proj_start_date = $req->proj_start_date;
        $proj_end_date = $req->proj_end_date;
        DB::update('update project set proj_name=?,proj_desc=?,proj_start_date=?,proj_end_date=? where proj_id=?', [$proj_name, $proj_desc, $proj_start_date, $proj_end_date, $proj_id]);
        return redirect('projects')->with('success','Updates successfully');
    }

    public function addproject(Request $req)
    {
        $req->validate(
            [
                'proj_name' => 'required',
                'proj_desc' => 'required',
                'proj_start_end' => 'required|before:proj_end_date',
                'proj_end_date' => 'required|after:proj_start_date'
            ]
        );
        $proj = new Project;
        $data = $req->input();
        $proj->proj_name = $data['proj_name'];
        $proj->proj_desc = $data['proj_desc'];
        $proj->proj_start_date = $data['proj_start_date'];
        $proj->proj_end_date = $data['proj_end_date'];
        $result = $proj->save();
        if($result){
            return redirect('projects');
        }else{
            return back()->with('fail','something wrong');
        }
    }

    public function empprojects($emp_id)
    {
        $data = DB::table('project')
            ->join('emp_proj', 'project.proj_id', "=", 'emp_proj.proj_id')
            ->join('employee', 'emp_proj.emp_id', "=", 'employee.emp_id')
            ->where('emp_proj.emp_id', $emp_id)
            ->get();
        return view('emp_proj', ['data' => $data]);
    }

    public function logissues()
    {
        $data = LogIssue::all();
        return view('log_issues', ['data' => $data]);
    }

    public function createlog(Request $req)
    {
        $req->validate(
            [
                'emp_id' => 'required',
                'issue_title' => 'required',
                'issue_desc' => 'required',
                'issue_status' => 'required'
            ]
        );
        $log = new LogIssue;
        $data = $req->input();
        $log->emp_id = $data['emp_id'];
        $log->issue_title = $data['issue_title'];
        $log->issue_desc = $data['issue_desc'];
        $log->issue_status = $data['issue_status'];
        $data = $log->save();
        if($data){
            return redirect('log_issues');
        }else{
            return back()->with('fail','something wrong');
        }
    }

    public function logissue($log_id)
    {
        $data = LogIssue::where('log_id', $log_id)->first();
        return view('update_log', compact('data'));
    }

    public function updatelog(Request $req)
    {
        $log_id = $req->log_id;
        $emp_id = $req->emp_id;
        $issue_title = $req->issue_title;
        $issue_desc = $req->issue_desc;
        $issue_status = $req->issue_status;
        DB::update('update log_issue set emp_id=?,issue_title=?,issue_desc=?,issue_status=? where log_id=?', [$emp_id, $issue_title, $issue_desc, $issue_status, $log_id]);
        return redirect('log_issues');
    }

    public function searchbyidorname(Request $req)
    {
        $fname = Employee::where('emp_first_name', $req->emp_id_name)->first();
        $eid = Employee::where('emp_id', $req->emp_id_name)->first();
        if ($fname) {
            $data = DB::table('project')
                ->join('emp_proj', 'project.proj_id', "=", 'emp_proj.proj_id')
                ->join('employee', 'emp_proj.emp_id', "=", 'employee.emp_id')
                ->where('employee.emp_first_name', $req->emp_id_name)
                ->get();
            return view('searchproj', ['data' => $data]);
        } else if ($eid) {
            $data = DB::table('project')
                ->join('emp_proj', 'project.proj_id', "=", 'emp_proj.proj_id')
                ->join('employee', 'emp_proj.emp_id', "=", 'employee.emp_id')
                ->where('emp_proj.emp_id', $req->emp_id_name)
                ->get();
            return view('searchproj', ['data' => $data]);
        } else {
            return view('search', ['data' => 'Enter Valid Credentials']);
        }
    }
}
