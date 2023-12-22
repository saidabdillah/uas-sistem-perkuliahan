<?php

namespace App\Controllers;

class KehadiranController extends BaseController
{
  public function index(): string
  {
    $data = [
      'title' => 'Kehadiran',
    ];
    return view('layouts\kehadiran', $data);
  }
}
