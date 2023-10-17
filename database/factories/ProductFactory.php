<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale'=>$this->faker->numberBetween($min = 1, $max = 100),
            'code'=>$this->faker->numberBetween($min = 1, $max = 100),
            'quantity'=>$this->faker->numberBetween($min = 1, $max = 1000),
            'amount'=>$this->faker->randomDigit,
            'weight'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1)
        ];
    }
}
