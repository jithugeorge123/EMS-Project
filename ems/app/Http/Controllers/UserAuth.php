<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\login;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req){
        $data=$req->input();
        $emp_i= intval($data['user']);
        $dbEmp= DB::table('employee')
                ->where('emp_id', '=', $emp_i)
                ->get();
        $dbEmp_pass= DB::table('logins')
                ->where('emp_id', '=', $emp_i)
                ->get("pass");
        foreach($dbEmp as $item){

            if(!$item->emp_id){
                    echo " Enter correct emp_id";
                }
                else {
                    if($item->emp_password==$data['password']){
                        $req->session()->put('user',$item->emp_first_name);
                        return redirect('employee');
                    }
                }
        

        }

    }
}
