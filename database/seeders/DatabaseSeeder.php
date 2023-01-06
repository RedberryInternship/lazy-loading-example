<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
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
        $users = User::factory(10)->create();
        foreach ($users as $user) {
           $posts =  Post::factory(10)->create([
                'user_id'   => $user
            ]);
            foreach ($posts as $post) {
                Comment::factory(20)->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id
                ]);
            }
        }
    }
}
