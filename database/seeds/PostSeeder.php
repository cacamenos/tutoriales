<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
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
        foreach (range(1, 10) as $index){
        	$post = Post::create([
        		'title' => $faker->text(30),
        		'abstract' => $faker->text(200),
        	]);
        }
    }
}
