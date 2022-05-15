<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {        
        return [
            "bus_id" => random_int(1,25),
            "departure_from" => $this->faker->word(),
            "departure_date" => $this->faker->dateTimeBetween('now', '+ 1 days'),
            "arrive_to" => $this->faker->word(),
            "arrive_date" => $this->faker->dateTimeBetween('+ 1 days', '+ 2 days'),
        ];            
    }
}
