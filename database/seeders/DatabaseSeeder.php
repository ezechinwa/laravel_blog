<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('categories')->truncate();
        DB::table('posts')->truncate();

         User::factory(3)->create([
            'full_name'=>"John Doe"
        ]);
        Category::factory(3)->create();
        Post::factory(10)->create();



    }
}
