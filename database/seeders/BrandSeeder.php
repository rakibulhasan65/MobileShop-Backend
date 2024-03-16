<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('brands')->insert([
                'brand_name' => $faker->word,
            
                'brand_slug' => $faker->sentence,
                'meta_titile' => $faker->sentence,
                'meta_descriptions' => $faker->sentence,
                'meta_keywords' => $faker->sentence,
                'meta_keywords' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
