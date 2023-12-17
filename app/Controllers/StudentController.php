<?php

namespace App\Controllers;

class StudentController extends BaseController
{
  public function index(): string
  {
    return view('layouts\students');
  }
}
