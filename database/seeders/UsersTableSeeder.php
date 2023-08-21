<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();
        $user= new User;
        $user->id= $faker->uuid();
        $user->first_name = $faker->name;
        $user->last_name = $faker->name;
        $user->email = $faker->email;
        $user->mobile_number = $faker->phoneNumber;
        $user->password=$faker->password;
        $user->save();

       $faker = Faker::create();
        

           
    
    }
}
