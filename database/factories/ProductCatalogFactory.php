<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCatalog>
 */
class ProductCatalogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ferreteriaWords = ['martillo', 'destornillador', 'clavo', 'llave inglesa', 'sierra', 'tornillo', 'alicate', 'sierra circular', 'tuerca', 'cinta métrica'];
        $description = $this->faker->randomElement($ferreteriaWords) . ' ' . $this->faker->randomElement($ferreteriaWords);
        
        return [
            'description' => $description,
        ];
    }
}
