<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16 GB, 512 GB',
                'description' => 'Description',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'details' => '13.3 inch, 8GB, DDR4 SDRAM, 256GB',
                'description' => 'Description',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
