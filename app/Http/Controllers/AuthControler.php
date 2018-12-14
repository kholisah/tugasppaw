<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controllers
{
	public function getlogin()
	{
		return view('login');
	}

	public function postLogin(Request $request){
		dd('login ok')
	}
	{
		
	}

	public function getRegister()
	{
		return view('register');
	}

	public function postRegister(request $request){
		dd('Registration Ok')
	}
}