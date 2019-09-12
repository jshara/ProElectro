<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'item_name' => 'IPhone',
                'item_desc' => 'Smart Phone I7+',
                'item_details' => '64GB storage, 4GB RAM',
                'item_price' => '990.50',
                'item_pic' => '/apple/iphone.jpg',
                'brand_id' => '1',
                'cat_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'item_name' => 'MacBook',
                'item_desc' => 'Latest MacBook Generation 5',
                'item_details' => '64GB storage, 4GB RAM',
                'item_price' => '1880.00',
                'item_pic' => '/apple/macbook.jpg',
                'brand_id' => '1',
                'cat_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'item_name' => 'Tablet',
                'item_desc' => 'Tablet',
                'item_details' => '64GB storage, 4GB RAM',
                'item_price' => '590.90',
                'item_pic' => '/apple/tablet.jpg',
                'brand_id' => '1',
                'cat_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'item_name' => 'Smart Watch',
                'item_desc' => 'Bluetooth connection',
                'item_details' => '8GB storage, water proof',
                'item_price' => '190.00',
                'item_pic' => '/apple/watch.jpg',
                'brand_id' => '1',
                'cat_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'item_name' => 'Music Player',
                'item_desc' => 'Music Player',
                'item_details' => '128GB storage',
                'item_price' => '90.00',
                'item_pic' => '/sandisk/music.jpg',
                'brand_id' => '4',
                'cat_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'item_name' => 'USB',
                'item_desc' => 'USB 64GB, 3.0',
                'item_details' => '64GB storage, 3.0 Port',
                'item_price' => '88.00',
                'item_pic' => '/sandisk/USB.jpg',
                'brand_id' => '4',
                'cat_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
