<?php

namespace Database\Factories;

use App\Eloquents\Circle;
use App\Eloquents\ParticipationType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Circle>
 */
class CircleFactory extends Factory
{
    protected $model = Circle::class;

    public function definition(): array
    {
        return [
            'participation_type_id' => ParticipationType::factory(),
            'name' => $this->faker->name,
            'name_yomi' => $this->faker->kanaName,
            'group_name' => $this->faker->name,
            'group_name_yomi' => $this->faker->kanaName,
            'submitted_at' => now(),
            'status' => 'approved',
        ];
    }

    public function rejected(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'rejected',
        ]);
    }

    public function notSubmitted(): static
    {
        return $this->state(fn (array $attributes) => [
            'submitted_at' => null,
            'status' => null,
            'invitation_token' => bin2hex(random_bytes(16)),
        ]);
    }
}
