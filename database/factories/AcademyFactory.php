<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

class AcademyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $file = UploadedFile::fake()->image('thumbnail.jpg');
        $fileName = rand(0,9999999) . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('thumbnail', $fileName, 'public');

        return [
            'slug' => Str::slug($this->faker->sentence()),
            'thumbnail' => $filePath,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
