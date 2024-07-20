<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Episode;

class EpisodeSeeder extends Seeder
{
    public function run()
    {
        // Create 10 episodes
        Episode::factory(10)->create();
    }
}
