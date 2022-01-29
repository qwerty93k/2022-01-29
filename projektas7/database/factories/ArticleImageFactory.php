<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alt' => $this->faker->word(),
            'src' => $this->faker->word(),
            'width' => $this->faker->numberBetween(100, 200),
            'height' => $this->faker->numberBetween(100, 200),
            'class' => $this->faker->word()
        ];
    }
}
