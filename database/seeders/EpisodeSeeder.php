<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    public function run()
    {
        // Create 10 episodes
        Episode::factory(10)->create();
    }
}
