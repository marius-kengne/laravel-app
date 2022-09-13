<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function getLogin(){

        return view('auth.login');
    }


    public function getregister(){

        return view('auth.register');
    }

    public function login(){

        return view('dashboard');
    }
    
    
}
