<?php

namespace Database\Factories;

use App\Eloquents\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Page>
 */
class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'body' => $this->faker->text,
            'is_pinned' => false,
            'is_public' => true,
        ];
    }
}
