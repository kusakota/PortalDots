<?php

namespace Database\Factories;

use App\Eloquents\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Place>
 */
class PlaceFactory extends Factory
{
    protected $model = Place::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->numberBetween(1, 3),
        ];
    }
}
