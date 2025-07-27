<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    protected $model = Banner::class;

    public function definition(): array
    {
        return [
            'title'       => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image_path'  => $this->faker->imageUrl(),
            'url'         => $this->faker->url(),
            'is_active'   => $this->faker->boolean(),
        ];
    }
}