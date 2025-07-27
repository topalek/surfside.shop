<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'category_id'    => Category::factory(),
            'name'           => $this->faker->word() . ' ' . $this->faker->colorName(),
            'brand'          => $this->faker->company(),
            'sku'            => strtoupper($this->faker->bothify('SKU-###-??')),
            'description'    => $this->faker->paragraph(),
            'price'          => $this->faker->randomFloat(2, 1000, 10000),
            'discount_price' => null, // или $this->faker->optional()->randomFloat(2, 500, 9000)
            'stock'          => $this->faker->numberBetween(0, 100),
            'is_active'      => $this->faker->boolean(90),
        ];
    }
}