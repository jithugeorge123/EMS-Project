<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\employee;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req){
        $data=$req->input();
        //validating inputs
        $emp_i= intval($data['user']);
        $req->validate([
            'user'=>'required',
            'password'=>'required',
        ]);
        
        
        $dbEmp=employee::where('emp_id','=',$emp_i)->first();

      
            if(!$dbEmp){
                return redirect()->back()->with('fail', 'Incorrect Employee Id');
                    
                }
            else {
                if($dbEmp->emp_password==$data['password']){
                    if($dbEmp->emp_type=='normal')      //normal user
                    {
                        $req->session()->put('user',$dbEmp->emp_id);
                        $req->session()->put('user_type','normal');
                        $req->session()->put('user_name',$dbEmp->emp_first_name."  " .$dbEmp->emp_last_name);
                        return redirect('emp-records');
                    }
                    if($dbEmp->emp_type=='admin')       //admin
                    {
                        $req->session()->put('user',$dbEmp->emp_id);
                        $req->session()->put('user_type','admin');
                        $req->session()->put('user_name',$dbEmp->emp_first_name);
                        return redirect('admin');

                    }
                    if($dbEmp->emp_type=='manager')     //manager
                    {
                        $req->session()->put('user',$dbEmp->emp_id);
                        $req->session()->put('user_type','manager');
                        $req->session()->put('user_name',$dbEmp->emp_first_name."  " .$dbEmp->emp_last_name );
                        return redirect('manager-records');

                    }
                }
                else{
                    return redirect()->back()->with('fail', 'Incorrect Password');  
                }
                    
                    
            }
        

        }

}
