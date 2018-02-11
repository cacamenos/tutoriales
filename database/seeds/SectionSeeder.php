<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Section;
use App\Post;

class SectionSeeder extends Seeder
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
        foreach (range(1, 10) as $index){
        	$section = Section::create([
        		'text' => $faker->text(100),
        		'pos' => $faker->numberBetween(1, 3),
        		'post_id' => $faker->randomElement($posts),
        	]);
        }
    }
}
