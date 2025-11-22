<?php

use App\Models\Course;
use App\Models\Participant;
use App\Models\Enrollment;

test('the enrollment form page can be accessed', function () {
    $this->get(route('enrollments.create'))
        ->assertStatus(200)
        ->assertSee('Enroll Participant');
});

test('a participant can be enrolled into a course', function () {
    $participant = Participant::factory()->create();
    $course = Course::factory()->create();

    $data = [
        'participant_id' => $participant->id,
        'course_id' => $course->id,
    ];

    $this->post(route('enrollments.store'), $data)
        ->assertRedirect();

    $this->assertDatabaseHas('enrollments', [
        'participant_id' => $participant->id,
        'course_id' => $course->id,
    ]);
});

test('an enrollment can be deleted', function () {
    $enrollment = Enrollment::factory()->create();

    $this->delete(route('enrollments.destroy', $enrollment->id))
        ->assertRedirect();

    $this->assertDatabaseMissing('enrollments', [
        'id' => $enrollment->id,
    ]);
});

test('a participant’s enrolled courses can be viewed', function () {
    $participant = Participant::factory()->create();
    $courses = Course::factory()->count(2)->create();

    foreach ($courses as $course) {
        Enrollment::factory()->create([
            'participant_id' => $participant->id,
            'course_id' => $course->id,
        ]);
    }

    $this->get(route('participants.courses', $participant->id))
        ->assertStatus(200)
        ->assertSee($courses[0]->name)
        ->assertSee($courses[1]->name);
});

test('a course’s participants can be viewed', function () {
    $course = Course::factory()->create();
    $participants = Participant::factory()->count(2)->create();

    foreach ($participants as $participant) {
        Enrollment::factory()->create([
            'participant_id' => $participant->id,
            'course_id' => $course->id,
        ]);
    }

    $this->get(route('courses.participants', $course->id))
        ->assertStatus(200)
        ->assertSee($participants[0]->name)
        ->assertSee($participants[1]->name);
});
