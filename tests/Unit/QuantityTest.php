<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuantityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        // Make call to application...

        $this->assertDatabaseHas('brands', 
        ['brand_name' => 'Apple']);

        $this->assertDatabaseHas('brands', 
        ['brand_name' => 'LG']);

        $this->assertDatabaseHas('categories', 
        ['cat_name' => 'Fridge']);

        $this->assertDatabaseHas('Categories', 
        ['cat_name' => 'Speaker']);

        $this->assertDatabaseHas('brands', 
        ['brand_name' => 'GoPro']);

        $this->assertDatabaseHas('categories', 
        ['cat_name' => 'Cameras']);
    }
}
