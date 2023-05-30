<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ArgumentCategory;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArgumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'slug' => Str::slug($this->faker->sentence()),
            'thumbnail' => 'https://source.unsplash.com/random/?course&1',
            'argument_category_id' => function () {
                return ArgumentCategory::all()->random();
            },
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'created_at' => now()->subMonths(rand(0, 12)),
            'updated_at' => now()->subMonths(rand(0, 12))
        ];
    }
}
