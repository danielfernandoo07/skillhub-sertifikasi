<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return redirect()->route('participants.index');
})->name('dashboard');

// Route participants and courses
Route::resource('participants', ParticipantController::class);
Route::resource('courses', CourseController::class);

// Route enrollments
Route::get('/enrollments/create', [EnrollmentController::class, 'create'])->name('enrollments.create');
Route::post('/enrollments', [EnrollmentController::class, 'store'])->name('enrollments.store');

Route::get('/participants/{participant}/courses', [EnrollmentController::class, 'participantCourses'])->name('participants.courses');

// List participants in a specific course
Route::get('/courses/{course}/participants', [EnrollmentController::class, 'courseParticipants'])->name('courses.participants');

// Delete enrollment
Route::delete('/enrollments/{enrollment}', [EnrollmentController::class, 'destroy'])->name('enrollments.destroy');

