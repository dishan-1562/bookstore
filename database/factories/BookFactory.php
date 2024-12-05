<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title'=>fake()->sentence(),
        'author'=>fake()->name(),
        'isbn'=>fake()->isbn13(),
        'price'=>fake()->randomfloat(2,1,1000),
        'stock'=>fake()->numberBetween(1,100)
        ];
    }
}
