<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
use App\Models\Bengkel;

class BengkelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
          Bengkel::create(
              [
                  'nama'=>$faker->name,
                  'alamat'=>$faker->address,
                  'no_hp'=>$faker->phoneNumber,
                  'keterangan'=>$faker->text,
                  'created_who'=>$faker->name,
                  'update_who'=>$faker->name,
                  'id_pemilik'=>$faker->randomDigit,
                  'id_lokasi'=>$faker->randomDigit,
                  'id_penilaian'=>$faker->randomDigit,
              ]
              );  
        }
    }
}
