<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Category;
use App\Models\Post; 
use App\Models\User; 

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;  // For slug generation if needed
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
<<<<<<< HEAD
     *
     * 
     */
    public function run(): void
    {
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com'
            ]);
        }

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
        
          
=======
     */
    public function run(): void
    {
        post::factory(10)->create();
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6
    }
}
