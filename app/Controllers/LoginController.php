<?php

namespace App\Controllers;

class LoginController extends BaseController
{
  public function create(): string
  {
    $data = [
      'title' => 'Login',
    ];

    return view('layouts\login', $data);
  }

  public function store()
  {
    dd($this->request->getPost());
  }
}
