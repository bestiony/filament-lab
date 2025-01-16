<?php

namespace Database\Factories;

use App\ProductTypeEnum;
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
        return [
            'name' => $name = $this->faker->unique()->name(),
            'slug' => Str::slug($name),
            'sku' => dechex($this->faker->unique()->randomNumber(6)),
            'image' => $name,
            'description' => $this->faker->realText(),
            'quantity' => random_int(0,100),
            'price' => $this->faker->randomFloat(8,10,10000),
            'is_featured' => true,
            'is_visible' => true,
            'type' => $this->faker->randomElement(ProductTypeEnum::cases()),
            'published_at' => $this->faker->dateTimeBetween('-1 year','now'),
        ];
    }
}
