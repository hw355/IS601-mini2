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
        $user = User::find(20);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertTrue($user->name == 'Steve Smith');
    }

    public function testUserDelete()
    {
        $user = User::find(1);
        $user->delete();
        $this->assertEmpty($user);
    }

    public function testUserCount()
    {
        $cars = DB::table('cars')->get();
        $carCount = $cars->count();
        $this->assertTrue($carCount == 50);
    }
/*
    public function testCarInsert()
    {
        $car = factory(Car::class)->create();
        $this->assertNotEmpty($car);
    }

    public function testCarUpdate()
    {
        $car = Car::find(7);
        $car->year = 2000;
        $car->save();
        $this->assertTrue($car->year == '2000');
    }
/*
    public function testCarDelete()
    {
        $car = Car::find(1);
        $car->delete();
        $this->assertEmpty($car);
    }

    public function testCarCount()
    {
        $cars = DB::table('cars')->get();
        $carCount = $cars->count();
        $this->assertTrue($carCount == 50);
    }

    public function testYearProperty()
    {
        $car = Car::find(5);
        $this->assertIsInt($car->year);
    }

    public function testMakeField()
    {
        $car = DB::table('cars')->pluck('make');
        $this->assertTrue($car == 'honda' || 'toyota' || 'ford');
    }
*/
    public function testModelProperty()
    {
        $car = Car::find(12);
        $this->assertIsString($car->model);
    }

}
