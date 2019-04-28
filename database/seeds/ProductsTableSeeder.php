<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'title' => "TOY MACHINE",
                'description' => 'Daniel Lutheran shadow 8.25 pro',
                'price' => 56.99,
                'image' => '',
                'category' => 'deck',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "RIPNDIP",
                'description' => 'Oversize camo deck 8.25 x 32',
                'price' => 56.99,
                'image' => '',
                'category' => 'deck',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],

            [
                'title' => "MERIDIAN",
                'description' => 'Dragon cruiser deck 8.5 x 32',
                'price' => 50.99,
                'image' => '',
                'category' => 'deck',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "MERIDIAN",
                'description' => 'Dragon cruiser deck 8.5 x 32',
                'price' => 52.99,
                'image' => '',
                'category' => 'deck',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "INDEPENDET",
                'description' => 'Ray Barbee 139 stage hollow truck',
                'price' => 46.99,
                'image' => '',
                'category' => 'truck',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "ROYAL",
                'description' => 'Mini St. pirate 5.0 truck',
                'price' => 43.99,
                'image' => '',
                'category' => 'truck',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "THUNDER",
                'description' => 'Polished hi 148 truck',
                'price' => 38.99,
                'image' => '',
                'category' => 'truck',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "INDEPENDET",
                'description' => '144 Stage 11 truck',
                'price' => 44.99,
                'image' => '',
                'category' => 'truck',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
           
     ];

     DB::table('products')->insert($products);
    }
}
