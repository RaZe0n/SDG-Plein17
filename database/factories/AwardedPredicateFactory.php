<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AwardedPredicate>
 */
class AwardedPredicateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 151,
            'company' => $this->faker->company,
            'goal' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(6),
        ];
    }
}
