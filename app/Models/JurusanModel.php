<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
  protected $table      = 'jurusan';
  protected $useTimestamps = true;
  protected $allowedFields = ['kode_jurusan', 'nama_jurusan'];
}
