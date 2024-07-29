<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'date_published' => $this->faker->date(),
        ];
    }
}
