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


/**
     * @dataProvider addLoginProvider
     */
    
    public function testLoginData($id, $pass,$expected)
    {
        
        
        // $response = $this->post('/user', ['user'=>$id, 'password'=>$pass]);
        // $response->assertStatus(404);
        $userData = [
            "user" => $id,
            "password" => $pass
        ];

        $this->json('POST', 'user', $userData, ['Accept' => 'application/json'])
            ->assertStatus(302)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors" => [
                    "password" => ["The password confirmation does not match."]
                ]
            ]);
        
    }