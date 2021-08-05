<?php

namespace Tests\Feature;

use Tests\TestCase;

use App\Model\employee;

class LoginTest extends TestCase
{

    /**
     * @dataProvider loginData
     */

    public function testLogin($emp_id, $password, $status, $redirectTo)
    {
        //fwrite(STDOUT, "\n" . _METHOD_ . " $emp_id" . " $password\n");
        $response = $this->from('/login')
            ->post(
                '/user', [
                    "user" => $emp_id,
                    "password" => $password,
                ]);
        $response->assertStatus($status);
        $response->assertRedirect($redirectTo);
    }
    /**
     * Data provider for testLogin function
     */

    public function loginData()
    {
        return ([
            [3, "12345678", 302, "admin"]
        ]);
    }


    /**
     * Forget Password
     *
     */
    public function testforget(){
        $response = $this->get('forgotPass');
        $response->assertStatus(200);
    }


    /** 
     * @dataProvider updateData
     */
    public function testUpdateDetails($emp_id, $emp_mobile_no, $emp_comm_address, $status, $redirectTo)
    {
        // fwrite(STDOUT, "\n" . _METHOD_ . "\n");
        $response = $this->from('manager-update')
            ->post(
                "update/$emp_id",
                [
                    "emp_mobile_no" => $emp_mobile_no,
                    "emp_comm_address" => $emp_comm_address,
                ]);

        $response->assertStatus($status);
        $response->assertRedirect($redirectTo);
    }
    /**
     * Data provider for testUpdateDetails function
     */
    public function updateData()
    {
        return ([
            ["2", "9898989898", "pune", 302, "manager-records"]
        ]);
    }


    
    public function testregister(){
        $response = $this->get('register');
        $response->assertStatus(200);
    }

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