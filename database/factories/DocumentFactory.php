<?php

namespace Database\Factories;

use App\Eloquents\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Document>
 */
class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'path' => 'documents/foobar.pdf',
            'size' => 1,
            'extension' => 'pdf',
            'is_public' => true,
            'is_important' => false,
            'notes' => $this->faker->text,
        ];
    }
}
