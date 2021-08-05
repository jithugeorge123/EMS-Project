<?php

namespace Tests\Unit;

use Tests\TestCase;

class managerTest extends TestCase
{
    /**
     * set Previous url
     */
    public function from(string $url)
    {
        $this->app['session']->setPreviousUrl($url);
        return $this;
    }

    /**
     * Manager Test
     * @dataProvider loginDetails
     */
    public function testLoginDetails($emp_id, $password, $status, $redirectTo)
    {
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
     * Data provider for testLoginDetails function
     */
    public function loginDetails()
    {
        return ([
            ["5", "1234567", 302, "admin"], // manager
        ]);
    }

    //testing  url
    public function testIssueUrl()
    {
        $response = $this->get('/insertIssue');
        $response->assertViewIs('insertIssue');

        $response->assertStatus(200);
    }

    public function testLogUrl()
    {
        $response = $this->get('/addEmployee');
        $response->assertViewIs('addEmployee');

        $response->assertStatus(200);
    }

    public function testAddEmployeeUrl()
    {
        $response = $this->get('/logCreate');
        $response->assertViewIs('logCreate');

        $response->assertStatus(200);
    }

    /**
     * Testing editRecords function
     * @dataProvider updateData
     */
    public function testUpdateDetails($emp_id, $emp_mobile_no, $emp_comm_address, $status, $redirectTo)
    {
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
            ["2", "9898989898", "pune", 302, "manager-records"],
            ["2", " ", "pune", 302, "manager-records"],
        ]);
    }

    /**
     * Testing insertIssue function
     * @dataProvider MgrIssueData
     */
    public function testInsertMgrIssue($emp_id, $issue_title, $issue_desc, $status, $redirectTo)
    {
        // fwrite(STDOUT, "\n" . _METHOD_ . "\n");
        $response = $this->from('logCreate')
            ->post(
                "insertRecord",
                [
                    "issue_title" => $issue_title,
                    "issue_desc" => $issue_desc,
                ]);

        $response->assertStatus($status);
        $response->assertRedirect($redirectTo);
    }

    /**
     * Data provider for testInsertMgrIssue function
     */
    public function MgrIssueData()
    {
        return ([
            ["3", "laptop", "Not able to login", 302, "logCreate"],
            ["2", " laptop ", "Not able to logout", 302, "logCreate"],
        ]);
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
