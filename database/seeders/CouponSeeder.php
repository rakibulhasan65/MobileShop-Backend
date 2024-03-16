<?php

namespace Database\Seeders;

use DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('coupons')->insert([
                'coupon_options' => "Manual",
                'counpon_code' => Str::random(10),
                'coupon_type' => "single",
                'amount_type' => "taka",
                'amount' => $faker->randomFloat(2, 10, 1000),
                'expiry_date' =>now(),
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
