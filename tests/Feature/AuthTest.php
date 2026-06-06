<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthTest extends TestCase
{

    use RefreshDatabase;

    #Test Register User
    public function test_it_user_can_register()
    {
        $response = User::create([
            'name' => 'testUser',
            'email' => 'test@test.ir',
            'password' => 'test',
            'type' => 'user'
        ]);


        #test Make user in users table
        $this->assertDatabaseHas('users', [
            'email' => 'test@test.ir'
        ]);

        #test instance of User
        $this->assertInstanceOf(User::class, $response);
    }


    #login Test
    public function test_user_can_login()
    {
        User::create([
            'name' => 'testUser',
            'email' => 'test@test.ir',
            'password' => bcrypt('123456'),
            'type' => 'user'
        ]);

        $result = Auth::attempt([
            'email' => 'test@test.ir',
            'password' => '123456'
        ]);

        $this->assertTrue($result);
        $this->assertAuthenticated();
    }
}
