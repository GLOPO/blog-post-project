<<<<<<< HEAD
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence();
        return [
            'image' => fake()->imageUrl(),
            'title' =>  $title,
            'slug' =>\Illuminate\Support\Str::slug($title),
            'content' => fake()->paragraph(5),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => 1,
            'published_at' => fake()->optional()->dateTime(),
            
        ];
    }
}
=======
use Illuminate\Support\Str;

public function definition(): array
{
    return [
        'title' => $this->faker->sentence,
        'body' => $this->faker->paragraphs(3, true),
        ];
}
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6
