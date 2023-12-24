<?php

namespace App\Controllers;

class MataKuliahController extends BaseController
{
  private $mataKuliah;
  public function __construct()
  {
    $this->mataKuliah = new \App\Models\MataKuliahModel();
  }

  public function test()
  {
    return view('layouts\test');
  }

  public function index()
  {

    $data = [
      'title' => 'Mata Kuliah',
      'mataKuliah' => $this->mataKuliah->findAll()
    ];

    return view('layouts\matakuliah', $data);
  }

  public function create(): string
  {
    $data = [
      'title' => 'Mata Kuliah',
    ];
    return view('layouts\tambah-mata-kuliah', $data);
  }

  public function store()
  {
    $session = \Config\Services::session();
    $validation = \Config\Services::validation();

    $mataKuliah = [
      'kode_mata_kuliah' => $this->request->getPost('kode_mata_kuliah'),
      'nama_mata_kuliah' => $this->request->getPost('nama_mata_kuliah'),
    ];

    $validation->setRules([
      'kode_mata_kuliah' => [
        'rules' => 'required|is_unique[mata_kuliah.kode_mata_kuliah]',
        'errors' => [
          'required' => 'Kode Mata Kuliah Harus Diisi.',
          'is_unique' => 'Kode Mata Kuliah Sudah Ada.',
        ]
      ],
      'nama_mata_kuliah' => [
        'rules' => 'required|is_unique[mata_kuliah.nama_mata_kuliah]',
        'errors' => [
          'required' => 'Nama Mata Kuliah Harus Diisi.',
          'is_unique' => 'Nama Mata Kuliah Sudah Ada.',
        ]
      ]
    ]);

    if (!$validation->run($mataKuliah)) {
      return redirect()->back()->withInput()->with('validation', $validation);
    }

    $this->mataKuliah->insert($mataKuliah);

    $session->setFlashdata('berhasil', 'Mata Kuliah Berhasil Ditambahkan.');
    return redirect()->to('/dashboard/matakuliah');
  }

  public function edit($kodeMataKuliah)
  {
    $data =
      [
        'title' => 'Mata Kuliah',
        'matakuliah' => $this->mataKuliah->where('kode_mata_kuliah', $kodeMataKuliah)->first(),
      ];

    return view('layouts\edit-mata-kuliah', $data);
  }

  public function update($kodeMataKuliah)
  {
    $session = \Config\Services::session();
    $validation = \Config\Services::validation();

    $mataKuliah = [
      'kode_mata_kuliah' => $this->request->getPost('kode_mata_kuliah'),
      'nama_mata_kuliah' => $this->request->getPost('nama_mata_kuliah'),
    ];

    $validation->setRules([
      'kode_mata_kuliah' => [
        'rules' => 'required|is_unique[mata_kuliah.kode_mata_kuliah]',
        'errors' => [
          'required' => 'Kode Mata Kuliah Harus Diisi.',
          'is_unique' => 'Kode Mata Kuliah Sudah Ada.',
        ]
      ],
      'nama_mata_kuliah' => [
        'rules' => 'required|is_unique[mata_kuliah.nama_mata_kuliah]',
        'errors' => [
          'required' => 'Nama Mata Kuliah Harus Diisi.',
          'is_unique' => 'Nama Mata Kuliah Sudah Ada.',
        ]
      ]
    ]);

    if (!$validation->run($mataKuliah)) {
      return redirect()->back()->withInput()->with('validation', $validation);
    }

    $this->mataKuliah->where('kode_mata_kuliah', $kodeMataKuliah)->set($mataKuliah)->update();

    $session->setFlashdata('berhasil', 'Mata Kuliah Berhasil Diubah.');
    return redirect()->to('/dashboard/matakuliah');
  }

  public function delete($kodeMataKuliah)
  {
    $session = \Config\Services::session();
    $this->mataKuliah->where('kode_mata_kuliah', $kodeMataKuliah)->delete();
    return redirect()->to('/dashboard/matakuliah')->with('berhasil', 'Mata Kuliah Berhasil Dihapus.');
  }
}
