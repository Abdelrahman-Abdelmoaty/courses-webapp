<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Chapter;
use App\Models\Course;

class ChapterFactory extends Factory
{
    protected $model = Chapter::class;

    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'course_id' => Course::factory(),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'canonical' => $this->faker->unique()->slug(),
        ];
    }
}
