<?php

namespace Tests\Unit;

use Tests\TestCase;

class AdminTest extends TestCase
{
   /**
     * @dataProvider adminData
     */
    public function testadmin($emp_id,$emp_first_name,$emp_last_name,$emp_mobile_no,$emp_dob,$emp_gender,$emp_comm_address,$emp_city,$emp_type,$emp_password,$status, $redirectTo){
        $response = $this->from('update_employees')
            ->post(
                "updateemployee",
                [
                    "emp_id" => $emp_id,
                    "emp_first_name" => $emp_first_name,
                    "emp_last_name" => $emp_last_name,
                    "emp_mobile_no" => $emp_mobile_no,
                    "emp_dob" => $emp_dob,
                    "emp_gender" => $emp_gender,
                    "emp_comm_address" => $emp_comm_address,
                    "emp_city" => $emp_city,
                    "emp_type" => $emp_type,
                    "emp_password" => $emp_password
            ]);
        $response->assertStatus($status);
        $response->assertRedirect($redirectTo);
    }

    public function adminData(){
        return ([
            ["2", "Satya", "Mahesh","9898989899","1998-02-21","Male","Maharathra","Anantapur","normal","12345678",302, "employees_details"]
        ]);       
    }


    /**
     * @dataProvider projectData
     */
    public function testproject($proj_id,$proj_name,$proj_desc,$proj_start_date,$proj_end_date,$status, $redirectTo){
        $response = $this->from('update_project')
            ->post(
                "updateproject",
                [
                    "proj_id" => $proj_id,
                    "proj_name" => $proj_name,
                    "proj_desc" => $proj_desc,
                    "proj_start_date" => $proj_start_date,
                    "proj_end_date" => $proj_end_date
            ]);
        $response->assertStatus($status);
        $response->assertRedirect($redirectTo);
    }

    public function projectData(){
        return ([
            ["1","Web Project"," Creating and maintaining web pages","2019-07-29","2020-05-10",302, "projects"]
        ]);
    } 
    
}
