<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomFloat(0,1,18),
            'post_title' => $this->faker->title(),
            'post_body' => $this->faker->text(25),
            'post_image' => $this->faker->imageUrl()
        ];
    }
}
