<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exercicio;

class ExercicioController extends Controller
{
    public function index (){

        $exercicios = Exercicio::all();
        return view('teste', ['exercicios' => $exercicios]);
    }

    public function create(){
        return view('exercicio.criar');
    }

    public function store(Request $request){

        $exercicio = new Exercicio;

        $exercicio->nome = $request->nome;
        $exercicio->perna = $request->perna;
        $exercicio->triceps = $request->triceps;
        $exercicio->biceps = $request->biceps;
        $exercicio->ombro = $request->ombro;
        $exercicio->abdomen = $request->abdomen;

        $exercicio->save();
           return redirect('/')->with('msg', "Exercicio adciocionado com sucesso!!!!");
    }
}
