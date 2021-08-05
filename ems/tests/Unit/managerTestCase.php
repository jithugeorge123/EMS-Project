<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
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

}
