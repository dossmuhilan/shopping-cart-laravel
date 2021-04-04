<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/61Tw6LZoaiL._SL1500_.jpg',
            'productName' => 'OnePlus 8T',
            'shortDesc' => 'OnePlus 8T 5G',
            'description' => 'OnePlus 8T 5G (Aquamarine Green, 8GB RAM, 128GB Storage)',
            'price' => '42999',
            'status' => 1
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71X5I1cVfbL._SL1500_.jpg',
            'productName' => 'Redmi Note 9',
            'shortDesc' => 'Redmi Note 9',
            'description' => 'Redmi Note 9 (Pebble Grey, 4GB RAM 64GB Storage) - 48MP Quad Camera & Full HD+ Display',
            'price' => '1000',
            'status' => 1
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/61Tw6LZoaiL._SL1500_.jpg',
            'productName' => 'Samsung Galaxy M02',
            'shortDesc' => 'Samsung Galaxy M02',
            'description' => 'Samsung Galaxy M02 (Blue,3GB RAM, 32GB Storage)',
            'price' => '7000',
            'status' => 1
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/61IhTtJUXJL._SL1500_.jpg',
            'productName' => 'Oppo A31',
            'shortDesc' => 'Oppo A31',
            'description' => 'Oppo A31 (Fantasy White, 6GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers',
            'price' => '7000',
            'status' => 1
        ]);
        $product->save();
    }
}
