<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\employee;

use Tests\TestCase;

class loginScreenTest extends TestCase
{
    // use RefreshDatabase;
    public function addLoginProvider()
    {
        return array(
            array('1','123','admin'),
            
        );
    }

    
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

    public function testLogin($username, $password, $status, $redirectTo)
    {
        fwrite(STDOUT, "\n" . __METHOD__ . " $username" . " $password\n");
        $response = $this->from("/login")
            ->post(
                "/user", [
                    'user' => $username,
                    'password' => $password,
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
            ["1", "123", 302, "admin"], // admin
            
        ]);
    }

    /**
     * Testing Login Route
     */

    public function testRouteLogin()
    {
        fwrite(STDOUT, "\n" . __METHOD__ . "\n");
        $response = $this->get("login");
        $response->assertStatus(200);
    }

   

    public function testLoginUrl()
    {
        // $actual=$pageModelManger->build(url:'/login', user: $id, password:$pass);
        $response=$this->post("/login34");
        $response->assertStatus(404);
        
    }

    /**
     * Login Test2
     * @dataProvider loginData
     */

    // public function testLoginData($username, $password, $status, $redirectTo)
    // {
    
    //     $response= $this->call('POST', 'http://127.0.0.1:8000/login',[
    //         'user' => $username,
    //         'password' => $password 
    //     ]);
        
    //     $response->assertEquals(302,$response->getStatusCode());
    // }


}


// $response=$this->json('POST','/user',['user'=>$id, 'password'=>$pass]);
// $response->assertPathIs('/admin');