<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\DB;

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

    public function testUserUpdate()
    {
        $user = User::find(1);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertTrue($user->name == 'Steve Smith');
    }

    public function testUserDelete()
    {
        $user = User::find(50);
        //$user->delete();
        $users = User::all();
        $this->assertEmpty($user);
    }
*/
    public function testUserCount()
    {
        $cars = DB::table('cars')->get();
        $carCount = $cars->count();
        $this->assertTrue($carCount == 50);
    }

}
