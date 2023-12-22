<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'kode_mata_kuliah' => 'RPL',
        'nama_mata_kuliah' => 'Rekayasa Perangkat Lunak'
      ],
      [
        'kode_mata_kuliah' => 'KI',
        'nama_mata_kuliah' => 'Keamanan Informasi'
      ],
      [
        'kode_mata_kuliah' => 'KG',
        'nama_mata_kuliah' => 'Kriptografi'
      ],
      [
        'kode_mata_kuliah' => 'PWBF',
        'nama_mata_kuliah' => 'Pemograman Web Berbasis Framework'
      ],
      [
        'kode_mata_kuliah' => 'PM',
        'nama_mata_kuliah' => 'Pemograman Mobile'
      ],
    ];

    $this->db->table('mata_kuliah')->insertBatch($data);
  }
}
