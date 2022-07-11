<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->sentence(),
            'authors_id' => $this->faker->numberBetween(1, 10),
            'publisher_id' => $this->faker->numberBetween(1, 5),
            'peminjam_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
