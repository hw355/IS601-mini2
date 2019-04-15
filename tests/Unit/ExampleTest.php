<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
/*
    public function testUserInsert()
    {
        $user = factory(User::class)->create();

        $this->assertNotEmpty($user);
    }
*/
    public function testUserUpdate()
    {
        $user = User::find(1);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertTrue($user->name == 'Steve Smith');
    }


}
