<?php

namespace Tests\Unit;

use PHPUnit\Framework\Constraint\IsType;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {

        $car = new Car();
        $car->make = '';
        $car->model = '';
        $car->year = '';
        $this->assertTrue($car->save());

    }

    public function testUpdate()
    {

        $car = Car::inRandomOrder()->first();
        $car->make = '';
        $car->model = '';
        $car->year = '2000';
        $car->save();
        $this->assertTrue($car->update());

    }

    public function testDelete()
    {

        $car = Car::inRandomOrder()->first();
        $car->make = '';
        $car->model = '';
        $car->year = '';
        $car->save();
        $this->assertTrue($car->delete());

    }

    public function testCount()
    {
        $car = Car::All();
        $car->count='50';
        $this->assertEquals(50, $car->count());



    }

    public function testInteger()
    {
        $car = Car::inRandomOrder()->first();
        $year= (int)$car->year;
        //$count = $car->count();
        //$year = $car;
        //$year = (int)$year->year();
        $this->assertInternalType(IsType::TYPE_INT,$year);
        //$this->assertFalse(is_integer($year));

    }

    //public function testEither()
    //{
        //$car = Car::all();
        //$model = $car;
        //$car->assertDatabaseHas($model='ford', 'honda', 'toyota');
        //$car = Car::all();
        //$model = $car();
        //$count = $car->count();

        //$car = new (['ford', 'honda', 'toyota']);
        //$car->year ='';
        //$this->assertEquals($car->count);
        //$this->assertCount(3, $car->get());
        //$this->assertDatabaseHas($model->['']);

    //}


    //public function testString()
    //{
        //$car = Car::all();
        //$model = (string) $car->count();
        //$this->assertInternalType(IsType::TYPE_STRING,$model);
        //$this->assertFalse(is_integer($year));

    //}
}
