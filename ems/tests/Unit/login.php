<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class login extends TestCase
{   
    public function addLoginProvider()
    {
        return array(
            array(1,123,'manager-records'),
        );
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
}
