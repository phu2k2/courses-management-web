<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Cart::class;

    public function definition(): array
    {
        return [
            'user_id'  => function () {
                return User::factory()->create()->id;
            },
            'course_id'  => function () {
                return Course::factory()->create()->id;
            },
        ];
    }
}
