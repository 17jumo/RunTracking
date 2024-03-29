<?php

namespace Database\Factories;

use App\Models\Run;
use Illuminate\Database\Eloquent\Factories\Factory;

class RunFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Run::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'runName' => $this->faker->word(2),
            'runDesc' => $this->faker->word(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
