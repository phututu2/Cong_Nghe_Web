<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'date_of_birth' => $faker->dateTimeBetween('-10 years', '-3 years')->format('Y-m-d'), // Random DOB for kids 3–10 years old
                'parent_phone' => $faker->numerify('##########'), // 10-digit phone number
                'class_id' => $faker->numberBetween(1, 5), // Assuming 5 classes created
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
