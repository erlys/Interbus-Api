<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'travel_id' => random_int(1, 100),
            'user_id' => random_int(1, 100),
            'code' => random_int(10000, 99999),
            'price' => random_int(4,20),
            'boarded' => random_int(0,1),
        ];  
    }
}
