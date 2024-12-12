<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) { // Tạo 10 bản ghi
            DB::table('medicines')->insert([
                'name' => $faker->word, // Tên thuốc ngẫu nhiên
                'brand' => $faker->company, // Thương hiệu ngẫu nhiên
                'dosage' => $faker->numberBetween(100, 1000) . 'mg', // Liều lượng từ 100mg đến 1000mg
                'form' => $faker->randomElement(['Tablet', 'Capsule', 'Syrup', 'Injection']), // Dạng thuốc
                'price' => $faker->randomFloat(2, 5, 500), // Giá từ 5.00 đến 500.00
                'stock' => $faker->numberBetween(0, 1000), // Số lượng từ 0 đến 1000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
