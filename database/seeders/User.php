<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 10; $i++){
        DB::table('user')->insert([
            'nama' => $faker->name,
            'email' =>$faker->email,
            'Password' => $faker->password,
            'alamat' => $faker->address
        	
        ]);
        }
    
    }
}
