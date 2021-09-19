<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        static $password;
        foreach(range(1,250) as $index){
            DB::table('users')->insert([
                'name' => $faker->sentence(1),
                'email'=> preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail),
                'password'=>$password ?: $password = bcrypt('secret'),
            ]);
        }
    }
}
