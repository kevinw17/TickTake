<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     "name" => $this->faker->word(),
        //     "organizer_id" => mt_rand(1, 5),
        //     "pict" => $this->faker->image('public/img', 724, 340, null, false)
        // ];
    }
}
