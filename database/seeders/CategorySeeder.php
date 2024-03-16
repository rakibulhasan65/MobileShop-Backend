<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('categories')->insert([
                'category_name' => $faker->word,
                'parent_id' => $faker->randomNumber(1,50),
                'category_slug' => $faker->sentence,
                'meta_titile' => $faker->sentence,
                'meta_descriptions' => $faker->sentence,
                'meta_keywords' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
