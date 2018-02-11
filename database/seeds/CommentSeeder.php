<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comment;
use App\Post;
use App\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $posts = Post::all()->pluck('id')->toArray();
        $users = User::all()->pluck('id')->toArray();
        foreach (range(1, 10) as $index){
        	$comment = Comment::create([
        		'text' => $faker->text(100),
        		'parent' => $faker->numberBetween(0, 2),
        		'post_id' => $faker->randomElement($posts),
        		'user_id' => $faker->randomElement($users),
        	]);
        }
    }
}
