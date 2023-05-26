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
        $file = UploadedFile::fake()->image('thumbnail.jpg');
        $fileName = rand(0,9999999) . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('personil', $fileName, 'public');

        return [
            'name' => $this->faker->userName(),
            'slug' => Str::slug($this->faker->userName()),
            'image' => $filePath,
            'position' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
