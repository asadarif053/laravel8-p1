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

        User::truncate();
        Category::truncate();
        Post::truncate();
        //\App\Models\User::factory(10)->create();
        $users = User::factory(2)->create();

        $personal = Category::create([
            'name'=>"Personal",
            'slug'=>"personal"
        ]);
        $family = Category::create([
            'name'=>"Family",
            'slug'=>"family"
        ]);
        $hobbies = Category::create([
            'name'=>"Hobbies",
            'slug'=>"hobbies"
        ]);


        Post::create([
            'category_id'=>$personal->id,
            'user_id' => $users[0]->id,
            'title'=> "My first Blog",
            'slug'=> "my-first-blog",
            'excerpt'=> "<p>exlka k aksdj laksjd akshdfk anslkd</p>",
            'body'=> "<p>lor en i lkaj lkja sdlkjlkasjd flkasjdlfk jaslkdjf  aslkdk jflka sjlkja df</p>"
        ]);

        Post::create([
            'category_id'=>$family->id,
            'user_id' => $users[1]->id,
            'title'=> "My Second Blog",
            'slug'=> "my-second-blog",
            'excerpt'=> "<p>exlka k aksdj----- laksjd akshdfk anslkd</p>",
            'body'=> "<p>lor en i lkaj lkja sdlkjlkasjd flkasjdlfk jaslkdjf  aslkdk jflka sjlkja df</p>"
        ]);

        Post::create([
            'category_id'=>$hobbies->id,
            'user_id' => $users[0]->id,
            'title'=> "My Third Blog",
            'slug'=> "my-third-blog",
            'excerpt'=> "<p><p>exlka k aksdj----99999- laksjd akshdfk anslkd</p>",
            'body'=> "<p>lor en i lkaj lkja sdlkjlkasjd flkasjdlfk jaslkdjf  aslkdk jflka sjlkja df</p>"
        ]);

        Post::create([
            'category_id'=>$hobbies->id,
            'user_id' => $users[0]->id,
            'title'=> "My Fourth Blog",
            'slug'=> "my-fourth-blog",
            'excerpt'=> "<p>exlka k aksdj----99999- laksjd akshdfk anslkd",
            'body'=> "<p>lor en i lkaj lkja sdlkjlkasjd flkasjdlfk jaslkdjf  aslkdk jflka sjlkja df</p>"
        ]);

        Post::create([
            'category_id'=>$personal->id,
            'user_id' => $users[1]->id,
            'title'=> "My Fifth Blog",
            'slug'=> "my-fifth-blog",
            'excerpt'=> "<p>exlka k aksdj----99998889- laksjd akshdfk anslkd",
            'body'=> "<p>lor en i lkaj lkja sdlkjlkasjd flkasjdlfk jaslkdjf  aslkdk jflka sjlkja df</p>"
        ]);
    }
}
