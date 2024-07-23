<?php

namespace App\Database\Seeds;

use App\Controllers\Administrator\Pengumuman\Pengumuman;
use CodeIgniter\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $faker = \Faker\Factory::create();
            $data = [
                'judul' => $faker->sentence(),
                'deskripsi' => $faker->paragraph(),
            ];
            $this->db->table('pengumuman')->insertBatch($data);
        }
    }
}
