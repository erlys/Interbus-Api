<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $seats = [20, 28, 32, 40, 48];
        $busesName = [
            "ALSA",
            "Avanza",
            "Socibus",
            "Damas",
            "Hife",
            "Vibasa",
            "Daibus",
            "Aisa",
            "La Unión",
            "La Sepulvedana",
            "Conda",
            "Aerobús Barcelona",
            "Saiz Tour",
            "Subus",
            "Therpasa",
            "Agreda Autobuses",
            "Jiménez Dorado",
            "La Burundesa",
            "Lycar",
        ];

        $images = [
            asset('img/buses/bus1.jpg'),
            asset('img/buses/bus2.jpg'),
            asset('img/buses/bus3.jpg'),
            asset('img/buses/bus4.jpg'),
            asset('img/buses/bus5.jpg'),
            asset('img/buses/bus6.jpg'),
            asset('img/buses/bus7.jpg'),
            asset('img/buses/bus8.jpg'),
            asset('img/buses/bus9.jpg'),
            asset('img/buses/bus10.jpg'),
        ];


        return [
            'agency_id' => random_int(1, 10),
            'user_id' => random_int(1, 25),
            'name' => $busesName[random_int(0, count($busesName) - 1)] . " " . random_int(10, 99),
            'model' => $this->faker->word(),            
            'image' => $images[random_int(0, count($images) - 1)],
            'seats' => $seats[random_int(0, count($seats) - 1)]
        ];
    }
}