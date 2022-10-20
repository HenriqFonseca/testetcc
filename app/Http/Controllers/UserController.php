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

        $user ->cpf = $request->cpf;
        $user ->password = bcrypt($request->password);
        $user ->save();
       // if(Auth::loginUsingId(['cpf' => $request->cpf, 'password'=>$request->password])){
  //          dd('logou');
      //  }else{
      //      dd('n logou');
      //  }
    }
}
