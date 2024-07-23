<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\Course;
use App\Models\Episode;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 courses with chapters and episodes
        Course::factory(10)->create()->each(function ($course) {
            // Create 5 chapters for each course and associate the course_id
            Chapter::factory(5)->create(['course_id' => $course->id])->each(function ($chapter) {
                // For each chapter, create 10 episodes
                Episode::factory(10)->create(['chapter_id' => $chapter->id]);
            });
        });
    }
}
