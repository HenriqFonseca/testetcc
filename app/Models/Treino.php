<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'instrutor_id',
        'exercicio_id',
        'perna',
        'triceps',
        'biceps',
        'ombros',
        'abdomen',
    ];


    public function user(){
            return $this->belongsTo(User::class);
    }

    public function exercicio(){
        return $this->belongsTo(Exercicio::class);
}
}
