<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receipt>
 */
class ReceiptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => fake()->numberBetween(1, 10),
            'payment_amount' => fake()->numberBetween(3.99, 12.99),
            'payment_date' => now(),
            'payment_type' => fake()->randomElement(['CASH', 'DEBIT', 'CREDIT']),
        ];
    }
}
