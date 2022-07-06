<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ph_1' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 6.5, $max = 7.5),
            'temp_1' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 24, $max = 30),
            'temp_2' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 24, $max = 30),
            'temp_3' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 24, $max = 30),
            'feeder_distance' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 45),
            'water_distance' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 70, $max = 80),
            'water_flow' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 7),
            // 'time_rtc' => $this->faker->dateTime($max = 'now', $timezone = null),        
        ];
    }
}
