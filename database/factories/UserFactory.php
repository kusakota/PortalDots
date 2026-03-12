<?php

namespace Database\Factories;

use App\Eloquents\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Eloquents\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'student_id' => Str::random(mt_rand(7, 20)),
            'name' => $this->faker->name,
            'name_yomi' => $this->faker->kanaName,
            'email' => $this->faker->unique()->safeEmail,
            'univemail_local_part' => $this->faker->slug,
            'univemail_domain_part' => $this->faker->safeEmailDomain,
            'tel' => $this->faker->phoneNumber,
            'is_staff' => false,
            'is_admin' => false,
            'email_verified_at' => now(),
            'univemail_verified_at' => now(),
            'signed_up_at' => now(),
            'last_accessed_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    public function staff(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_staff' => true,
            'is_admin' => false,
        ]);
    }

    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_staff' => true,
            'is_admin' => true,
        ]);
    }

    public function notVerified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
            'univemail_verified_at' => null,
            'signed_up_at' => null,
        ]);
    }
}
