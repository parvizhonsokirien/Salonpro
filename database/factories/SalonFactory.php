<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Salon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salon>
 */
class SalonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Salon::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'working_hours' => $this->faker->numberBetween(1, 12) . ':00 - ' . $this->faker->numberBetween(13, 23) . ':00',
        ];
    }
}
