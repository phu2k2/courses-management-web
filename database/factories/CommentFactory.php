<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all('id')->random();
        $lesson = Lesson::all('id')->random();

        return [
            'lesson_id' => $lesson->id,
            'user_id' => $user->id,
            'parent_id' => fake()->numberBetween(0, 5),
            'content' => fake()->paragraph(),
        ];
    }
}
