<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\JurusanModel;

class MahasiswaController extends BaseController
{

  public $mahasiswa;
  public function __construct()
  {
    $this->mahasiswa = new MahasiswaModel();
  }

  public function index(): string
  {
    $data = [
      'title' => 'Mahasiswa',
      'mahasiswa' => $this->mahasiswa->findAll(),
    ];
    return view('layouts\mahasiswa', $data);
  }

  public function edit($nim): string
  {
    $mahasiswa = $this->mahasiswa->where('nim', $nim)->first();
    $jurusan = new JurusanModel();
    $data = [
      'title' => 'Mahasiswa',
      'jurusan' => $jurusan->findAll(),
      'mahasiswa' => $mahasiswa,
    ];
    return view('layouts\edit-mahasiswa', $data);
  }

  public function update($nim)
  {
    dd($nim);
  }

  public function delete($nim)
  {
    $this->mahasiswa->where('nim', $nim)->delete();
  }
}
