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
     * Login Test
     * @dataProvider loginData
     */
    public function testLogin($emp_id, $password, $status, $redirectTo)
    {
        //fwrite(STDOUT, "\n" . METHOD . " $emp_id" . " $password\n");
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
            ["5", "1234567", 302, "admin"], // manager
        ]);
    }

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
            ["2", "9898989898", "pune", 302, "manager-records"],
        ]);
    }

}
