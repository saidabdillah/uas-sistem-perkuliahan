<?php

namespace App\Controllers;

class MataKuliahController extends BaseController
{
  private $mataKuliah;
  public function __construct()
  {
    $this->mataKuliah = new \App\Models\MataKuliahModel();
  }

  public function index(): string
  {
    $data = [
      'title' => 'Mata Kuliah',
      'mataKuliah' => $this->mataKuliah->findAll()
    ];
    return view('layouts\matakuliah', $data);
  }

  // public function create(): string
  // {
  //   return view('layouts\create-student');
  // }
}
