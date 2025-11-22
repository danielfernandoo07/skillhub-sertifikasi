<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Enrollment;
use App\Models\Participant;
use App\Models\Course;

class EnrollmentFactory extends Factory
{
    protected $model = Enrollment::class;

    public function definition()
    {
        return [
            'participant_id' => Participant::factory(),
            'course_id' => Course::factory(),
        ];
    }
}
