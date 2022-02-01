<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //see db queries, alternative to clockwork
    // Illuminate\Support\Facades\DB::listen(function ($query){
    //     logger($query->sql, $query->bindings);
    // });

    //Post::all() would do 1 query for fetching all of the posts and then 1 for each number of post to fetch its category
    //this way is better as its only 2 queries regardless of how many posts there are.
    return view('home', [
        'posts' => Post::with('category')->get()
    ]);
});

Route::get('post/{post:slug} ', function (Post $post) {
    return view('post',[
        'post' => $post
    ]);
});

Route::get('categories/{category:slug} ', function (Category $category) {
    return view('home',[
        'posts' => $category->post
    ]);
});
