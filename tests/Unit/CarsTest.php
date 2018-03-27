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
        //$user->save();
        //$this->assertTrue(true);
        $this->assertTrue($car->save());

    }
}
