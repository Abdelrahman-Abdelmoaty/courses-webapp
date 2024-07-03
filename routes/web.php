<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'courses'])->name('home');

Route::get('/course/{course}', [CourseController::class, 'course'])->middleware(['auth', 'verified'])->name('course');

Route::get('/course/{course}/module/{module}/video/{video}', [CourseController::class, 'course'])->middleware(['auth', 'verified'])->name('course');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
