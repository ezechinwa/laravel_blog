<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', [PostController::class,'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', function (Category $category ){
    return view('posts',[
        'posts'=> $category->posts,
        "categories" => Category::all()
    ]);
});

Route::get('user/posts/{user:username}', function (User $user ){
    return view('posts',[
        'posts'=> $user->posts
    ]);
});


Route::get('test', function (Post $post ){
      return $post::find(1);
});
//
