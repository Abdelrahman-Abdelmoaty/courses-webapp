<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Chapter;
use App\Models\Episode;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 courses with chapters and episodes
        Course::factory(10)->create()->each(function ($course) {
            // Create 5 chapters for each course
            $chapters = Chapter::factory(5)->create(['course_id' => $course->id]);

            // For each chapter, create 10 episodes
            $chapters->each(function ($chapter) {
                Episode::factory(10)->create(['chapter_id' => $chapter->id]);
            });
        });
    }
}
