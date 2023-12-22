<?php

namespace App\Controllers;

class MahasiswaController extends BaseController
{
  public function index(): string
  {
    $data = [
      'title' => 'Mahasiswa',
    ];
    return view('layouts\mahasiswa', $data);
  }

  public function create(): string
  {
    $data = [
      'title' => 'Mahasiswa',
    ];
    return view('layouts\tambah-mahasiswa', $data);
  }
}
