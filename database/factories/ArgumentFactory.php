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
        $file = UploadedFile::fake()->image('thumbnail.jpg');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('thumbnail', $fileName, 'public');

        return [
            'slug' => Str::slug($this->faker->sentence()),
            'thumbnail' => $filePath,
            'argument_category_id' => function () {
                return ArgumentCategory::all()->random();
            },
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
