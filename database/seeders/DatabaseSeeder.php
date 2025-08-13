<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    

    public function run(): void
    {
        User::factory()->create([
        'name' => 'Jaleed khan',
        'email' => 'jaleed@example.com',
    ]); 
        $categories = [
            'Technology',
            'Health',
            'Education',
            'Entertainment',
            'Sports',
            'Lifestyle',
            'Business',
        ];

        foreach($categories as $category){
            Category::create(['name' => $category]);
        }

        Post::factory(100)->create();
    }
}
