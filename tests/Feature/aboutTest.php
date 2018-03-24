<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class aboutTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testaboutPage()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);     //200 means found
    }
}
