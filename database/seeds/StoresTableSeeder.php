<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            [
                'store_name' => 'Nakasi',
                'store_address' => 'Huppins Complex',
                'store_details' => 'Open 24/7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'store_name' => 'Nadi',
                'store_address' => '199 Kinpin Rd',
                'store_details' => 'Open 24/7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'store_name' => 'Labasa',
                'store_address' => 'Main Street',
                'store_details' => 'Open 24/7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
