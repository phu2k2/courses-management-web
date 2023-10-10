<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'lesson_duration' => fake()->randomFloat(2, 0.01, 300.99),
            'topic_id' => fake()->randomNumber(),
            'lesson_url' => fake()->unique()->url()
        ];
    }
}
