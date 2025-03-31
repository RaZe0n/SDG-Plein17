<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calendar>
 */
class CalendarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->word(),
            "description" => $this->faker->sentence(),
            "location" => $this->faker->word(),
            "start" => $this->faker->dateTime(),
            "end" => $this->faker->dateTime(),
            "type" => $this->faker->randomElement(['event', 'workshop']),
            "participants" => json_encode([]),
        ];
    }
}
