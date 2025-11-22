<?php

use App\Models\Course;

test('course index page can be accessed', function () {
    $this->get(route('courses.index'))
        ->assertStatus(200)
        ->assertSee('Courses');
});

test('course creation form can be accessed', function () {
    $this->get(route('courses.create'))
        ->assertStatus(200)
        ->assertSee('Add New Course');
});

test('a new course can be created', function () {
    $data = [
        'name' => 'Test Course',
        'description' => 'Description',
        'instructor' => 'Daniel'
    ];

    $this->post(route('courses.store'), $data)
        ->assertRedirect(route('courses.index'));

    $this->assertDatabaseHas('courses', ['name' => 'Test Course']);
});

test('course detail page can be accessed', function () {
    $course = Course::factory()->create();

    $this->get(route('courses.show', $course->id))
        ->assertStatus(200)
        ->assertSee($course->name)
        ->assertSee($course->instructor);
});

test('a course can be updated', function () {
    $course = Course::factory()->create();

    $updated = [
        'name' => 'Updated Course',
        'description' => 'Updated Description',
        'instructor' => 'Updated Instructor'
    ];

    $this->put(route('courses.update', $course->id), $updated)
        ->assertRedirect(route('courses.index'));

    $this->assertDatabaseHas('courses', ['name' => 'Updated Course']);
});

test('a course can be deleted', function () {
    $course = Course::factory()->create();

    $this->delete(route('courses.destroy', $course->id))
         ->assertRedirect();

    $this->assertDatabaseMissing('courses', ['id' => $course->id]);
});
