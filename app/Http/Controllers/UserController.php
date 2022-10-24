<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
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

    public function login(LoginRequest $request){

        $request->validate();
        if (Auth::attempt(['password' => $request->password, 'cpf'=>$request->cpf])){
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }else{
            session()->flash('erro' , 'Usuário inexistente');
            return redirect()->route('home.index');
            
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home.index');
    }
 
}


