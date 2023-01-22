<?php

namespace Database\Factories;

use App\Models\MasterData\Intro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Intro>
 */
class IntroFactory extends Factory
{
    protected $model = Intro::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(rand(3,6),true),
            'description' => $this->faker->unique()->sentence(),
        ];
    }
}
