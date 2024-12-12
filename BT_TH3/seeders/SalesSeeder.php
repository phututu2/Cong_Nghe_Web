<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) { // Tạo 30 bản ghi
            DB::table('sales')->insert([
                'medicine_id' => $faker->numberBetween(1, 10), // medicine_id từ 1 đến 10 (dựa trên MedicinesSeeder)
                'quantity' => $faker->numberBetween(1, 10), // Số lượng bán từ 1 đến 10
                'sale_date' => $faker->dateTimeBetween('-1 year', 'now'), // Ngày bán trong vòng 1 năm qua
                'customer_phone' => $faker->numerify('09########'), // Số điện thoại ngẫu nhiên
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
