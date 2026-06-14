<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserManagerTest extends TestCase
{
    use RefreshDatabase;

    #Test Add User
    public function test_it_can_be_delete_user()
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
        #delete user
        $response->delete();

        #test data is deleted
        $this->assertDatabaseMissing('users', [
            'email' => 'test@test.ir'
        ]);
    }


        #Test Edit User
    public function test_it_can_be_edit_user()
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

        $new_name = 'testUser2';

        #Update user
        $response->update([
            'name' => $new_name
        ]);

        $response->save();

        $this->assertEquals($new_name,$response->name);

    }
}
