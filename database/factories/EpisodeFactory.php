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
            'url' => "https://player.vimeo.com/video/978258437?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479",
            'duration' => $this->faker->numberBetween(5, 60),
            'canonical' => $this->faker->unique()->slug(),
            'is_seen' => $this->faker->boolean()
        ];
    }
}
