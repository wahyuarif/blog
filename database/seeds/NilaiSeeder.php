<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NilaiSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 20; $i++) {
            DB::table('nilai')->insert([
                'nim'       => $faker->Uuid,
                'nama'      => 'nama',
                'prodi'     => $faker->job, 
                'judul'     => $faker->internet,
                'nm_dosen'  => 'nmdosen'
            ]);
        }
    }
}
