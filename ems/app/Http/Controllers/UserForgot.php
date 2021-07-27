<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserForgot extends Controller
{
    //
    function userFor(Request $req){
        $req->validate([
            'empId'=>'required',
        ]);
        $data=$req->input();
        $emp_id= intval($data['empId']);
        $dbEmp= DB::table('employee')
                ->where('emp_id', '=', $emp_id)
                ->get();
        foreach($dbEmp as $item){
            if($item->emp_id){
                    $return_data=true;
                }
            else{
                $return_data=false;
            }
        }
        return view('forgotPass',['return_data'=>$return_data]);
    }
}
