<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'user_id'      => User::factory(),
            'address_line' => $this->faker->streetAddress(),
            'city'         => $this->faker->city(),
            'postal_code'  => $this->faker->postcode(),
            'country'      => $this->faker->country(),
        ];
    }
}