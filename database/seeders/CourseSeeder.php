<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Chapter;
use App\Models\Module;
use App\Models\Video;
use App\Models\Quiz;
use App\Models\Exercise;
use App\Models\Assignment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // // Create a course
        $course1 = Course::create([
            'title' => 'Web Development Basics',
        ]);


        $chapter1 = $course1->chapters()->create([
            'title' => 'Introduction to HTML and CSS',
            'is_locked' => false,
        ]);

        // Modules for Chapter 1
        $module1 = $chapter1->modules()->create([
            'type' => 'lesson',
        ]);

        $module2 = $chapter1->modules()->create([
            'type' => 'exercise',
        ]);

        $module3 = $chapter1->modules()->create([
            'type' => 'quiz',
        ]);

        $module4 = $chapter1->modules()->create([
            'type' => 'assignment',
        ]);

        // Videos for Module 1
        $video1 = $module1->videos()->create([
            'title' => 'Introduction to HTML',
            'description' => 'Learn the basics of HTML.',
            'is_done' => true,
        ]);

        $video2 = $module1->videos()->create([
            'title' => 'Introduction to CSS',
            'description' => 'Learn the basics of CSS.',
            'is_done' => false,
        ]);


        // Exercises for Module 2
        $exercise1 = $module2->exercises()->create([
            'title' => 'CSS Selectors Practice',
        ]);

        // Quizzes for Module 3
        $quiz1 = $module3->quizzes()->create([
            'title' => 'HTML Basics Quiz',
        ]);

        // Assignments for Module 4
        $assignment1 = $module4->assignments()->create([
            'title' => 'CSS Box Model Assignment',
        ]);

        // Create Chapter 2
        $chapter2 = $course1->chapters()->create([
            'title' => 'JavaScript Basics',
            'is_locked' => false,
        ]);

        // Modules for Chapter 2
        $module5 = $chapter2->modules()->create([
            'type' => 'lesson',
        ]);

        $module6 = $chapter2->modules()->create([
            'type' => 'exercise',
        ]);

        $module7 = $chapter2->modules()->create([
            'type' => 'quiz',
        ]);

        $module8 = $chapter2->modules()->create([
            'type' => 'assignment',
        ]);

        // Videos for Module 5
        $video3 = $module5->videos()->create([
            'title' => 'Introduction to JavaScript',
            'description' => 'Learn the basics of JavaScript.',
            'is_done' => false,
        ]);

        $video4 = $module5->videos()->create([
            'title' => 'JavaScript Variables',
            'description' => 'Learn about variables in JavaScript.',
            'is_done' => false,
        ]);

        // Exercises for Module 6
        $exercise2 = $module6->exercises()->create([
            'title' => 'JavaScript Variables Practice',
        ]);

        // Quizzes for Module 7
        $quiz2 = $module7->quizzes()->create([
            'title' => 'JavaScript Basics Quiz',
        ]);

        // Assignments for Module 8
        $assignment2 = $module8->assignments()->create([
            'title' => 'JavaScript Functions Assignment',
        ]);



    }
}