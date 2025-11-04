<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author_id' => Author::inRandomOrder()->value('id') ?? Author::factory(),
            'category_id' => Category::inRandomOrder()->value('id') ?? Category::factory(),
            'title' => $this->faker->unique()->sentence(3),
            'isbn' => $this->faker->unique()->isbn13(),
            'publisher' => $this->faker->company(),
            'publication_year' => $this->faker->year(),
            'status' => $this->faker->randomElement(['available', 'checked_out', 'reserved']),
            'store_location' => $this->faker->city(),
            'pages' => $this->faker->numberBetween(100, 800),
            'average_rating' => 0,
            'ratings_count' => 0,
            'description' => $this->faker->paragraph(4),
        ];
    }
}
