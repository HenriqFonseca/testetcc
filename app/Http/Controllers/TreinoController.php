<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function aluno(){
        return view('treino.aluno');
    }

    public function professor(){
        return view('treino.professor');
    }

    public function show(){
        return view('');
    }
    public function create(){
        
    }

    public function edit(){
        
    }

    public function delete(){
        
    }
}
