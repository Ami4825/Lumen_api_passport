<?php

namespace Database\Seeders;

use App\Models\Tbl_matkul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for ($i = 0; $i <= 20; $i++) {
            $data = [
                'kode_matkul' => $faker->buildingNumber,
                'nama_matkul' => $faker->streetName,
                'sks' => $faker->randomDigit,
                'semester' => $faker->randomDigit,
                'nip' => $faker->buildingNumber,
            ];
            Tbl_matkul::create($data);
        }
    }
}
