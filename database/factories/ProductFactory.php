<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price'=> $this->faker->randomFloat(2,5,500),
            'description'=> $this->faker->text(120),
            'category_id'=>$this->faker->numberBetween(1,3),
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
