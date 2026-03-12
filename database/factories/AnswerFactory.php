<?php

namespace Database\Factories;

use App\Eloquents\Answer;
use App\Eloquents\Form;
use App\Eloquents\Circle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Answer>
 */
class AnswerFactory extends Factory
{
    protected $model = Answer::class;

    public function definition(): array
    {
        return [
            'form_id' => Form::factory(),
            'circle_id' => Circle::factory(),
        ];
    }
}
