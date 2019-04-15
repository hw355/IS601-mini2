<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Car;

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
        $this->assertEmpty($user);
    }

    public function testUserCount()
    {
        $cars = DB::table('cars')->get();
        $carCount = $cars->count();
        $this->assertTrue($carCount == 50);
    }

    public function testCarInsert()
    {
        $car = factory(Car::class)->create();
        $this->assertNotEmpty($car);
    }

    public function testCarUpdate()
    {
        $car = Car::find(1);
        $car->year = 2000;
        $car->save();
        $this->assertTrue($car->year == '2000');
    }

    public function testCarDelete()
    {
        $car = Car::find(50);
        //$car->delete();
        $this->assertEmpty($car);
    }

    public function testCarCount()
    {
        $cars = DB::table('cars')->get();
        $carCount = $cars->count();
        $this->assertTrue($carCount == 50);
    }
*/
    public function testYearProperty()
    {
        $car = Car::find(1);
        $this->assertIsInt($car->year);
    }

}
