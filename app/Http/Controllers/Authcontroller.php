<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function login(){

        return view('auth.login');

    }
    public function authenticate(request $request){
        dd();

    }
    public function logout(){

    }
}
