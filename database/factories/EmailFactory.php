<?php

namespace Database\Factories;

use App\Eloquents\Email;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Email>
 */
class EmailFactory extends Factory
{
    protected $model = Email::class;

    public function definition(): array
    {
        return [
            'subject' => $this->faker->text,
            'body' => $this->faker->text,
            'email_to' => $this->faker->email,
            'email_to_name' => $this->faker->name,
            'locked_at' => null,
            'sent_at' => null,
            'count_failed' => 0,
        ];
    }
}
