<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post; 
use App\Models\User; 

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;  // For slug generation if needed

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
        ]);
        $categories = [
            'Technology',
            'Health',
            'Science',
            'Sports',
            'Politics',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['slug' => Str::slug($category)],
                ['name' => $category]
            );
        }

        Post::factory(100)->create();
        
          
    }
}
