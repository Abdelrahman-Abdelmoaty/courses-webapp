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

    public function course($courseSlug, $chapterId = null, $moduleId = null, $videoId = null)
    {
        $course = Course::where('slug', $courseSlug)->first();
        $activeChapter = null;
        if ($chapterId) {
            $activeChapter = $course->chapters->where('id', $chapterId)->first();
        } else {
            $activeChapter = $course->chapters->first();
        }

        $activeModule = null;
        if ($moduleId) {
            $activeModule = $activeChapter->modules->where('id', $moduleId)->first();
        } else {
            $activeModule = $activeChapter->modules->where('type', 'lesson')->first();
        }

        $activeVideo = null;
        if ($videoId) {
            $activeVideo = $activeModule->videos->where('id', $videoId)->first();
        } else {
            if ($activeModule->type == 'lesson') {
                $activeVideo = $activeModule->videos->first();
            }
        }

        return view('course', compact('course', 'activeChapter', 'activeModule', 'activeVideo'));
    }
}