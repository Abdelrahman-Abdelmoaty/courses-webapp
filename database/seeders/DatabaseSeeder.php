<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Module;
use App\Models\Video;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed courses
        $courses = [
            [
                'title' => 'Advanced Laravel',
                'description' => 'Learn advanced concepts of Laravel including package development and optimization techniques.'
            ],
            [
                'title' => 'Laravel for Beginners',
                'description' => 'A comprehensive guide for beginners to get started with Laravel.'
            ],
            [
                'title' => 'Laravel Eloquent Mastery',
                'description' => 'Master Eloquent ORM for efficient database operations.'
            ],
            [
                'title' => 'Laravel and Vue.js Integration',
                'description' => 'Learn how to integrate Laravel with Vue.js for building modern web applications.'
            ],
            [
                'title' => 'Laravel Testing Techniques',
                'description' => 'Detailed guide on testing Laravel applications using PHPUnit and Laravel Dusk.'
            ],
        ];

        foreach ($courses as $courseData) {
            $course = Course::create($courseData);

            // Seed modules and videos for each course
            if ($course->title === 'Advanced Laravel') {
                $modules = [
                    [
                        'title' => 'Service Providers and Container',
                        'description' => 'Understanding the service providers and the IoC container.'
                    ],
                    [
                        'title' => 'Advanced Eloquent Techniques',
                        'description' => 'Using Eloquent ORM to its full potential with advanced techniques.'
                    ],
                ];
            } elseif ($course->title === 'Laravel for Beginners') {
                $modules = [
                    [
                        'title' => 'Routing and Controllers',
                        'description' => 'Basics of routing and controllers in Laravel.'
                    ],
                    [
                        'title' => 'Blade Templating',
                        'description' => 'Introduction to Blade templating engine in Laravel.'
                    ],
                ];
            } elseif ($course->title === 'Laravel Eloquent Mastery') {
                $modules = [
                    [
                        'title' => 'Eloquent Relationships',
                        'description' => 'Detailed explanation of relationships in Eloquent.'
                    ],
                    [
                        'title' => 'Query Scopes',
                        'description' => 'Using query scopes to reuse query logic in Eloquent.'
                    ],
                ];
            } elseif ($course->title === 'Laravel and Vue.js Integration') {
                $modules = [
                    [
                        'title' => 'Setting Up Vue.js with Laravel',
                        'description' => 'Steps to set up Vue.js with Laravel.'
                    ],
                    [
                        'title' => 'Vue.js Components in Laravel',
                        'description' => 'Creating and using Vue.js components in Laravel.'
                    ],
                ];
            } elseif ($course->title === 'Laravel Testing Techniques') {
                $modules = [
                    [
                        'title' => 'Unit Testing with PHPUnit',
                        'description' => 'Writing unit tests for your Laravel application using PHPUnit.'
                    ],
                    [
                        'title' => 'Browser Testing with Laravel Dusk',
                        'description' => 'Using Laravel Dusk for browser testing your application.'
                    ],
                ];
            }

            foreach ($modules as $moduleData) {
                $module = Module::create([
                    'course_id' => $course->id,
                    'title' => $moduleData['title'],
                    'description' => $moduleData['description'],
                ]);

                // Generate videos for each module
                for ($i = 1; $i <= rand(2, 4); $i++) { // Generate 2 to 4 videos per module
                    Video::create([
                        'module_id' => $module->id,
                        'title' => "Video {$i} for {$module->title}",
                        'description' => "Description for Video {$i} of {$module->title}",
                        'url' => 'https://www.youtube.com/embed/rIfdg_Ot-LI?si=31sro5pxs2shl7Q_', // Example URL
                        'duration' => rand(10, 30), // Random duration between 10 to 30 minutes
                    ]);
                }
            }
        }
    }
}
