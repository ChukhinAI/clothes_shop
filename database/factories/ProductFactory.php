<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->name();
        return [
            'category_id' => rand(1, 4),
            'brand_id' => rand(1, 4),
            'name' => $name,
            'content' => $this->faker->text(rand(400, 500)),
            'slug' => Str::slug($name),
            'price' => rand(1000, 2000),
        ];
    }
}
