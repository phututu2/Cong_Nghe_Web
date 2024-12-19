<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            DB::table('computers')->insert([
                'computer_name' => 'Lab'.rand(1,5).'-PC'.rand(1,20),
                'model' => $faker->word,
                'operating_system' => 'Windows'.rand(9,11),
                'processor' => 'Intel Core i'.rand(1,5).'-'.'10000,11400',
                'memory' => rand(8,64),
                'available'=> $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
