<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name(),
            'author' => $this->faker->name(),
            'image' => Str::random(10),
            'publish_at' => now(),
            'num_of_page' => rand(0,100),
            'rate' => rand(5,10),
            'quantity' => 10,
            'status' => 1,
            'price' => rand(10,15)
        ];
    }
}
