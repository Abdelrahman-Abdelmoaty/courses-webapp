<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Episode;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all()->first();

        return view('home', ['course' => Course::all()->first()]);
    }

    public function showEpisode(Episode $episode)
    {
        $episode = $episode;
        $chapter = $episode->chapter;
        $course = $chapter->course;

        return view('course')
            ->with([
                'episode' => $episode,
                'chapter' => $chapter,
                'course' => $course,
            ]);
    }
}
