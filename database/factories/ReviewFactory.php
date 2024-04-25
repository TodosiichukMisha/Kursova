<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Intensive;
use App\Models\News;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->text,
            'rating' => random_int(1,10),
            'likes' => random_int(1,10),
            'course_id' => Course::get()->random()->id,
            'news_id' => News::get()->random()->id,
            'test_id' => Test::get()->random()->id,
            'user_id' => User::get()->random()->id,
        ];
    }
}
