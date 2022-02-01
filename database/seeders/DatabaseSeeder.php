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

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family',
            'slug' => 'my-first-post',
            'excerpt' => 'lorem imsum dolar sit amet',
            'body' => '<p>Lorem ipsum ut ullamco ad sit enim duis consectetur aute consequat officia dolore ex ex in minim labore. Eiusmod tempor aute eu id cillum do aliquip dolor eiusmod dolore minim quis in  irure nulla aute veniam sed excepteur esse sed amet tempor voluptate esse. </p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal',
            'slug' => 'my-second-post',
            'excerpt' => 'lorem imsum dolar sit amet',
            'body' => '<p> Lorem ipsum ut ullamco ad sit enim duis consectetur aute consequat officia dolore ex ex in minim labore. Eiusmod tempor aute eu id cillum do aliquip dolor eiusmod dolore minim quis in  irure nulla aute veniam sed excepteur esse sed amet tempor voluptate esse. </p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work',
            'slug' => 'my-third-post',
            'excerpt' => 'lorem imsum dolar sit amet',
            'body' => '<p>Lorem ipsum ut ullamco ad sit enim duis consectetur aute consequat officia dolore ex ex in minim labore. Eiusmod tempor aute eu id cillum do aliquip dolor eiusmod dolore minim quis in  irure nulla aute veniam sed excepteur esse sed amet tempor voluptate esse.</p>'
        ]);
    }
}
