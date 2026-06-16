<?php

namespace Tests\Feature;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagManagerTest extends TestCase
{
    use RefreshDatabase;

    #Test create Tag
    public function test_it_can_be_create_Tag()
    {
        $response = Tag::create([
            'name' => 'testTag',
            'persian_name' => 'تگ تستی',
        ]);


        #test Make user in users table
        $this->assertDatabaseHas('tags', [
            'name' => 'testTag'
        ]);
    }

    #Test delete Tag
    public function test_it_can_be_delete_Tag()
    {
        $response = Tag::create([
            'name' => 'testTag',
            'persian_name' => 'تگ تستی',
        ]);


        #test Make user in users table
        $this->assertDatabaseHas('tags', [
            'name' => 'testTag'
        ]);
        #delete user
        $response->delete();

        #test data is deleted
        $this->assertDatabaseMissing('tags', [
            'name' => 'testTag'
        ]);
    }

    #Test Edit Tag
    public function test_it_can_be_edit_tag()
    {
        $response = Tag::create([
            'name' => 'testTag',
            'persian_name' => 'تگ تستی',
        ]);

        #test Make user in users table
        $this->assertDatabaseHas('tags', [
            'name' => 'testTag',
        ]);

        $new_name = 'test2';

        #Update user
        $response->update([
            'name' => $new_name
        ]);

        $response->save();

        $this->assertEquals($new_name, $response->name);
    }
}
