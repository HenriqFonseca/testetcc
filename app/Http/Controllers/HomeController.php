<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $user = User::all();
        return view('home.index');
    }

    public function show(){
        return view('profile.login');
        
    }

    // =====================================================================
 

    // =====================================================================
}
