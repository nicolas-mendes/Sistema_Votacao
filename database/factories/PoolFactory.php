<?php

namespace Database\Factories;

use App\Models\Option;
use App\Models\Pool;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pool>
 */
class PoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $state = fake()->randomElement(['not started', 'in progress', 'finished']);

        if ($state === 'not started') {
            $date_start = fake()->dateTimeBetween('+1 day', '+1 week');
            $date_end = fake()->dateTimeBetween($date_start, $date_start->format('Y-m-d\TH:i') . ' +1 week');
        } elseif ($state === 'in progress') {
            $date_start = fake()->dateTimeBetween('-1 week', '-1 day');
            $date_end = fake()->dateTimeBetween('+1 day', '+1 week');
        } else { // 'finished'
            $date_start = fake()->dateTimeBetween('-2 weeks', '-1 week');
            $date_end = fake()->dateTimeBetween($date_start, $date_start->format('Y-m-d\TH:i') . ' +1 week');
        }

        return [
            'title' => fake()->words(3, true),
            'question' => rtrim(fake()->sentence(), '.').'?',
            'date_start' => $date_start,
            'date_end' => $date_end,
            'status' => $state,
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Pool $pool) {
            Option::factory()
                ->count(fake()->numberBetween(3, 10))
                ->create([
                    'pool_id' => $pool->id,
                ]);
        });
    }
}