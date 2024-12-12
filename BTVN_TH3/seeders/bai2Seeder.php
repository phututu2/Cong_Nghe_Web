<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class bai2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('renters')->insert([
                'name' => $faker->name,
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Thêm dữ liệu cho bảng laptops
        foreach (range(1, 20) as $index) {
            DB::table('laptops')->insert([
                'brand' => $faker->randomElement(['Dell', 'HP', 'Lenovo', 'Asus', 'Apple']),
                'model' => $faker->bothify('Model ###??'),
                'specifications' => $faker->randomElement([
                    'i5, 8GB RAM, 256GB SSD',
                    'i7, 16GB RAM, 512GB SSD',
                    'i3, 4GB RAM, 128GB SSD',
                ]),
                'rental_status' => $faker->boolean(50),
                'renter_id' => $faker->optional(0.5, null)->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
