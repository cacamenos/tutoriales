<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UserSeeder extends Seeder
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
        	$user = User::create([
        		'name' => $faker->firstName(),
        		'last_name' => $faker->lastName(),
        		'email' => $faker->email(),
        		'password' => $faker->password(),
        	]);
        }
    }
}
