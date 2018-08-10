<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
	public function create()
	{
		return view('registration.create');
	}
	public function store(User $user)
	{
		//validate the form submitted for registration
		$this->validate(request(), [
			'name' 		=> 'required|min:2', 
			'email' 	=> 'required|min:2|email',
			'password' 	=> 'required|confirmed'
		]);

		//Create and save the user
		$user = User::create(request(['name', 'email','password']));

		//Sign the created user in
		auth()->login($user);

		//Redirect to home
		return Redirect()->home();
	}

    
}
