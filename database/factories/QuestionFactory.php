<?php

namespace Database\Factories;

use App\Eloquents\Question;
use App\Eloquents\Form;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Question>
 */
class QuestionFactory extends Factory
{
    protected $model = Question::class;

    private static int $priority = 0;

    public function definition(): array
    {
        $options = <<<EOL
Option A
Option B
Option C
Option D
Other
EOL;

        $type = $this->faker->randomElement([
            'heading',
            'text',
            'textarea',
            'number',
            'radio',
            'select',
            'checkbox',
            'upload',
        ]);

        return [
            'form_id' => Form::factory(),
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'type' => $type,
            'is_required' => $this->faker->boolean,
            'number_min' => mt_rand(0, 40),
            'number_max' => mt_rand(50, 100),
            'allowed_types' => ($type === 'upload' ? 'png|jpg|jpeg|gif' : null),
            'options' => (in_array($type, ['radio', 'select', 'checkbox'], true) ? $options : null),
            'priority' => ++self::$priority,
        ];
    }
}
