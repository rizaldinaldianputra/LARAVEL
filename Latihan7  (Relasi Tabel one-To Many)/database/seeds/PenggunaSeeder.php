<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 10 record
        for ($x = 1; $x <= 100; $x++) {

            // insert data dummy pegawai dengan faker
            DB::table('pengguna')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
            ]);
        }
    }
}
