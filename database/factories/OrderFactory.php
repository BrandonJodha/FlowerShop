<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rose_count' => $this->faker->randomDigit(),
            'lily_count' => $this->faker->randomDigit(),
            'orchid_count' => $this->faker->randomDigit(),
            'tulip_count' => $this->faker->randomDigit(),
            'daffodil_count' => $this->faker->randomDigit(),
            'delivery_address' => $this->faker->name(),
            'delivery_date' => now(),

        ];
    }
}
