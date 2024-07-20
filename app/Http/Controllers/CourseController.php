<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('home', compact('courses'));
    }

    public function course($courseId, $episodeId = null)
    {
        $course = Course::where('id', $courseId)->first();

        $chapter = null;
        $episode = null;

        if ($episodeId) {
            $chapter = $course->chapters->first(function ($chapter) use ($episodeId) {
                return $chapter->episodes->contains('id', $episodeId);
            });

            $episode = $chapter->episodes->first(function ($episode) use ($episodeId) {
                return $episode->id == $episodeId;
            });
        } else {
            $chapter = $course->chapters->first();
            $episode = $chapter->episodes->first();
        }
       
        return view('course', compact('course', 'chapter', 'episode'));
    }
}