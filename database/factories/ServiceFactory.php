<?php

namespace Database\Factories;

use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'service_categories_id' => ServiceCategory::factory(),
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(10),
            'duration' => $this->faker->numberBetween(30, 120),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'employee_price' => $this->faker->randomFloat(2, 5, 250),

        ];
    }
}
