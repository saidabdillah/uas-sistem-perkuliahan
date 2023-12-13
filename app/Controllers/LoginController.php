<?php

namespace App\Controllers;


class LoginController extends BaseController
{
  public function create(): string
  {
    $userModel = new \App\Models\UserModel();

    $user = $userModel->findAll();
    var_dump($user);

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
