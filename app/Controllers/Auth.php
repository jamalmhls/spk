<?php

namespace App\Controllers;

class Auth extends BaseController
{
  function index()
  {
    return view('auth/login');
  }
}
