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
    //public function testInsert()
    //{

    public function testExample()
    {
        $this->assertTrue(true);
    }

        //$car = new Car();
        //$car->make = '';
        //$car->model = '';
        //$car->year = '';
        //$this->assertTrue($car->save());

    //}

    //public function testUpdate()
    //{

        //$car = Car::inRandomOrder()->first();
        //$car->make = '';
        //$car->model = '';
        //$car->year = '2000';
        //$car->save();
        //$this->assertTrue($car->update());

    //}

    //public function testDelete()
    //{

        //$car = Car::inRandomOrder()->first();
        //$car->make = '';
        //$car->model = '';
        //$car->year = '';
        //$car->save();
        //$this->assertTrue($car->delete());

    //}

    //public function testCount()
    //{
        //$car = Car::All();
        //$car->count='50';
        //$this->assertEquals(50, $car->count());

    //}

    //public function testInteger()
    //{
        //$car = Car::inRandomOrder()->first();
        //$year= (int)$car->year;
        //$this->assertInternalType(IsType::TYPE_INT,$year);

    //}


    //public function testEither()
    //{
        //$car = Car::inRandomOrder()->first();
        //$value=$car->make;
        //$this->assertContains($value, ['honda','toyota','ford']);

    //}


    //public function testString()
    //{
        //$car = Car::inRandomOrder()->first();
        //$this->assertInternalType('string',$car->model);

    //}
}
