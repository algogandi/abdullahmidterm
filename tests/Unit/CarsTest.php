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



}
