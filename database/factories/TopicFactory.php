<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Topic::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'course_id' => $this->faker->randomNumber()
        ];
    }
}
