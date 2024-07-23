<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CourseSeeder::class,
            //ChapterSeeder::class,
            //EpisodeSeeder::class,
            UserSeeder::class,
        ]);
    }
}
