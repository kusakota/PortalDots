<?php

namespace Database\Factories;

use App\Eloquents\Read;
use App\Eloquents\Page;
use App\Eloquents\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Read>
 */
class ReadFactory extends Factory
{
    protected $model = Read::class;

    public function definition(): array
    {
        return [
            'page_id' => Page::factory(),
            'user_id' => User::factory(),
        ];
    }
}
