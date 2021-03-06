<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class, 5)->create();
    }
}
