<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function login(){
        return view('profile.login');
                
    }

    public function registrar(){
        return view('profile.registrar');
    }
}
