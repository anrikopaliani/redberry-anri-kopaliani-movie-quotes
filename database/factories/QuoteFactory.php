<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'quote' => [
				'en' => fake()->name(),
				'ka' => fake()->name(),
			],
			'image'    => fake()->imageUrl(),
			'movie_id' => Movie::factory(),
		];
	}
}
