<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Participant;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function create() {
        $participants = Participant::all();
        $courses = Course::all();

        return view('enrollments.create', compact('participants', 'courses'));
    }

    // Store
    public function store(Request $request) {
        $request->validate([
            'participant_id' => 'required|exists:participants,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        Enrollment::create([
            'participant_id' => $request->participant_id,
            'course_id' => $request->course_id,
        ]);

        return redirect()->back()->with('success', 'Enrollment created successfully!');
    }

    // List course from participant
    public function participantCourses(Participant $participant)
    {
        $courses = $participant->courses;
        return view('enrollments.participant_courses', compact('participant', 'courses'));
    }

    // List participants in a course
    public function courseParticipants(Course $course)
    {
        $participants = $course->participants;
        return view('enrollments.course_participants', compact('course', 'participants'));
    }

    // Delete 
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return back()->with('success', 'Enrollment removed.');
    }
}
