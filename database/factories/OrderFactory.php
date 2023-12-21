<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 25),
            'status' => fake()->randomElement(['PENDING', 'PAID', 'PREPARED', 'SERVED']),
            'date' => now(),
            'total' => fake()->numberBetween(15.0, 99.9)
        ];
    }
}
