<?php

namespace Database\Factories;

use App\Eloquents\AnswerDetail;
use App\Eloquents\Answer;
use App\Eloquents\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\AnswerDetail>
 */
class AnswerDetailFactory extends Factory
{
    protected $model = AnswerDetail::class;

    public function definition(): array
    {
        return [
            'answer_id' => Answer::factory(),
            'question_id' => Question::factory(),
            'answer' => $this->faker->paragraph(),
        ];
    }
}
