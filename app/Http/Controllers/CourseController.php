<?php

namespace App\Http\Controllers;

use App\Models\Course;


class CourseController extends Controller
{
    public function courses()
    {
        $courses = Course::all();

        return view('home', compact('courses'));
    }

    public function course($courseId, $moduleId = null, $videoId = null)
    {
        $course = Course::find($courseId);
        $module;
        if($moduleId){
            $module = $course->modules->find($moduleId);
        } else {
            $module = $course->modules->first();
        }
        $video;
        if($videoId){
            $video = $module->videos->find($videoId);
        } else {
            $video = $module->videos->first();
        }

        return view('course', compact('course', 'module', 'video'));
    }


}
