<?php

namespace Database\Factories;

use App\Models\Chapter;
use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    protected $model = Episode::class;

    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid(),
            'chapter_id' => Chapter::factory(),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'duration' => $this->faker->numberBetween(5, 60),
            'canonical' => $this->faker->unique()->slug(),
        ];
    }
}
