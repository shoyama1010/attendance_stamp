<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	// public function index()
	// {
	//     return view('index');
	// }
	public function register()
	{
		$name = 'name';
		return view('register', compact('name'));
	}
	// <!-- <p>ようこそ、{{ Auth::user()->name }}さん！</p> -->
	public function login()
	{
		// $name = 'email';
		// $password = 'password';
		// return view('login', compact('email','password'));
		return view('login');
	}


}
