<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageLoad extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testURL()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // $response = $this->get('/order/add');

        // $response->assertStatus(200);

        $response = $this->get('/item');

        $response->assertStatus(200);

        $response = $this->get('/aboutus');

        $response->assertStatus(200);

        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
