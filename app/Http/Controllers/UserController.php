<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function auth(Request $request){

        $user = new User();

        $user ->email = $request->email;
        $user ->cpf = $request->cpf;
        $user ->password = bcrypt($request->password);
        $user ->save();
        return redirect()->route('profile.login');

    }

    public function login(Request $request){

        if (Auth::attempt(['password' => $request->password, 'cpf'=>$request->cpf])){
            return redirect()->route('home.index');
        }else{
            dd('não logou');
        }
    }

    public function logout(){
        
    }
 
}


