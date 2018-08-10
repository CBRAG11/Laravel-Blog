<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']); 
    }

    public function register()
    {
    	return view('sessions.register');
    }

    public function login()
    {
    	return view('sessions.login');
    }

    public function store()
    {
        // $this->validate(request([
        //     'email'   => 'required|min:2|email',
        //     'password'=>'required'
        // ]));

        if(! auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([
            "message"=>"Invalid email or password"
            ]);
        }
        else
        {
           return redirect('/Posts/Blog');
        }
    }
    


     public function destroy()
    {
    	auth()->logout();   
    	return redirect('/login');
    }

    
}


   
