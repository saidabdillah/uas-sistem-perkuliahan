<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliahModel extends Model
{
  protected $table      = 'mata_kuliah';
  protected $useTimestamps = true;
  protected $allowedFields = ['kode_mata_kuliah', 'nama_mata_kuliah'];
}
