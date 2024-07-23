<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Episode;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all()->first();

        return view('home', ['course' => $course]);
    }

    public function showEpisode(Episode $episode)
    {        
        $chapter = $episode->chapter;
        $course = $chapter->course;

        return view('course')
            ->with([
                'episode' => $episode,
                'chapter' => $chapter,
                'course' => $course,
                'collapse_chapters' => true
            ]);
    }
}
