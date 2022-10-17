<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request){

        $this->validate($request,[
            'cpf' => 'required',
            'senha' => 'required'
        ]);

        if(Auth::attempt(['cpf'=>$request->cpf, 'senha' => $request->senha])){
            dd('LOGOU');
        }else{
            return redirect('/');
        }
    }
}
