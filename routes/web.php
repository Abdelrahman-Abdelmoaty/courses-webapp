<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'index'])->name('home');

Route::get('/course/{courseSlug}', [CourseController::class, 'course'])->name('course');
Route::get('/course/{courseSlug}/chapter/{chapterId}/module/{moduleId}', [CourseController::class, 'course'])->name('course.module');
Route::get('/course/{courseSlug}/chapter/{chapterId}/module/{moduleId}/video/{videoId}', [CourseController::class, 'course'])->name('course.video');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
