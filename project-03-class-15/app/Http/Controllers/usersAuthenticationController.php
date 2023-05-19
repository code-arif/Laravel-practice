<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersAuthenticationController extends Controller
{
    public function showRegister()
    {
        return view('users.Authentication.register');
    }

    public function register()
    {
        $this->validate(request(), [
            'username' => 'required|alpha_dash|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);
    }



    public function showLogin(){
        return view('users.Authentication.login');
    }
}
