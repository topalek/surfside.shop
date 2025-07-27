<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    protected $model = Subscription::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'email'   => $this->faker->safeEmail(),
            'active'  => $this->faker->boolean(),
        ];
    }
}