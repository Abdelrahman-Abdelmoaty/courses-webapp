<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Episode;
use App\Models\Chapter;

class EpisodeFactory extends Factory
{
    protected $model = Episode::class;

    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'chapter_id' => Chapter::factory(),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'duration' => $this->faker->numberBetween(5, 60), 
            'canonical' => $this->faker->unique()->slug(),
        ];
    }
}
