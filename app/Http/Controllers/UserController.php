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
            'password' => 'required',
            'professor' => 'required',
        ]);


        if(Auth::attempt(['cpf'=>$request->cpf, 'password' => $request->password , 'aluno' =>$request->aluno])){
            dd('LOGOU');
            if($request->aluno && $request->professor === 0){
                $this->validate($request,[
                    'aluno' => 'required',
                    'professor' => 'required',
                ]);
            }
        }else{
            return redirect('/');
        }
    }
}
