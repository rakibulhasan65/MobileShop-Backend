<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('product_attributes')->insert([
         
                
                'product_id' => $faker->randomNumber(1,50),
                'size' => $faker->word,
                'sku' =>"piece",
                'price' => $faker->randomFloat(2, 10, 1000),
                'stock' => $faker->randomFloat(50, 1000),
                
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
