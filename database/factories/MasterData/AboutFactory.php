<?php

namespace Database\Factories\MasterData;

use App\Models\MasterData\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterData\About>
 */
class AboutFactory extends Factory
{
    protected $model = About::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(2,true),
            'description' => $this->faker->unique()->sentences(3,true),
        ];
    }
}
