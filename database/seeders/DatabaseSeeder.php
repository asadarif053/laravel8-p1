<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create([
            'name' => "Asad Arif"
        ]);
        $user2 = User::factory()->create([
            'name' => "John Doe"
        ]);

        $category = Category::factory()->create([
            'name' => "Personal"
        ]);
        $category2 = Category::factory()->create([
            'name' => "Travel"
        ]);



        Post::factory(2)->create([
            "user_id" => $user->id,
            "category_id" => $category2->id,
        ]);

        Post::factory(2)->create([
            "user_id" => $user2->id,
            "category_id" => $category->id,
        ]);

        Post::factory(1)->create([
            "user_id" => $user2->id,
            "category_id" => $category2->id,
        ]);

        Post::factory(1)->create([
            "user_id" => $user->id,
            "category_id" => $category->id,
        ]);
    }
}
