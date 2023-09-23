<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;
use Faker\Factory as Faker;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=1; $i <=100 ; $i++) {
          $users = new Users;
        $users->name = $faker->name;
        $users->email = $faker->email;
        $users->password = $faker->password;
        $users->save();
        }

    }
}
