<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/episode/{episode:uuid}', [CourseController::class, 'showEpisode'])->name('course');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
