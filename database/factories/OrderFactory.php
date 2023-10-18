<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'  => function () {
                return User::factory()->create()->id;
            },
            'course_id'  => function () {
                return Course::factory()->create()->id;
            },
            'payment_method' => fake()->randomElement([0, 1]),
            'price' => fake()->randomFloat(2, 10, 100),
            'status' => fake()->randomElement([0, 1, 2]),
        ];
    }
}
