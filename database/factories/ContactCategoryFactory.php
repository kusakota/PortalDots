<?php

namespace Database\Factories;

use App\Eloquents\ContactCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\ContactCategory>
 */
class ContactCategoryFactory extends Factory
{
    protected $model = ContactCategory::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
        ];
    }
}
