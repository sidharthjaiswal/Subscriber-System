<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // prevent redundant state
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now()->format('Y-m-d H:i:s')
        ];
    }
}
 