<?php

namespace Database\Seeders;

use App\Models\Tbl_dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TblDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 5; $i++) {
            $data = [
                'nip' => $faker->buildingNumber,
                'nama_dosen' => $faker->streetName,
                'alamat' => $faker->address,
                'kota' => $faker->city,
                'no_hp' => $faker->ean8,
            ];
            Tbl_dosen::create($data);
        }
    }
}
