<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      
        return [
            'name' => $this->faker->userName(),
            'slug' => Str::slug($this->faker->userName()),
            'image' => 'https://source.unsplash.com/random/?course&1',
            'position' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
