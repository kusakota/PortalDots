<?php

namespace Database\Factories;

use App\Eloquents\Form;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Form>
 */
class FormFactory extends Factory
{
    protected $model = Form::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'open_at' => now()->subMonth(1),
            'close_at' => now()->addMonth(1),
            'type' => 'circle',
            'max_answers' => 1,
            'is_public' => true,
        ];
    }

    public function isPrivate(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_public' => false,
        ]);
    }
}
