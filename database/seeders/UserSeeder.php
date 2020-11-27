<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User as User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('id_ID');
        for ($i=0; $i < 10; $i++) { 
            if($i!=1){    
                $token=Str::random(100);
            }else{
                $token='XaG8UakHu5AN4W6Kc7rfJS16W4ibQ3W7S1LyCZEoPDNubO1OnU9VJBCrma0gRJMIBYYxpWWu6crn21E7f156LiIgglUIaAri4sdQ';
            }
            User::create([
                'name'=>$faker->name,         
                'email'=>$faker->email,         
                // 'email_verified_at'=>$faker->email,         
                //'password'=>bcrypt('pass_user'),
                'api_token'=>$token,
                // 'api_token'=>Str::random(100),         
            ]);
        }
        
    }
}
