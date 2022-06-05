<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sku' => $sku = $this->faker->sentence(),
            'name' => $this->faker->name(),
            'price' => $this->faker->randomElement(['500', '400', '344', '345', '1000']),
            'weight' => $this->faker->randomElement(['23', '15', '34', '12', '3']),
            'description' => $this->faker->text(),
            'thumbnail' => Str::slug($sku),
            'image' => 'https://cdn.lorem.space/images/pizza/.cache/640x480/pexels-andy-kuzma-2909821.jpg',
            'category' => $this->faker->randomElement(['Clothes', 'Electronics', 'Furniture', 'Shoes', 'Others']),
            'stock' => $this->faker->randomElement(['yes', 'no'])
        ];
    }
}
