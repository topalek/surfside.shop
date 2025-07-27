<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->word();

        return [
            'parent_id'   => null, // по умолчанию верхний уровень
            'name'        => ucfirst($name),
            'slug'        => Str::slug($name),
            'description' => $this->faker->sentence(),
        ];
    }

    public function withParent(Category $parent): static
    {
        return $this->state([
            'parent_id' => $parent->id,
        ]);
    }
}
