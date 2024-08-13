<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Booking::class;

    public function definition(): array
    {
        return [
            'client_name' => $this->faker->name(),
            'client_phone' => $this->faker->phoneNumber(),
            'client_email' => $this->faker->safeEmail(),
            'service_id' => Service::factory(),
            'employee_id' => Employee::factory(),
            'booking_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'canceled']),
            'payment_status' => $this->faker->randomElement(['pending', 'paid', 'refunded']),
        ];
    }
}
