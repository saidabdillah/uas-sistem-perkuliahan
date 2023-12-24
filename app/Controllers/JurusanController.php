<?php

namespace App\Controllers;

class JurusanController extends BaseController
{
  public $jurusan;
  public function __construct()
  {
    $this->jurusan = new \App\Models\JurusanModel();
  }

  public function index(): string
  {
    $data = [
      'title' => 'Jurusan',
      'jurusan' => $this->jurusan->findAll(),
    ];
    return view('layouts\jurusan', $data);
  }

  public function create(): string
  {
    $validation = \Config\Services::validation();
    $data = [
      'title' => 'Jurusan',
      'validation' => $validation,
    ];
    return view('layouts\tambah-jurusan', $data);
  }

  public function store()
  {
    $session = \Config\Services::session();
    $validation = \Config\Services::validation();
    $validation->setRules([
      'kode_jurusan' => [
        'rules' => 'required|is_unique[jurusan.kode_jurusan]',
        'errors' => [
          'required' => 'Kode Jurusan Harus Diisi.',
          'is_unique' => 'Kode Jurusan Sudah Ada.'
        ]
      ],
      'nama_jurusan' => [
        'rules' => 'required|is_unique[jurusan.nama_jurusan]|alpha_space',
        'errors' => [
          'alpha_space' => 'Harus Abjad',
          'required' => 'Nama Jurusan Harus Diisi.',
          'is_unique' => 'Nama Jurusan Sudah Ada.',
        ],
      ]
    ]);

    $jurusan = [
      'kode_jurusan' => $this->request->getPost('kode_jurusan'),
      'nama_jurusan' => $this->request->getPost('nama_jurusan'),
    ];

    if (!$validation->run($jurusan)) {
      return redirect()->to('/dashboard/jurusan/tambah')->withInput()->with('validation', $validation);
    }

    $this->jurusan->insert($jurusan);
    $session->setFlashdata('berhasil', 'Jurusan Berhasil Ditambah.');
    return redirect()->to('/dashboard/jurusan');
  }

  public function edit($kodeJurusan)
  {
    $jurusan  = [
      'title' => 'Jurusan',
      'jurusan' => $this->jurusan->where('kode_jurusan', $kodeJurusan)->first(),
    ];
    return view('layouts\edit-jurusan', $jurusan);
  }

  public function update($kodeJurusan)
  {
    $session = \Config\Services::session();
    $validation = \Config\Services::validation();

    $jurusan = [
      'kode_jurusan' => $this->request->getPost('kode_jurusan'),
      'nama_jurusan' => $this->request->getPost('nama_jurusan'),
    ];

    $validation->setRules([
      'kode_jurusan' => [
        'rules' => 'required|is_unique[jurusan.kode_jurusan]',
        'errors' => [
          'required' => 'Kode Jurusan Harus Diisi.',
          'is_unique' => 'Kode Jurusan Sudah Ada.'
        ]
      ],
      'nama_jurusan' => [
        'rules' => 'required|is_unique[jurusan.nama_jurusan]|alpha_space',
        'errors' => [
          'alpha_space' => 'Harus Abjad',
          'required' => 'Nama Jurusan Harus Diisi.',
          'is_unique' => 'Nama Jurusan Sudah Ada.',
        ],
      ]
    ]);

    if ($validation->run($jurusan)) {
      $this->jurusan->where('kode_jurusan', $kodeJurusan)->set($jurusan)->update();
      $session->setFlashdata('berhasil', 'Jurusan Berhasil Diubah.');
      return redirect()->to('dashboard/jurusan');
    }
    return redirect()->back()->withInput()->with('validation', $validation);
  }

  public function delete($kodeJurusan)
  {
    $session = \Config\Services::session();

    $this->jurusan->where('kode_jurusan', $kodeJurusan)->delete();

    $session->setFlashdata('berhasil', 'Jurusan Berhasil Dihapus.');
    return redirect()->to('/dashboard/jurusan');
  }
}
