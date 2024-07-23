<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    protected $model = Chapter::class;

    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid(),
            'course_id' => null, // Default to null, will be overridden in seeder
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'canonical' => $this->faker->unique()->slug(),
        ];
    }
}
