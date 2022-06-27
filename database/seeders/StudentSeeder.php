<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($loop = 0; $loop < 5; $loop++) {

            DB::table("students")->insert([
                "name" => $faker->name(),
                "term1_marks" => $faker->numberBetween(45, 95),
                "term2_marks" => $faker->numberBetween(45, 95),
                "term3_marks" => $faker->numberBetween(45, 95),
                "term4_marks" => $faker->numberBetween(45, 95),
                "remarks" => $faker->randomElement(["Good", "Excellent", "Needs Improvement", "Better", "Poor"])
            ]);
        }
    }
}
