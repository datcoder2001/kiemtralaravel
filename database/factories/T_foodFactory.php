<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class T_foodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name'=> $this->faker->name(),
            'model' => $this->faker->asciify(),
            'unit_price' => $this->faker->numberBetween(10000, 100000),
            'promotion_price' => $this->faker->numberBetween(10000, 100000),
            'description' => $this->faker->word(),
            'image' => rand(1,6).'.jpg',
        ];
    }
}
