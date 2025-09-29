<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence(6);
        
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'body' => $this->faker->paragraphs(5, true),
            'author_id' => User::factory(),
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'is_featured' => $this->faker->boolean(50),
        ];
    }
}
