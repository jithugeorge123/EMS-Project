<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Testing insert function
     * @dataProvider EmpIssueData
     */
    public function testInsertEmpIssue($emp_id, $issue_title, $issue_desc, $status, $redirectTo)
    {
        // fwrite(STDOUT, "\n" . _METHOD_ . "\n");
        $response = $this->from('insertIssue')
            ->post(
                "insertissue",
                [
                    "issue_title" => $issue_title,
                    "issue_desc" => $issue_desc,
                ]);

        $response->assertStatus($status);
        $response->assertRedirect($redirectTo);
    }

    /**
     * Data provider for testInsertEmpIssue function
     */
    public function EmpIssueData()
    {
        return ([
            ["3", "laptop", "not working", 302, "insertIssue"],
            ["3", "laptop", "not working", 302, "insertIssue"],
        ]);
    }

    /**
     * Testing edit function
     * @dataProvider updateEmpData
     */
    public function testEmpUpdateDetails($emp_id, $emp_mobile_no, $emp_comm_address, $status, $redirectTo)
    {
        $response = $this->from('emp-update')
            ->post(
                "edit/$emp_id",
                [
                    "emp_mobile_no" => $emp_mobile_no,
                    "emp_comm_address" => $emp_comm_address,
                ]);

        $response->assertStatus($status);
        $response->assertRedirect($redirectTo);
    }

    /**
     * Data provider for testEmpUpdateDetails function
     */
    public function updateEmpData()
    {
        return ([
            ["2", "9898989898", "pune", 302, "emp-records"],
            ["2", " ", "pune", 302, "emp-records"],
        ]);
    }

}
