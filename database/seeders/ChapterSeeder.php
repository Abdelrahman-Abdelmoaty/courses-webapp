<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;
use App\Models\Episode;

class ChapterSeeder extends Seeder
{
    public function run()
    {
        // Create 5 chapters with 10 episodes each
        Chapter::factory(5)->create()->each(function ($chapter) {
            Episode::factory(10)->create(['chapter_id' => $chapter->id]);
        });
    }
}
