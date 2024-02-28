<?php

namespace Database\Factories;

use App\Models\News;
use DateTimeImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => Arr::random(['public', 'private']),
            'public_date' => new DateTimeImmutable('now'),
            'title' => fake()->title(),
            'body' => fake()->text(),
        ];
    }
}
