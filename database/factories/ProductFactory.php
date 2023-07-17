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
            'name' => $this->faker->sentence(mt_rand(1,3)),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->randomNumber(5, true),
            'excerpt' => $this->faker->paragraph(1),
            'image' => $this->faker->paragraph(1),
            'description' => $this->faker->paragraph(),
            'stock' => $this->faker->randomDigit(2),
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1, 5)
        ];
    }
}
