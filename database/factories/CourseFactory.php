<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'canonical' => $this->faker->unique()->slug(),
        ];
    }
}