<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_jurusan' => 'IK',
                'nama_jurusan' => 'Ilmu Komputer'
            ],
            [
                'kode_jurusan' => 'TI',
                'nama_jurusan' => 'Teknologi Informasi'
            ],
            [
                'kode_jurusan' => 'SI',
                'nama_jurusan' => 'Sistem Informasi'
            ]
        ];

        $this->db->table('jurusan')->insertBatch($data);
    }
}
