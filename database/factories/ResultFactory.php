<?php

namespace Database\Factories;

use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Result::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'runDate' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
            'runTime' => $this->faker->numberBetween($min = 10, $max = 360),
            'startLatitude' => $this->faker->latitude($min = -44.0000, $max = -45.0000),
            'startLongitude' => $this->faker->longitude($min = 166.0000, $max = 170.0000),
            'endLatitude' => $this->faker->latitude($min = -44.0000, $max = -45.0000),
            'endlongitude' => $this->faker->longitude($min = 166.0000, $max = 170.0000),
            'created_at' => now(),
            'updated_at' => now(),
            'run_id' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
