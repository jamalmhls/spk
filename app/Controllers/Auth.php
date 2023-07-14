<?php

namespace App\Controllers;

use CodeIgniter\Shield\Controllers\LoginController;

class Auth extends BaseController
{
  function index()
  {
    return view('auth/login');
  }
}
