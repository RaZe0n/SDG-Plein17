<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Predicate>
 */
class PredicateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => 1,
            "firstname" => Fake()->firstName(),
            "lastname" => Fake()->lastName(),
            "email" => Fake()->safeEmail(),
            "contactperson" => Fake()->name(),
            "company" => Fake()->company(),
            "sector" => Fake()->word(),
            "street" => Fake()->streetAddress(),
            "postalcode" => Fake()->postcode(),
            "city" => Fake()->city(),
            "province" => Fake()->state(),
            "involvement" => Fake()->sentence(),
            "acknowledge" => Fake()->boolean(),
            "steps" => Fake()->sentence(),
            "impact" => Fake()->sentence(),
            "collab" => Fake()->sentence(),
            "results" => Fake()->sentence(),
            "play" => Fake()->sentence(),
            "proud" => Fake()->sentence(),
            "status" => Fake()->randomElement(['aangevraagd', 'in behandeling', 'afgekeurd', 'goedgekeurd']),
        ];
    }
}
