<?php

namespace Database\Factories;

use App\Eloquents\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\Tag>
 */
class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition(): array
    {
        return [
            // 同じnameが2つ以上生成されないよう、乱数を追加する
            'name' => $this->faker->name . strval(mt_rand(0, 10000)),
        ];
    }
}
