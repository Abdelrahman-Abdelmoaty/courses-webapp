<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\Episode;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    public function run()
    {
        // Create 5 chapters with 10 episodes each (if run separately from courses)
        Chapter::factory(5)->create()->each(function ($chapter) {
            Episode::factory(10)->create(['chapter_id' => $chapter->id]);
        });
    }
}
