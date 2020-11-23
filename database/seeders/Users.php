<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Str;



class Users extends Seeder
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
            if($i!=1){    
                $token=Str::random(100);
            }else{
                $token='XaG8UakHu5AN4W6Kc7rfJS16W4ibQ3W7S1LyCZEoPDNubO1OnU9VJBCrma0gRJMIBYYxpWWu6crn21E7f156LiIgglUIaAri4sdQ';
            }
        DB::table('users')->insert([
            'username' => $faker->username,
            'password' => Hash::make('123'),
            'nama' => $faker->name,
            'email' => $faker->email,
            'nohp' => $faker->phoneNumber,
            'tanggal_lahir'=> $faker->date,
            'created_when' => $faker->date,
            'update_when' => $faker->date,
            'remember_token'=>$token
        	
        ]);
        }
    
    }
}
