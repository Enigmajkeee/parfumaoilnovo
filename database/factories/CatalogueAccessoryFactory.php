<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CatalogueAccessory>
 */
class CatalogueAccessoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text,
            'firm' => $this->faker->randomElement(['Mane','Luzi','Givaudan','Givaudan Premiere','Givaudan Luxe', 'Iberchem','Seluz']),
            'quantity' => $this->faker->randomElement([15, 60])
        ];
    }
}
