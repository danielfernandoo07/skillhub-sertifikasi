<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Enrollment;
use App\Models\Participant;
use App\Models\Course;

class EnrollmentSeeder extends Seeder
{
    public function run(): void
    {
        $participants = Participant::all();
        $courses = Course::all();

        foreach ($participants as $participant) {
            $randomCourses = $courses->random(rand(1, 3));

            foreach ($randomCourses as $course) {
                Enrollment::create([
                    'participant_id' => $participant->id,
                    'course_id' => $course->id,
                ]);
            }
        }
    }
}
