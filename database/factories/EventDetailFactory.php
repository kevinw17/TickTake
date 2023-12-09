<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventDetail>
 */
class EventDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "event_id" => mt_rand(1, 8),
            "category_id" => mt_rand(1, 3),
            "event_date" => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            "city" => $this->faker->city(),
            "price" => mt_rand(100000, 1000000),
            "quota" => mt_rand(50, 1000)
        ];
    }
}
