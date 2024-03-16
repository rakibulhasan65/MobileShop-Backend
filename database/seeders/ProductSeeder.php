<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('products')->insert([
         
                'category_id' => $faker->randomNumber(1,50),
                'brand_id' => $faker->randomNumber(1,50),
                'product_name' => $faker->word,
                'product_slug' => $faker->sentence,
                'product_price' => $faker->randomFloat(2, 10, 1000),
                'stock' => $faker->randomFloat(50, 1000),
                'meta_title' => $faker->sentence,
                'meta_descriptions' => $faker->sentence,
                'meta_keywords' => $faker->sentence,
                'status' => 1,
                'color_id' => 1,
                'product_discount' => 0,
                'final_price' => $faker->randomFloat(2, 10, 1000),

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
