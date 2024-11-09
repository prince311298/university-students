<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_name' => $this->faker->name,
            'class_teacher_id' => Teacher::inRandomOrder()->first()->id, // Randomly assign a teacher
            'class' => $this->faker->randomElement(['Math', 'Science', 'English', 'History']),
            'admission_date' => $this->faker->date,
            'yearly_fees' => $this->faker->randomFloat(2, 5000, 20000),
        ];
    }
}
