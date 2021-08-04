<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\employee;

use Tests\TestCase;

class loginScreenTest extends TestCase
{
    public function addLoginProvider()
    {
        return array(
            array('1','123','admin'),
            
        );
    }

    
    public function testLoginUrl()
    {
        // $actual=$pageModelManger->build(url:'/login', user: $id, password:$pass);
        $response=$this->post("/login34");
        $response->assertStatus(404);
        
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
            ->assertStatus(200)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors" => [
                    "password" => ["The password confirmation does not match."]
                ]
            ]);
        
    }
}


// $response=$this->json('POST','/user',['user'=>$id, 'password'=>$pass]);
// $response->assertPathIs('/admin');