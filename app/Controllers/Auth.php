<?php

namespace App\Controllers;

use CodeIgniter\Shield\Controllers\LoginController;

class Auth extends LoginController
{
  function loginView()
  {
    return view('auth/login');
  }

  // function index()
  // {
  //   return view('auth/login');
  // }
}
