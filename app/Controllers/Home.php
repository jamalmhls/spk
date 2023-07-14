<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}

	function error()
	{
		return view('errors/404');
	}
}
