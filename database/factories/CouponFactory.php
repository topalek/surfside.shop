<?php

namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    protected $model = Coupon::class;

    public function definition(): array
    {
        return [
            'code'        => strtoupper($this->faker->bothify('SAVE###')),
            'type'        => $this->faker->randomElement(['fixed', 'percent']),
            'value'       => $this->faker->randomFloat(2, 5, 50),
            'expires_at'  => now()->addDays(30),
            'usage_limit' => $this->faker->numberBetween(10, 100),
        ];
    }
}