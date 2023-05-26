<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArgumentCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => Str::slug($this->faker->sentence(2, true)),
            'name' => $this->faker->sentence(3, true),
            'description' => $this->faker->paragraph(),
        ];
    }
}
